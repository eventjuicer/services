<?php

namespace App\Mail\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class BulkP2C extends Mailable {

    use Queueable, SerializesModels;

    protected $sender_email     = "zwiedzanie+rsvp@targiehandlu.pl";
    protected $sender_name      = "Karolina Michalak";
    protected $domain           = "targiehandlu.pl";
    
    public $subject          = "Potwierdź/odrzuć prośby o spotkanie";
    public $view             = "bulk_p2c_pl";
    
    protected $recipient;
    protected $token;
    public $number_of_rsvp = 0;
    public $url = "";

    public function __construct(array $config = []){

        $this->recipient = $config["email"];
        $this->token = $config["token"];
        $this->number_of_rsvp = $config["number_of_rsvp"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){



            // app()->setLocale("en");
            // config(["app.name" => "E-commerce Berlin Expo"]);

            // $this->domain = "ecommerceberlin.com";
            // $this->sender_email = "rsvp@ecommerceberlin.com";
            // $this->sender_name = "Lucas Zarna - E-commerce Berlin Expo";
            // $this->subject = "Exhibitors that want to meet you. Your action needed.";
            // $this->view = "bulk_en";
    



        $this->url = "https://account.".$this->domain."/rsvp?token=" . $this->token;

        $this->from($this->sender_email, $this->sender_name);

        $this->to((string) "adam+test@zygadlewicz.com");

        $this->subject($this->subject);

        return $this->markdown('emails.meetups.' . $this->view);
    }
}
