<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;


use Eventjuicer\Repositories\MeetupRepository;
use Eventjuicer\Repositories\Criteria\ColumnIsNull;
use Eventjuicer\Repositories\Criteria\ColumnLessThan;
use Eventjuicer\Repositories\Criteria\ColumnGreaterThan;
use Eventjuicer\Repositories\Criteria\FlagEquals;

use App\Jobs\Meetups\BulkNotifyP2C;
use Eventjuicer\Services\Meetups\Sendable;
use Eventjuicer\ValueObjects\EmailAddress;

use Carbon\Carbon;
use Eventjuicer\Services\Revivers\ParticipantSendable;
use Eventjuicer\Services\GetByRole;

class SendBulkP2CMeetupRequests extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'meetups_p2c:bulk';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send info to companies!';

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
    public function handle(MeetupRepository $meetups) {

        $meetups->pushCriteria(new FlagEquals("direction", "P2C"));

        //skip already confirmed
        $meetups->pushCriteria(new ColumnIsNull("responded_at"));

        //only when sent 0,1,2 times
        $meetups->pushCriteria(new ColumnLessThan("retries", 3));

        //skip some lost old ones....
        $meetups->pushCriteria(new ColumnGreaterThan("created_at", 

            Carbon::now()->subMonth()
        ));

        
        $all = $meetups->all();

        $this->info("Found: " . $all->count() . " unconfirmed P2C meetup(s).");

        $filtered = $all->filter(function($meetup){

            return (bool) (new Sendable($meetup))->check();

        });

        $uniqueCompanies = $filtered->groupBy("company_id");

        foreach($uniqueCompanies as $company_id => $company_meetups){
            
            $meetup = $company_meetups->first();

            $this->info( $meetup->company_id );
            $this->info(  $company_meetups->count() );
            
            $this->info("Dispatching notification(s) for XXX Requests: " );
            
            dispatch(new BulkNotifyP2C( $meetup->company,  $company_meetups->count()));
        }

        $this->info("Dispatched: " . $uniqueCompanies->count() . " jobs.");

    }
}
