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

    protected $participant, $email;
    public $p, $url, $going, $notGoing;

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

        $this->going =  "https://api.eventjuicer.com/v1/services/tickets/". $hash;
        $this->notGoing = "https://api.eventjuicer.com/v1/services/resignation/" . $hash;


        if($this->participant->organizer_id > 1){
            
            app()->setLocale("en");

            config(["app.name" => "E-commerce Berlin Expo"]);

            $this->url = "https://ecommerceberlin.com/tickets/" . $hash;

            $this->from("visitors@ecommerceberlin.de", "Lucas Zarna - E-commerce Berlin Expo");

            $this->subject("Re: Thursday. Important/Wichtig - RSVP.");

            $this->email = "ebe8-ticket-reminder";

        }
        else
        {
        
            app()->setLocale("pl");

            config(["app.name" => "Targi eHandlu"]);

            $this->url = "https://targiehandlu.pl/tickets/" . $hash;

            $this->from("zwiedzanie@ecommercewarsaw.com", "Karolina - Targi eHandlu");

            $this->subject("Mam Twój bilet na piątkowe Targi eHandlu w Warszawie.");

            $this->email = "teh26-ticket";

        }
       
        $this->to(trim(strtolower($this->participant->email)));

        if( view()->exists("emails.visitor." . $this->email . "_text") ) {
            $this->text('emails.visitor.' . $this->email . '_text');      
        }

        return $this->markdown('emails.visitor.' . $this->email);

    }
}
