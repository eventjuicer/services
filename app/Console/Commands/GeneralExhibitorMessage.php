<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Eventjuicer\Jobs\GeneralExhibitorMessageJob as Job;
use Eventjuicer\Services\Exhibitors\Console;


class GeneralExhibitorMessage extends Command {

 
    protected $signature = 'exhibitors:current-event 

        {--domain=} 
        {--email=} 
        {--subject=}
        {--lang=}
        {--defaultlang=} 
        {--throttle=1} 
        {--exclude_reg_ids=""} 
        {--exclude_company_ids=""}';
    
    protected $description = '--exclude_reg_ids="100,102,103';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function handle(Console $service)
    {

        $service->setParams($this->options());

        $viewlang   = $this->option("lang");
        $defaultlang = $this->option("defaultlang");
        $domain     = $this->option("domain");
        $email      = $this->option("email");
        $subject    = $this->option("subject");
        $exclude_reg_ids =  array_filter(explode(",", $this->option("exclude_reg_ids")), function($value){ return intval($value) > 0; }); 
        $exclude_company_ids =  array_filter(explode(",", $this->option("exclude_company_ids")), function($value){ return intval($value) > 0; }); 

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

        if(count($errors)){
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }
      

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

        $allTranslations = [];//$service->getTranslations();

        $done = 0;

        $whatWeDo  = $this->anticipate('Send, test?', ['test', 'send']);

        if(!empty($exclude_reg_ids)) {
            
            $this->info( count($exclude_reg_ids) . " regs excluded" );
        
        }

        if(!empty($exclude_company_ids)) {
            
            $this->info( count($exclude_company_ids) . " companies excluded" );
        
        }


        foreach($filtered as $ex)
        {

            $repsCount = $ex->getReps()->count();
            $cateringCount = $ex->getPurchases()->where("id", 2003)->sum(function($item){
                return $item->pivot->quantity;
            });
            $parkingCount = $ex->getPurchases()->where("id", 2006)->sum(function($item){
                return $item->pivot->quantity;
            });
            $howManyBooths = $ex->howManyBooths();
            $cateringAssigned = $repsCount > ($howManyBooths * 4)? ($howManyBooths * 4) + $cateringCount: max($repsCount, 1) + $cateringCount;
            $parkingAssigned = ($howManyBooths * 1) + $parkingCount;

            $additionalData = compact("repsCount", "cateringCount", "parkingCount", "howManyBooths", "cateringAssigned", "parkingAssigned");
            
            if(!empty( $exclude_reg_ids ) && in_array($ex->getModel()->id, $exclude_reg_ids) ){
            
                $this->error("Registration excluded by --exclude_reg_ids: " . $ex->email );
                continue;                
            }

            //do we have company assigned?

            if(!$ex->company_id)
            {
                $this->error("No company assigned for " . $ex->email . " - skipped.");
                continue;
            }

            if(!empty( $exclude_company_ids ) && in_array($ex->company_id, $exclude_company_ids) ){
            
                $this->error("Company excluded by --exclude_company_ids: " . $ex->email );
                continue;                
            }


            if( !$ex->hasAccountManager() ){
                $this->error( "No account assigned for " . $ex->getName() );
               // continue;
            }

            $lang           = $ex->getLang($defaultlang);
            $name           = $ex->getName();
            $event_manager  = $ex->getEventManager();
            //$cReps          = $ex->getReps();
            $translations   = array_get($allTranslations, $lang);

            if($lang !== $viewlang)
            {
                $this->info("Skipped! Lang mismatch. ");
                continue;
            }

            $this->line("Processing " . $name);

            $this->line("Notifying " . $ex->email);


            dispatch(new Job(
                $ex->getModel(), 
                $eventId, 
                compact(
                    "email", 
                    "subject", 
                    "event_manager", 
                    "viewlang", 
                    "lang", 
                    "domain", 
                    "translations",
                    "additionalData"
                    ) 
            ));

            $done++;

            if($done && $whatWeDo === "test"){
                break;
            }
            
        }   

        $this->info("Delivered " . $done . " messages");


    }
}
