<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Illuminate\Support\Facades\Bus;

use Eventjuicer\Services\Resolver;
use Eventjuicer\Repositories\ParticipantRepository;

use Eventjuicer\Repositories\Criteria\BelongsToGroup;
use Eventjuicer\Repositories\Criteria\BelongsToOrganizer;
use Eventjuicer\Repositories\Criteria\SortByDesc;
use Eventjuicer\Repositories\Criteria\WhereIn;

use Eventjuicer\ValueObjects\EmailAddress;
use App\Jobs\Revivers\VoterInvite as Job;
use Eventjuicer\Services\Revivers\ParticipantSendable;

use Eventjuicer\Crud\SocialVotes\Fetch as SocialVotesFetch;
use Eventjuicer\Crud\Participants\Fetch as ParticipantsFetch;

class EmailVoters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visitors:restore-from-voters 

        {--domain=} 
        {--email=} 
        {--subject=}
        {--throttle=}
        {--events=all}
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
    public function handle(SocialVotesFetch $voters, ParticipantsFetch $participants, ParticipantSendable $sendable)
    {

      
        $domain = $this->option("domain");
        $view = $this->option("email");
        $subject = $this->option("subject");
    
        $sendable->excludeFromFile( base_path("ebeunsub.txt") );

        $errors = [];

        if(empty( $domain )) {
            $errors[] = "--domain= must be provided!";
        }
     
        if(empty( $view )) {
            $errors[] = "--email= (view name) must be provided!";
        }

        if(empty( $subject )) {
            $errors[] = "--subject='example subject' must be provided!";
        }

        if($view && !view()->exists("emails.visitor." . $view)) {
            $errors[] = "--email= error! View cannot be found!";
        }

        if(!empty($errors))
        {
            foreach($errors as $error){
                $this->error($error);
            }
    
            return;
        }


        $whatWeDo  = $this->anticipate('test, send, end?', ['test', 'send', 'end']);

        if($whatWeDo === "end"){

            return;

        }



        $route          = new Resolver($domain);
        $eventId        = $route->getEventId();
        $group_id       = $route->getGroupId();
        $organizer_id   = $route->getOrganizerId();


        $all = $voters->getByOrganizerId($organizer_id)->pluck("voteable")->unique();
        $excludes = $participants->getByEventId($eventId)->pluck("email")->all();

        $this->info("VOTERS: Found " . $all->count() . " records...");
        $this->info("EXCLUDES: Found " . count($excludes) . " records in current event!");

    
        $sendable->checkUniqueness(true);
        $sendable->setMuteTime(6 * 60); //24h

        $filtered =  $sendable->filter($all, $eventId, $excludes);

        $this->info( "Found " . $sendable->howManyMuted() . " muted emails..." );

        $this->info( "Found " . $filtered->count() . " unique emails..." );

        $done = 0;

        foreach($filtered as $voter){


            $email = (new EmailAddress($voter->email));

            if( ! $email->isValid() )
            {
                $this->error("Invalid email: " . (string) $email );
                continue;
            }


            if( $whatWeDo === "test" || env("MAIL_TEST", false) ){
            
                $voter->email = "adam@zygadlewicz.com";

                Bus::dispatchNow( new Job($voter, 
                    $eventId,
                    compact("view", "subject"))
                );

                $this->info("Dispatched 1 test message!");

                break;
            }

            if($whatWeDo === "send"){

                dispatch( new Job( 
                    $voter, 
                    $eventId,
                    compact("view", "subject"))
                );
            }
        
            if($done % 1000 === 0)
            {
                $this->info("Dispatched: " . $done);
            }

            $done++;
        }
       
        $this->info("All dispatched" );
    }


}
