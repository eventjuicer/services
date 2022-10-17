<?php

namespace App\Mail\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Eventjuicer\Models\Company;

class BulkP2C extends Mailable {

    use Queueable, SerializesModels;

    protected $sender_email     = "zwiedzanie+rsvp@targiehandlu.pl";
    protected $sender_name      = "Karolina Michalak";
    protected $domain           = "targiehandlu.pl";
    
    public $subject          = "Potwierdź/odrzuć prośby o spotkanie";
    public $view             = "bulk_p2c_pl";
    
    protected $company;
    public $howmanyMeetups = 1;
    public $url = "asdasd";

    public function __construct(Company $company, $howmanyMeetups = 1){

        $this->company = $company;
        $this->howmanyMeetups = $howmanyMeetups;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

        if($this->company->group_id > 1){

            // app()->setLocale("en");
            // config(["app.name" => "E-commerce Berlin Expo"]);

            // $this->domain = "ecommerceberlin.com";
            // $this->sender_email = "rsvp@ecommerceberlin.com";
            // $this->sender_name = "Lucas Zarna - E-commerce Berlin Expo";
            // $this->subject = "Exhibitors that want to meet you. Your action needed.";
            // $this->view = "bulk_en";
        }



        // $this->url = "https://rsvp.".$this->domain."/rsvp?token=" . $this->participant->token;

        $this->from($this->sender_email, $this->sender_name);

        $this->to((string) "adam+test@zygadlewicz.com");

        $this->subject($this->subject);

        return $this->markdown('emails.meetups.' . $this->view);
    }
}
