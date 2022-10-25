<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Eventjuicer\Jobs\GeneralExhibitorMessageJob as Job;
use Eventjuicer\Services\Exhibitors\Console;
use Eventjuicer\Crud\CompanyMeetups\Fetch as CompanyMeetupsFetch;

class GeneralExhibitorMessage extends Command {

 
    protected $signature = 'exhibitors:meetups_p2c 

        {--domain=} 
        {--email=} 
        {--subject=}
        {--lang=}
        {--defaultlang=} 
        ';
    
    protected $description = '';

    public function __construct(){
        parent::__construct();
    }
 
    public function handle(Console $service, CompanyMeetupsFetch $meetups){


        $service->setParams($this->options());

        $viewlang   = $this->option("lang");
        $defaultlang = $this->option("defaultlang");
        $domain     = $this->option("domain");
        $email      = $this->option("email");
        $subject    = $this->option("subject");

        $errors = [];

        if(empty($viewlang)) {
            $errors[] = "--lang= must be set!";
        }


        if(empty($domain)) {
            $errors[] = "--domain= must be set!";
        }

        if(empty($subject)) {
            $errors[] = "--subject= must be set!";
        }
    
        
        if(empty($email)) {
            $errors[] = "--email= must be set!";
        }

        if(empty($defaultlang)) {
            $errors[] = "--defaultlang= must be set!";
        }

        $email = $email . "-" . $viewlang;

        if(! view()->exists("emails.company." . $email)) {
            $errors[] = "--email= error. View cannot be found!";
        }

        // if(count($errors)){
        //     foreach($errors as $error){
        //         $this->error($error);
        //     }
        //     return;
        // }
      

        /**
            LET'S FUCKING START!
        **/

        $service->run($domain);

        $eventId =  $service->getEventId();

        $this->info("Event id: " . $eventId );

        $service->setDatasetRels(["company.participants.tickets"]);
        $exhibitors = $service->getDataset(true);

        $this->info("Number of exhibitors with companies assigned: " . $exhibitors->count() );

        $filtered = $service->getSendable();

        $this->info("Exhibitors that can be notified: " . $filtered->count() );


        $done = 0;

        $whatWeDo  = $this->anticipate('Send, test?', ['test', 'send']);


        $meetups->setParam("event_id", $eventId );
        $ltd = $meetups->getAllForEventByDirection("P2C");
        $groupedByCompany = $ltd->groupBy('company_id');

        foreach($filtered as $ex){

            //do we have company assigned?

            if(!$ex->company_id)
            {
                $this->error("No company assigned for " . $ex->email . " - skipped.");
                continue;
            }

            $companyMeetups = isset($groupedByCompany[$ex->company_id]) ? $groupedByCompany[$ex->company_id] : null;

            if(!$companyMeetups){
                $this->error("No company P2C meetups for " . $ex->email . " - skipped.");
                continue;
            }

            $agreed = $companyMeetups->where("agreed", 1);
            $untouched = $companyMeetups->filter(function($item){
                return !$item->responded_at;
            });

            $this->line("total: ".$companyMeetups->count()." agreed: ".$agreed->count().", untouched: ".$untouched->count());

            if($untouched->count() === 0){
                continue;
            }

            $this->line("Threshold matches!");  
            
            $sales_manager = $ex->company->people->where("role", "sales_manager");

            $this->line("Threshold matches! $sales_manager");  



            $lang           = $ex->getLang($defaultlang);
            $name           = $ex->getName();
            $event_manager  = $ex->getEventManager();
            //$cReps          = $ex->getReps();


            if($lang !== $viewlang)
            {
                $this->info("Skipped! Lang mismatch. ");
                continue;
            }

            $this->line("Processing " . $name);

            $this->line("Notifying " . $ex->email);


            // dispatch(new Job(
            //     $ex->getModel(), 
            //     $eventId, 
            //     compact(
            //         "email", 
            //         "subject", 
            //         "event_manager", 
            //         "viewlang", 
            //         "lang", 
            //         "domain", 
            //         "translations",
            //         "additionalData"
            //         ) 
            // ));

            $done++;

            if($done && $whatWeDo === "test"){
                break;
            }
            
        }   

        $this->info("Delivered " . $done . " messages");


    }
}
