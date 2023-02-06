<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Eventjuicer\Services\Exhibitors\Console;
use Eventjuicer\Repositories\ParticipantRepository;
use Eventjuicer\Repositories\Criteria\BelongsToGroup;

class UnsubVisitors extends Command {

 
    protected $signature = 'visitors:unsub 
        {--domain=} 
        {--file=visitors_unsub.txt}
    ';
    
    protected $description = 'Change emails to ';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function handle(Console $service, ParticipantRepository $participants)
    {
        $done=0;

        $whatWeDo  = $this->anticipate('Test, run?', ['test', 'run']);

        $domain = $this->option("domain");
        $file = $this->option("file");


        $errors = array();

        if(empty($file)) {
            $errors[] = "--file= must be set";
        }

        if(empty($domain)) {
            $errors[] = "--domain= must be set!";
        }
     
        $emails = explode("\n", file_get_contents(strpos($file, "http")===false? base_path($file): $file) );

        if(!count($emails)) {
            $errors[] = "--file= error";
        }

        if(count($errors)){
            foreach($errors as $error){
                $this->error($error);
            }
            return;
        }


        $this->info("Emails in file: " . count($emails) );


        /**
            LET'S FUCKING START!
        **/

        $service->run($domain);

        $groupId =  $service->getGroupId();

        $this->info("Group id: " . $groupId );

        $participants->pushCriteria(new BelongsToGroup( $groupId ));

        $all = $participants->all();

        foreach($emails as $email){

            $matches = $all->where("email", trim($email,'",'));

            if($matches->count()){
                $this->line("Match found: " . $email . ". " . $matches->count() . " times.");
                $done++;
            }

            if($whatWeDo == "run"){
                foreach($matches as $match){
                    
                    if(stristr($match->email, "removed")===false){
                        $match->email == $match->email . "+removed";
                        $match->save();
                    }
                } 
            }
        }

        $this->info("Done: " . $done);

    }
}
