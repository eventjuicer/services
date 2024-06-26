<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;


use Eventjuicer\Models\Participant;
use Eventjuicer\Repositories\ParticipantDeliveryRepository;
use Illuminate\Support\Facades\Mail;
use App\Mail\TicketDownloadReminder;
use Eventjuicer\Services\Revivers\ParticipantSendable;


class SendTicketDownloadReminder //implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $participant, $eventId;

    public function __construct(Participant $participant, int $eventId)
    {
        $this->participant = $participant;
        $this->eventId = $eventId;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(ParticipantDeliveryRepository $deliveries, ParticipantSendable $sendable)
    {

        
        //double check!   

        if( $this->participant->ticketdownloads->count() ) 
        {
            return; 
        }

        // double check !

        if(! $sendable->filter( collect([])->push( $this->participant ), $this->eventId)->count() )
        {
            return;
        }


        Mail::send(new TicketDownloadReminder( $this->participant ));


        if(! env("MAIL_TEST", true))
        {
            $deliveries->updateAfterSend($this->participant->email, $this->eventId, "pt");
        }


       
    }
}
