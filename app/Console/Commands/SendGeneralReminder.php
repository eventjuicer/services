<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Eventjuicer\Services\Resolver;
// use Eventjuicer\Repositories\EloquentTicketRepository;

use Eventjuicer\Services\GetByRole;

use Eventjuicer\Services\Revivers\ParticipantSendable;
use App\Jobs\SendGeneralReminder as Job;


class SendGeneralReminder extends Command
{

    use \Eventjuicer\Services\Traits\Fields;


    protected $statuses = [
        'all', 
        'going', 
        "no_workshops", 
        "vips", 
        "agreed_workshops",
        "empty_fields"
    ];

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visitors:current-event

        {--domain=}
        {--email=} 
        {--subject=}
        {--fields=}

    ';


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
    public function handle(
        // EloquentTicketRepository $ticketRepo, 
        GetByRole $ticketRepo,
        ParticipantSendable $sendable
    )
    {

        $errors = [];

        $domain = $this->option("domain");
        $email =  $this->option("email");
        $subject =  $this->option("subject");
        $fields =  $this->option("fields");

        $status  = $this->anticipate(
            implode(", ", $this->statuses), 
            $this->statuses
        );

        $whatWeDo  = $this->anticipate('Send, stats, test?', ['test', 'send', 'stats']);

        if(empty($domain)) {
            $errors[] = "--domain= must be set!";
        }
        
        if($whatWeDo!="stats") {

            if(empty($subject)){
                $errors[] = "--subject= must be set!";
            }

            if(empty($email)){
                $errors[] = "--email= must be set!";
            }

            if(! view()->exists("emails.visitor." . $email)) {
                return $this->error("--email= error. View cannot be found!");
            }     
        }
      
      
        if($status == "empty_fields" && empty($fields)) {
            $errors[] = "--fields= must be set!";
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


    
        // $participants = $ticketRepo->getParticipantsWithTicketRole("visitor", "event", $eventId);
        $participants = $ticketRepo->get(
            $eventId, 
            "visitor", 
            ["ticketdownload"] + 
            (strstr($status, "workshops")? ["workshops"]: []) + 
            ($fields? ["fieldpivot"]: [])
        );

        $this->info("Total visitors: " . $participants->count());

        $sendable->checkUniqueness(true);
        $sendable->checkMutes(false);
        $sendable->validateEmails(true);

        switch($status){

            case "empty_fields":

                $fieldsArr = array_map('trim', explode(",", $fields));

                $fieldIds = array_map(function($fieldName){
                    return $this->getFieldId($fieldName);
                }, $fieldsArr);

                $participants = $participants->filter(function($participant) use ($fieldIds){
                   
                    return $participant->fieldpivot->whereIn("field_id", $fieldIds)->contains(function($item){
                        return mb_strlen(trim($item->field_value))<3;
                    });

                });

            break;

            case "agreed_workshops":
                
                $participants = $participants->filter(function($participant){
                    if($participant->meetups_agreed && $participant->meetups_agreed->count()){
                        return true;
                    } 
                    return false;
                });

            break;

            case "going":

                $participants = $participants->filter(function($participant){
                    if( is_null($participant->ticketdownload) || (int) $participant->ticketdownload->going === 0 ){
                        return false;
                    }
                    return true;
                });
            break;

            case "no_workshops":

                $participants = $participants->filter(function($participant){
                    if( $participant->workshops->isEmpty() ){
                        return true;
                    }
                    return false;
                });

            break;

            case "vips":
                $participants = $participants->filter(function($participant){
                    if( $participant->important ){
                        return true;
                    }
                    return false;
                });
            break;

    

        }
 
        if($whatWeDo === "stats"){

            $this->info("ids: " . implode(", ", $participants->pluck("id")->toArray()));

            return;
        }


        /**
         * 
         *  we should always skip not going, right?
         */
        $filtered = $sendable->filter($participants, $eventId);
        $this->info("Visitors not going:" . $sendable->howManyNotGoing() );
        $this->info("Visitors that can be notified: " . $filtered->count() );


        $counter = 1;

       
        foreach($filtered as $participant)
        {


            // if(!filter_var($participant->email, FILTER_VALIDATE_EMAIL)){
            //     $this->error("Wrong email address: " . $participant->email);
            //     continue;
            // }

            if($counter % 100 === 0){

                $this->info("Dispatched " . $counter);
            }

            dispatch(new Job(
                $participant, 
                $eventId,
                compact("subject", "email")
            ));

            if($whatWeDo === "test"){
                break;
            }

            $counter++;
        }

        $this->info("Done.");

    }
}
