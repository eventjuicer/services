<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Eventjuicer\Services\Resolver;
use Eventjuicer\Repositories\EloquentTicketRepository;
use Eventjuicer\Repositories\ParticipantRepository;
use Eventjuicer\Repositories\Criteria\WhereIn;
use Eventjuicer\Repositories\Criteria\RelEmpty;
use Eventjuicer\Models\ParticipantFields;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Services\GetByRole;


class SmsCurrentVisitors extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visitors:sms-current-event 
        {--domain=} 
        {--prefix=}
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
    public function handle(GetByRole $roles)
    {


        $domain = $this->option("domain");
        $prefix = $this->option("prefix");

        $errors = [];

        if(empty( $domain )) {
            $errors[] = "--domain= must be provided!";
        }

        if(empty( $prefix )) {
            $errors[] = "--prefix= default prefix must be provided!";
        }


        if(!empty($errors))
        {
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }


        $route = new Resolver($domain);

        $eventId =  $route->getEventId();

        $this->info("current event id: " . $eventId);

        $participants = $roles->get($eventId, "visitor", ["ticketdownloads"]);

        $this->info("Total visitors: " . $participants->count() );

        //exlude fuckers with RSVP - NO

        $filtered = $participants->filter(function($item){

            //no RSVP OR ... has a ticket!
            return is_null($item->ticketdownload) || $item->ticketdownload->going == 1;
        });

        $this->info("Total visitors without RSVP=NO: " . $filtered->count() );

        $counter = 1;

        $phones = array();

        foreach($filtered as $participant)
        {

            // if(!filter_var($participant->email, FILTER_VALIDATE_EMAIL)){
            //     $this->error($participant->email);
            //     continue;
            // }



            $query = ParticipantFields::where("participant_id", $participant->id)->where("field_id", 8)->get();

            if(!$query->count()){
                continue;
            }

            $phone = trim( $query->first()->field_value );

            $phone = str_replace("(0)", "", $phone);

            $phone = preg_replace("/[^\+0-9]+/", "", $phone);

            if(empty($phone) || strlen($phone) < 9){
                continue;
            }

            if(strlen($phone) < 10){
                $phone = $prefix . $phone;
            }

            $profile = new Personalizer($participant);

            $fname = ucwords(
                str_replace(
                    array(",",";"), 
                    " ", 
                    $profile->fname
                )
            );

            $phones[] = '"'.$phone .'","https://'. $domain . '/tickets/'.$profile->code.'","'. $fname . '"';

            if($counter % 100 === 0){

                $this->info("Processed " . $counter);
            }


            $counter++;
        }

        $filename = "export".md5(time() . $eventId).".txt";

        file_put_contents(
            app()->basePath("storage/app/public/" . $filename), 
            implode( "\n", $phones )
        );

        $this->info("All done! " . "Check storage/" . $filename);

        $this->info("Done. Dispatched jobs: " . $counter);

    }
}
