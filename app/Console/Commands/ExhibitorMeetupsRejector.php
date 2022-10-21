<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Eventjuicer\Services\Resolver;
use Eventjuicer\Crud\CompanyMeetups\Fetch as CompanyMeetupsFetch;
use Eventjuicer\Jobs\Meetups\HandleLTDReject;
use Carbon\Carbon;



class ExhibitorMeetupsRejector extends Command
{




    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exhibitors:meetups_ltd {--domain=} {--threshold=}';

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

    public function handle(CompanyMeetupsFetch $meetups){

        $errors = [];

        $domain = $this->option("domain");
        $threshold = $this->option("threshold");


        if(empty($domain)) {
            $errors[] = "--domain= must be set!";
        }
        if(empty($threshold)) {
            $errors[] = "--threshold= must be set!";
        }

        if(!empty($errors)){
                $this->error("Errors found:");
            foreach($errors AS $error){
                 $this->line($error);
            }
            return;
        }

        $route = new Resolver($domain);
        $eventId =  $route->getEventId();
        $this->info("Event id: " . $eventId);



        $meetups->setParam("event_id", $eventId );
        $ltd = $meetups->getAllForEventByDirection("LTD");
        $groupedByCompany = $ltd->groupBy('company_id');


       foreach($groupedByCompany as $company_id => $companyMeetups){

            $this->info("Company id $company_id");
            $agreed = $companyMeetups->where("agreed", 1);
            $untouched = $companyMeetups->filter(function($item){
                return !$item->responded_at;
            });

            $this->line("total: ".$companyMeetups->count()." agreed: ".$agreed->count().", untouched: ".$untouched->count());

            if($agreed->count() < $threshold){
                continue;
            }
            $this->line("threshold matched!");
            
            foreach($untouched as $untouchedMeetup){

                /**double protection! */

                if($untouchedMeetup->agreed || $untouchedMeetup->responded_at){
                    continue;
                }
                
                $untouchedMeetup->agreed = 0;
                $untouchedMeetup->responded_at =  Carbon::now("UTC");
                $untouchedMeetup->comment = "[autorejected] ".$untouchedMeetup->comment;
                $untouchedMeetup->save();

                dispatch(new HandleLTDReject($untouchedMeetup));
                $this->line($untouchedMeetup->id . " - rejecting LTD meetup - " . $untouchedMeetup->participant->email);
            }

            $this->line("----------------------------------");


       }
        

    }
}
/**
 * 

 php artisan exhibitors:meetups_ltd --domain=targiehandlu.pl --threshold=25

 * 
 */
