<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Eventjuicer\Services\Resolver;
use Eventjuicer\Repositories\ParticipantFieldRepository;

use Eventjuicer\Repositories\Criteria\BelongsToGroup;
use Eventjuicer\Repositories\Criteria\BelongsToOrganizer;
use Eventjuicer\Repositories\Criteria\SortByDesc;
use Eventjuicer\Repositories\Criteria\WhereIn;
use Eventjuicer\Repositories\Criteria\FlagEquals;

use Eventjuicer\Models\ParticipantFields;


class CsvPhoneExports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visitors:export-phone 

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
    public function handle(ParticipantFieldRepository $repo){



        $domain = $this->option("domain");
        $prefix = $this->option("prefix");
        

        $errors = [];

        if( empty( $domain ) ) {
            $errors[] = "--domain= must be provided!";
        }

        if( empty( $prefix ) ) {
            $errors[] = "--prefix= default prefix must be provided!";
        }

        if(!empty($errors))
        {
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }

        //$sendable->excludeFromFile( base_path("ebeunsub.txt") );

        $route          = new Resolver($domain);

        $organizer_id   = $route->getOrganizerId();
          
        $repo->pushCriteria( new BelongsToOrganizer( $organizer_id ));
        $repo->pushCriteria( new FlagEquals("field_id", 8) );
        $repo->pushCriteria( new SortByDesc("id") );

        $all = $repo->all();

        $this->info("Found " . $all->count() . " records in the this scope!");

        $done = 0;

        $phones = array();

        foreach($all as $record){

            $phone = trim($record->field_value);

            $phone = str_replace("(0)", "", $phone); 

            $phone = preg_replace("/[^\+0-9]+/", "", $phone);

            if(!$phone || strlen($phone) < 9){
                continue;
            }

            if(strlen($phone) < 10){
                $phone = "+".intval($prefix) . $phone;
            }

            $phones[] = '"'.$phone.'"';

            if($done % 1000 === 0)
            {
                $this->info("processed: " . $done);
            }
            

            $done++;
        }

        $filename = "phones-organizer-". $organizer_id . "-".md5(time() . $organizer_id).".txt";

        file_put_contents(
            app()->basePath("storage/app/public/" . $filename), 
            implode( "\n", $phones )
        );

        $this->info("All done! " . "Check storage/" . $filename);

        
    }





}
