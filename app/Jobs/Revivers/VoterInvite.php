<?php

namespace App\Jobs\Revivers;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

use Eventjuicer\Repositories\ParticipantDeliveryRepository;
use App\Mail\VoterInviteMail;
use Eventjuicer\Services\Revivers\ParticipantSendable;
use Eventjuicer\Models\SocialLinkedin;


class VoterInvite implements ShouldQueue {

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $voter, $eventId, $view, $subject;

    public function __construct(SocialLinkedin $voter, int $eventId, array $config)
    {
        $this->voter = $voter;
        $this->eventId = $eventId;
        $this->view = array_get($config, "view");
        $this->subject = array_get($config, "subject");
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ParticipantDeliveryRepository $deliveries, ParticipantSendable $sendable){

        // double check !

        if(! env("MAIL_TEST", true) && $this->voter->unsubscribed){
            return;
        }

        if(! $sendable->filter( collect([])->push( $this->voter ), $this->eventId)->count() )
        {
            return;
        }

        Mail::send(new VoterInviteMail( 
            $this->voter, 
            $this->view, 
            $this->subject )
        );
       
        if(! env("MAIL_TEST", true) ){
             $deliveries->updateAfterSend($this->voter->email, $this->eventId, "v");
        }
     
    }
}
