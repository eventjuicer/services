<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Eventjuicer\Repositories\MeetupRepository;
use Eventjuicer\Repositories\Criteria\ColumnIsNull;
use Eventjuicer\Repositories\Criteria\ColumnLessThan;
use Eventjuicer\Repositories\Criteria\ColumnGreaterThan;
use Eventjuicer\Repositories\Criteria\FlagEquals;
use Carbon\Carbon;
use Eventjuicer\Services\Exhibitors\Console;
use App\Jobs\Meetups\ExhibitorsMeetupsPleaseRsvpJob;


class ExhibitorsMeetupsPleaseRsvp extends Command {

    protected $signature = 'exhibitors:meetups_please_rsvp 
    {--domain=} 
    {--email=meetups-rsvp} 
    {--subject=}
    {--lang=}
    {--defaultlang=} 
    {--direction=P2C} 
    {--threshold=3} 
    {--context=sales}
    ';

    protected $description = 'Send info to companies!';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(Console $service, MeetupRepository $meetups) {

        $done=0;
        $service->setParams($this->options());

        $errors = $service->isValid([
            'domain' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'lang' => 'required|string',
            'defaultlang' => 'required|string',
            'direction' => 'required|string',
            'threshold' => 'required|numeric',
            'context' => 'required|string',
        ]);

        $service->run();
        $eventId =  $service->getEventId();
        $direction =  $service->getParam("direction");
        $lang = $service->getParam("lang");

        $this->info("Event id: " . $eventId );
        $exhibitors = $service->getDataset(true);
        $this->info("Number of exhibitors with companies assigned: " . $exhibitors->count() );
        $filtered = $service->getSendable();
        $this->info("Exhibitors that can be notified: " . $filtered->count() );
      

        /**
         * 
         * GET MEETUPS
         */
        $meetups->pushCriteria(new FlagEquals("direction", $direction));

        //skip already confirmed
        $meetups->pushCriteria(new ColumnIsNull("responded_at"));

        // only when sent 0,1,2 times
        $meetups->pushCriteria(new ColumnLessThan("retries", 3));

        //skip some lost old ones....
        $meetups->pushCriteria(new ColumnGreaterThan("created_at", 

            Carbon::now()->subMonth()
        ));

        $allMeetups = $meetups->all();
        $groupedMeetups = $allMeetups->groupBy("company_id");
      
        $this->info("Found: " . $allMeetups->count() . "  unresponded $direction meetup(s).");
        $this->info("Found: " . $groupedMeetups->count() . " companies with unresponded $direction meetup(s).");

        $whatWeDo  = $this->anticipate('Send, test, stats?', ['test', 'send', 'stats']);

        foreach($filtered as $ex){
            
            /**
             * "Eventjuicer\Services\Exhibitors\CompanyData"
            */

            if(!$ex->company_id){
                $this->error("No company assigned for " . $ex->email . " - skipped.");
                continue;
            }

            if(!isset($groupedMeetups[$ex->company_id])){
                continue;
            }
            
            if($whatWeDo === "stats"){
                break;
            }

            $companyLang           = $ex->getLang($service->getParam("defaultlang"));
        
            if($lang !== $companyLang){
                $this->info("Skipped! Lang mismatch. ");
                continue;
            }

            dispatch(
                new ExhibitorsMeetupsPleaseRsvpJob(
                    $ex->getModel(), array_merge(
                        $this->options(), 
                        [
                            "count" => $groupedMeetups[$ex->company_id]->count(), 
                            "view" => $service->getParam("email") . "-" . $direction . "-". $lang,
                        ]
                    )
                   
                    )
            );

            $done++;

            if($whatWeDo === "test"){
                break;
            }

        }

        $this->info("Delivered " . $done . " messages");


    }
}
