<?php

namespace App\Mail\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Eventjuicer\Models\Participant;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Services\Exhibitors\Email;
use Eventjuicer\Services\Exhibitors\CompanyData;

class ExhibitorsMeetupsPleaseRsvpMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $participant, $domain, $token;

    public  $subject,
            $view,
            $lang,
            $recipient,
            $footer,
            $url, 
            $count;

    public function __construct(Participant $participant, array $config, string $recipient)
    {
        $this->participant  = $participant;
        $this->domain = array_get($config, "domain");
        $this->subject = array_get($config, "subject", "");
        $this->view = array_get($config, "view");
        $this->lang = array_get($config, "lang");
        $this->recipient = $recipient;

        $this->token = $participant->token;
        $this->count = array_get($config, "count");
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){

        $emailHelper = new Email($this->participant);
        $this->footer = $emailHelper->getFooter();
       
        //this should be moved to settings?...
       if( $this->participant->group_id > 1 ){

            // $from = "marta@ecommerceberlin.com";
            $eventName = "E-commerce Berlin Expo";
            $domain = "ecommerceberlin.com";
            $cc = "ecommerceberlin+auto@ecommerceberlin.com";

            app()->setLocale("en");
            config(["app.name" => $eventName]);

        }else{


            // $from = "karolina.michalak@targiehandlu.pl";
            $eventName = "Targi eHandlu";
            $domain = "targiehandlu.pl";
            $cc = "targiehandlu+auto@targiehandlu.pl";

            if($this->lang === "en"){
                app()->setLocale("en");
                config(["app.name" => "E-commerce Warsaw Expo"]);
            }
            else
            {
                app()->setLocale("pl");
                config(["app.name" => $eventName]);
            }
            
        }


        $this->url = "https://account.".$this->domain.'/#/meetups?token=' . $this->token;


        $this->to( $this->recipient );

        $this->from($emailHelper->getEmail(), $emailHelper->getSender() . " - " . $eventName);

        $this->cc( $cc ); 

        $this->subject($this->subject);

        return $this->markdown('emails.company.' . $this->view);
    }
}
