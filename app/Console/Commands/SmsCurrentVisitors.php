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

        $participants = $roles->get($eventId, "visitor", ["ticketdownload"]);

        $this->info("Total visitors: " . $participants->count() );

        //exlude fuckers with RSVP - NO
        
        $status  = $this->anticipate('all, going, vip?', ['all', 'going', 'vip']);

        switch($status){

            case "going":
                $participants = $participants->filter(function($participant){
                    if( $participant->ticketdownload && (int) $participant->ticketdownload->going === 1 ){
                        return true;
                    }
                    return false;
                });
            break;

            case "vip":
                $participants = $participants->filter(function($participant){
                    if( $participant->important ){
                        return true;
                    }
                    return false;
                });
            break;
        }

        // $filtered = $participants->filter(function($item){
        //     //no RSVP OR ... has a ticket!
        //     return is_null($item->ticketdownload) || $item->ticketdownload->going == 1;
        // });

        $this->info("Total visitors " .  $status . ": " . $participants->count() );

        $counter = 1;

        $phones = array();

        foreach($participants as $participant){

            $query = ParticipantFields::where("participant_id", $participant->id)->where("field_id", 8)->get();

            if(!$query->count()){
                continue;
            }

            $phone = trim( $query->first()->field_value );

            $phone = str_replace("(0)", "", $phone);

            $phone = preg_replace("/[^0-9]+/", "", $phone);

            $phone = ltrim($phone, "0");

            if(empty($phone) || strlen($phone) < 9){
                continue;
            }

            if(strlen($phone) < 13){
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

            $phones[] = '"'.$phone .'","!'.$profile->code.'","https://'. $domain . '/tickets/'.$profile->code.'","'. $fname . '"';

            if($counter % 100 === 0){

                $this->info("Processed " . $counter);
            }


            $counter++;
        }

        $baseFilename = $eventId."_".$status."_". md5(time() . $eventId).".csv";

        file_put_contents(
            app()->basePath("storage/app/public/" . $baseFilename), 
            implode( "\n", $phones )
        );

        $this->info("All done! " . "Check storage/" . $baseFilename);

        $this->info("Done. Dispatched jobs: " . $counter);

    }
}
