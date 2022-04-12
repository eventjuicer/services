<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Eventjuicer\Services\Resolver;
use Eventjuicer\Repositories\ParticipantRepository;

use Eventjuicer\Repositories\Criteria\BelongsToGroup;
use Eventjuicer\Repositories\Criteria\BelongsToOrganizer;
use Eventjuicer\Repositories\Criteria\SortByDesc;
use Eventjuicer\Repositories\Criteria\WhereIn;
use Eventjuicer\Services\Hashids;

use Eventjuicer\Services\Revivers\ParticipantSendable;
use Eventjuicer\Models\Purchase;
use Eventjuicer\Models\ParticipantFields;
use Eventjuicer\Services\Personalizer;

class CheckInconsistency extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'purchases:check {--domain=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){

        $domain = $this->option("domain");

        $errors = [];

        if( empty( $domain ) ) {
            $errors[] = "--domain= must be provided!";
        }

        if(!empty($errors))
        {
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }

        //$sendable->excludeFromFile( base_path("ebeunsub.txt") );

        $route          = new Resolver($domain);
        $eventId        = $route->getEventId();
        $group_id       = $route->getGroupId();
        $organizer_id   = $route->getOrganizerId();
      

        $purchases = Purchase::with("participant.company.participants")->where("event_id", $eventId)->get();

        foreach($purchases as $purchase){

            $participant = $purchase->participant;
            
            if($participant->event_id != $eventId){
                $this->error("Error re: " . $participant->email . " / ". $participant->company->slug);
                $this->info("Purchase (" . $purchase->id . ") Participant from other (" .  $participant->id . ")");
                $participantsOK = $participant->company->participants->where("event_id", $eventId)->pluck("id")->all();
                $this->info("Target participants:" . implode(", ", $participantsOK));

            }
        }


        

        
    }





}
