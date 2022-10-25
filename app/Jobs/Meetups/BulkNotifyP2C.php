<?php

namespace App\Jobs\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Meetups\BulkP2C;
use Carbon\Carbon;
use Eventjuicer\Services\Meetups\Sendable;
use Eventjuicer\Models\Participant;

class BulkNotifyP2C //implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $participant;
    protected $number_of_rsvp;

    public function __construct(Participant $participant, $number_of_rsvp){
        $this->participant = $participant;
        $this->number_of_rsvp = $number_of_rsvp;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){



        // $sales_manager = $ex->company->people->where("role", "sales_manager");

        // if($sales_manager->count() > 1){
        //     $recipient = $sales_manager->first()->email;

        // }else{
        //     $recipient = $ex->email;
        // }


        // //double check!!!!

        // $filtered = $this->meetups->filter(function($meetup)
        // {

        //     return (new Sendable($meetup))->check();

        // });

        // if(! $filtered->count())
        // {
        //     return true;
        // }


        // $participant = $this->meetups->first()->participant;

        Mail::send(new BulkP2C( $this->company,  $this->number_of_rsvp ) );

        
        // foreach($this->meetups as $meetup)
        // {
        //     if(! env("MAIL_TEST", true))
        //     {
        //         $repo->updateAfterSent($meetup->id);
        //     }
        // }

    }
}
