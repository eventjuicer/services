<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Eventjuicer\Jobs\GeneralExhibitorMessageJob as Job;
use Eventjuicer\Models\ParticipantFields;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Services\Exhibitors\Console;
use Eventjuicer\Services\Exhibitors\CompanyData;
use Eventjuicer\Services\Exhibitors\AllExhibitorsReps;


class CompanyRepresentativesMessage extends Command
{

 
    protected $signature = 'exhibitors:reps-current-event 

        {--domain=} 
        {--email=} 
        {--subject=}
        {--lang=}
        {--defaultlang=} 
        {--throttle=1}';
    
    protected $description = 'Send general email message to Reps';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function handle(Console $service, AllExhibitorsReps $allreps)
    {
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

        if(count($errors)){
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }
      

        /**
            LET'S FUCKING START!
        **/

        $role  = $this->anticipate('representative, party?', ['representative', 'party']);
        $whatWeDo = $this->anticipate("test?, send?", ["test", "send"]);

        $service->run($domain);

        $eventId =  $service->getEventId();

        AllExhibitorsReps::setEventId( $eventId);

        $this->info("Event id: " . $eventId);

        $reps = $allreps->get($role, false);

        $this->info("Number of reps: " . $reps->count() );

        $sendable = $allreps->getSendable($role);

        $this->info("Reps that can be notified: " . $sendable->count() );

        $done = 0;
 
        $items = $whatWeDo === "send" ? $sendable : $reps;

        foreach($items as $rep)
        {
            if($rep->unsubscribed){
                $this->error("UNSUBBED" . $rep->email . " - skipped.");
                continue;
            }

            if(!$rep->company_id)
            {
               $this->error("No company assigned for " . $rep->email . " - skipped.");
               continue;
            }

            $companydata = new CompanyData($rep);
            $companyProfile = $companydata->toArray($rep->company);
            $lang = $companydata->getLang( $defaultlang);

            $event_manager = "";

            if($lang !== $viewlang)
            {
                $this->info("Skipped! Lang mismatch. ");
                continue;
            }

      
            $profile = new Personalizer($rep);
 

            $this->info("Processing " . $rep->company->slug);

            $this->info("Notifying " . $rep->email);

            dispatch(new Job(
                $rep, 
                $eventId, 
                compact("email", "subject", "event_manager", "viewlang", "lang", "domain") 
            ));
            
            $done++;

             if(env("MAIL_TEST", false)){
                $this->line("Processing " . $rep->company->slug);
                break;
            }

        }

 

    

        $this->info("Delivered " . $done . " messages");


    }
}
