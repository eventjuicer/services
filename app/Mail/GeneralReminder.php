<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;





use Eventjuicer\Models\Participant;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Services\Hashids;

class GeneralReminder extends Mailable
{
    use Queueable, SerializesModels;

    protected $participant, $email;
    
    public $p, 
    $ticketUrl, 
    $hash,
    $siteUrl, 
    $exhibitorsURl,
    $presentersURl,
    $scheduleURl,
    $registerURl,
    $url, $subject, $unsubscribe;

    public function __construct(Participant $participant, array $config)
    {
        $this->participant = $participant;
        $this->email = !empty($config["email"]) ? $config["email"] : "";
        $this->subject = !empty($config["subject"]) ? $config["subject"] : "";

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

    
        if($this->participant->organizer_id > 1){
            $this->from("visitors@ecommerceberlin.com", "Lucas Zarna - E-commerce Berlin");
            $baseUrl = "https://ecommerceberlin.com";
            app()->setLocale("en");
            config(["app.name" => "E-commerce Berlin Expo"]);

        }else{
            $this->from("zwiedzanie@targiehandlu.pl", "Karolina Michalak - Targi eHandlu");
            $baseUrl = "https://targiehandlu.pl";
            app()->setLocale("en");
            config(["app.name" => "Targi eHandlu w Warszawie"]);
        }

        $this->p = new Personalizer( $this->participant, "");
        $hash = (new Hashids())->encode($this->participant->id);
        $params  = "";

        $this->ticketUrl = $baseUrl . "/tickets/" . $hash . $params;
        $this->siteUrl = $baseUrl . $params;
        $this->exhibitorsURl = $baseUrl . "/exhibitors" . $params;
        $this->presentersURl = $baseUrl . "/presenters" . $params;
        $this->scheduleURl = $baseUrl . "/schedule" . $params;
        $this->registerURl = $baseUrl . "/visit" . $params;
        $this->url = $this->ticketUrl;
        $this->hash = "!".$hash;

        $this->unsubscribe = "https://services.eventjuicer.com/unsubscribe/" . $hash; 

        $this->to(trim(strtolower($this->participant->email)));

      //  $this->subject("Your ticket is ready! Download and print!");

        $this->subject($this->subject);

        if(view()->exists("emails.visitor." . $this->email . "_text")) {
                
            $this->text('emails.visitor.' . $this->email . "_text");

        }

        return $this->markdown('emails.visitor.' . $this->email);


    }
}
