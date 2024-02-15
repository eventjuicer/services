<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Eventjuicer\Services\Resolver;
use Eventjuicer\Services\GetByRole;
use Eventjuicer\Services\SaveOrder;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Repositories\MeetupRepository;
use Eventjuicer\Repositories\Criteria\FlagEquals;
use Eventjuicer\Repositories\Criteria\BelongsToEvent;

class VisitorMeetups extends Command {

    protected $signature = 'visitors:meetups

        {--domain=}
        {--direction=}
       
    ';
    
    protected $description = 'Get the list of participant with meetups (VIPS?)';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function handle(MeetupRepository $meetups, SaveOrder $saveorder)
    {
       
        $domain = $this->option("domain");
        $direction = $this->option("direction");

        $errors = [];


        if(empty($domain)) {
            $errors[] = "--domain= must be set!";
        }

        if(count($errors)){
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }

        if(empty($direction)){
            $direction  = $this->anticipate('ALL, P2C, C2P, LTD?', ['ALL', 'P2C', 'C2P', 'LTD']);
        }


        /**
            LET'S FUCKING START!
        **/

        $route = new Resolver( $domain );

        $eventId =  $route->getEventId();

        $this->info("Event id: " . $eventId);

        $meetups->pushCriteria(new BelongsToEvent($eventId));
        $meetups->pushCriteria(new FlagEquals("agreed", 1));
        if($direction !="ALL"){
            $meetups->pushCriteria(new FlagEquals("direction", $direction));
        }
        $vips = $meetups->with([
            "participant.fields", 
            "participant.ticketdownload", 
            "presenter.fields"
        ])->all();

        $this->info("Number of unique meetups: " . $vips->count() );

        $done = 0;
        $all = array();

        foreach($vips as $vip)
        {

            $participant = $vip->participant;
            $presenter = $vip->presenter;

            $participant_profile = (new Personalizer($participant));
            $presenter_profile = (new Personalizer($presenter));

            $details = $participant_profile->translate('"[[email]]", "[[fname]]", "[[lname]]", "[[cname2]]", "[[phone]]"');
            $presentation = $presenter_profile->translate('"[[presentation_venue]]", "[[presentation_time]]"');

            $this->line($details. ", " . $presentation);

            $all[] = $details. ", " . $presentation;

            $done++;

        }   

        $baseFilename = $eventId."_".$direction."_". md5(time() . $eventId).".csv";

        file_put_contents(
            app()->basePath("storage/app/public/" . $baseFilename), 
            implode( "\n", $all )
        );

        $this->info("storage/" . $baseFilename);

    }
}
