<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;





use Eventjuicer\Models\Participant;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Services\Hashids;

class TicketDownloadReminder extends Mailable
{
    use Queueable, SerializesModels;

    protected $participant;
    public $p, $url;

    public function __construct(Participant $participant)
    {
        $this->participant = $participant;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        $this->p = new Personalizer( $this->participant, "");

        $hash = (new Hashids())->encode($this->participant->id);

        $this->url = "https://ecommerceberlin.com/ticket/" . $hash;

        $this->to(trim(strtolower($this->participant->email)));

        $this->from("visitors@ecommerceberlin.com", "Lucas Zarna, E-commerce Berlin Expo");

      //  $this->subject("Your ticket is ready! Download and print!");

        $this->subject("It will be huge! Fast entry to E-commerce Berlin Expo #3.");

        return $this->markdown('emails.tickets.reminder2');


    }
}