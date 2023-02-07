<?php

namespace App\Mail\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Eventjuicer\Services\Exhibitors\Email;
use Eventjuicer\Models\Participant;


class ExhibitorsMeetupsPleaseRsvpMail extends Mailable {

    use Queueable, SerializesModels;

    protected $participant;
    protected $domain           = "targiehandlu.pl";
    
    public $subject          = "Potwierdź/odrzuć prośby o spotkanie";
    public $view             = "bulk_p2c_pl";
    
    protected $recipient;
    protected $token;
    public $number_of_rsvp = 0;
    public $url = "";
    public $footer;

    public function __construct(Participant $participant, array $config = []){
        $this->participant = $participant;
        $this->recipient = $config["email"];
        $this->token = $participant->token;
        $this->number_of_rsvp = $config["number_of_rsvp"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

        $emailHelper = new Email($this->participant);

        $this->footer = $emailHelper->getFooter();
        $cc = "targiehandlu+auto@targiehandlu.pl";
        $eventName = "Targi eHandlu";


        app()->setLocale("pl");
        config(["app.name" => "Targi eHandlu / E-commerce Warsaw Expo"]);

        $this->url = "https://account.".$this->domain.'/#/meetups?filter=%7B"direction"%3A"P2C"%7D&token=' . $this->token;

        $this->to((string) $this->recipient);

        $this->from($emailHelper->getEmail(), $emailHelper->getSender() . " - " . $eventName);

        $this->cc( $cc ); 

        $this->subject($this->subject);

        return $this->markdown('emails.meetups.' . $this->view);
    }
}
