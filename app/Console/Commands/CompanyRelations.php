<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Eventjuicer\Jobs\GeneralExhibitorMessageJob as Job;
use Eventjuicer\Services\Exhibitors\Console;

class CompanyRelations extends Command
{

    protected $signature = 'company:relations 
        {--domain=} 
        {--email=} 
        {--subject=}
        {--threshold=}
        {--lang=}
        {--defaultlang=}';

    protected $description = 'Command description';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function handle(Console $service){

        $service->setParams($this->options());

        $errors = [];

        $viewlang   = $this->option("lang");
        $defaultlang= $this->option("defaultlang");

        $domain     = $this->option("domain");
        $email      = $this->option("email");
        $subject    = $this->option("subject");
        $threshold  = $this->option("threshold");

        if(empty($domain)) {
            $errors[] = "--domain= must be set!";
        }

        if(count($errors)){

            foreach($errors as $error){
                $this->error($error);
            }

            return;
        }

        $role = null;
        
        $relation = $this->anticipate('meetups, reps?', ['meetups', 'reps']);
        if($relation === "reps"){
            $role  = $this->anticipate('representative, party?', ['representative', 'party']);
        }
        $whatWeDo  = $this->anticipate('Send, stats, test?', ['send', 'stats','test']);


        if($whatWeDo === "send"){

            if(empty($viewlang)) {
                $errors[] = "--lang= must be set!";
            }

            if(empty($defaultlang)) {
                $errors[] = "--defaultlang= must be set!";
            }


            if(empty($subject)) {
                $errors[] = "--subject= must be set!";
            }

            if(empty($email)) {
                $errors[] = "--email= must be set!";
            }

            $email = $email . "-" . $viewlang;

            if($viewlang && ! view()->exists("emails.company." . $email)) {
                $errors[] = "--email= error. View cannot be found!";
            }
        }
 


        if(count($errors)){

            foreach($errors as $error){
                $this->error($error);
            }

            return;
        }



        $service->run($domain);

        $eventId =  $service->getEventId();

        $this->info("Event id: " . $eventId );

        $exhibitors = $service->getDataset(true);

        $this->info("Number of exhibitors with companies assigned: " . $exhibitors->count() );

        $filtered = $service->getSendable();

        $allTranslations = $service->getTranslations();

        $this->info("companies with " . $relation . " that can be notified: " . $filtered->count() );

        $iterate = ($whatWeDo === "send") ? $filtered : $exhibitors;

        $done = 0;
        $noreps = 0;
        $noaccount = 0;

        foreach($iterate as $ex){   
            

            if( !$ex->company_id ){
                $this->error( "No company assigned for " . $ex->email );
                continue;
            }

             if( !$ex->hasAccountManager() ){
                $this->error( "No account assigned for " . $ex->email );
                $noaccount++;
            }

            $lang           = $ex->getLang($defaultlang);
            $name           = $ex->getName();
            $event_manager  = $ex->getEventManager();
            $items          = call_user_func_array(array($ex, "get".ucfirst($relation)), [$role]);
            $translations   = array_get($allTranslations, $lang);


            if($items->count() > $threshold){
                 continue;
            }else{

                $this->line("--------------------------------");
                $this->line("Processing " . $ex->email);

                if(!$items->count()){
                    $noreps++;
                    $this->error("No " . $relation  . "/" . $role . "!");
                }else{
                    $this->line($relation . "/". $role . " count: " . $items->count() );
                }
            }

            if(empty($name)){
                 $this->error("No company name!");
            }
        
            if($whatWeDo == "send"){

                if($lang !== $viewlang)
                {
                    $this->info("Skipped! Lang mismatch. ");
                    continue;
                }

                $this->info("Notified");

                dispatch(new Job(
                        $ex->getModel(), 
                        $eventId,
                        array(
                            "email" => $email,
                            "viewlang" => $viewlang, 
                            "lang" => $lang,
                            "event_manager" => $event_manager,
                            "subject" => $subject,
                            "domain" => $domain,
                            "translations" => $translations,
                            "representatives" =>  $relation === "reps" ? $items : null,
                            "meetups" => $relation === "meetups" ? $items : null
                        )


                       
                ));
            }

            $done++;

        }   

        $this->info("---------------------------------");

        $this->info("Counted " . $noreps . " without" . $relation);

        $this->info("Counted " . $noaccount . " without account manager ");

        $this->info("Processed " . $done . " companies with items <= " . $threshold);


    }
}
