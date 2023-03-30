<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Eventjuicer\Models\Participant;
use Eventjuicer\Services\Personalizer;


use Eventjuicer\Models\SocialLinkedin;

class VoterInviteMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $voter;
    
    public      $subject, 
                $view, 
                $fname, 
                $siteUrl, 
                $ticketUrl, 
                $exhibitorsURl, 
                $presentersURl, 
                $scheduleURl, 
                $registerURl,
                $offersUrl,
                $unsubscribe,
                $cloudinary;

    public function __construct(SocialLinkedin $voter, string $view, string $subject)
    {
        $this->voter = $voter;
        $this->view = $view;
        $this->subject = $subject;
    }

    public function build(){

        $params = "?utm_source=voters&utm_campaign=teh21visitor&utm_medium=email";

        if($this->voter->organizer_id > 1){
             $this->from("visitors@ecommerceberlin.com", "E-commerce Berlin");
            $baseUrl = "https://ecommerceberlin.com";
            app()->setLocale("en");
            config(["app.name" => "E-commerce Berlin Expo"]);

        }else{

            $this->from("zwiedzanie@ecommercewarsaw.com", "Karolina - Targi eHandlu");
            $baseUrl = "https://targiehandlu.pl";
            app()->setLocale("en");
            config(["app.name" => "Targi eHandlu w Warszawie"]);
             
        }

    
        $this->fname = $this->voter->fname;
      
        $this->siteUrl = $baseUrl . $params;
        $this->exhibitorsURl = $baseUrl . "/exhibitors" . $params;
        $this->presentersURl = $baseUrl . "/presenters" . $params;
        $this->scheduleURl = $baseUrl . "/schedule" . $params;
        $this->registerURl = $baseUrl . "/visit" . $params;
        $this->offersUrl = $baseUrl . "/offers" . $params;

        $this->unsubscribe = "https://services.eventjuicer.com/unsubscribe/vtr". $this->voter->id; 

        $this->to( strtolower(trim($this->voter->email)) );

        $this->subject($this->subject);

        if(view()->exists("emails.visitor." . $this->view . "_text")) {
                
            $this->text('emails.visitor.' . $this->view . "_text");

        }

        return $this->markdown('emails.visitor.' . $this->view);


    }
}
