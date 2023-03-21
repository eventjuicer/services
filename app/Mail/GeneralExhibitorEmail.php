<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Eventjuicer\Models\Participant;
use Eventjuicer\Services\Personalizer;
use Eventjuicer\Services\Exhibitors\Email;
use Eventjuicer\Services\Exhibitors\CompanyData;
use Eventjuicer\Crud\CompanyPeople\FetchCompanyPerson;


class GeneralExhibitorEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $participant, $domain;

    public  $subject,
            $view,
            $lang,
            $viewlang,
            $context,
            $stats,
            $representatives,
            $prizes,
            $translations,
            $creatives,
            $additionalData,
            $profile, 
            $profileUrl, 
            $company,
            $accountUrl,
            $accountUrlVouchers,
            $accountUrlArrangement,
            $accountUrlPremium,
            $accountUrlReps,
            $accountUrlRanking,
            $accountUrlPromote,
            $accountUrlPromotePublic,
            $accountUrlVisitors,
            $accountUrlVips,
            $accountUrlBadgescanner,
            $accountUrlScans,
            $accountUrlLogistics,
            $accountUrlPeople,
            $accountUrlParty,
            
            $photosUrl,

            $trackingLink,
            $pollUrl,
            $footer,
            $company_id;
 

    public $sharers, $newsletter, $assignedPrizes;

    public $calendar;

    public function __construct(Participant $participant, array $config)
    {
        $this->participant  = $participant;
        $this->domain = array_get($config, "domain");

        $this->subject = array_get($config, "subject", "");
        $this->view = array_get($config, "email");
        $this->lang = array_get($config, "lang");
        $this->viewlang = array_get($config, "viewlang");

        $this->stats = array_get($config, "stats", []);
        $this->representatives = array_get($config, "representatives", []);
        $this->prizes = array_get($config, "prizes", []);
        $this->translations = array_get($config, "translations", []);
        $this->creatives = array_get($config, "creatives", []);
        $this->additionalData = array_get($config, "additionalData", []);
        $this->context = array_get($config, "context", "");

        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $companydata = new CompanyData($this->participant);

        $emailHelper = new Email($this->participant);

        $this->footer = $emailHelper->getFooter();
        $this->calendar = $emailHelper->getCalendarUrl();
        $this->pollUrl = $emailHelper->getPollUrl();


        

        //this should be moved to settings?...
       if( $this->participant->group_id > 1 ){

            // $from = "marta@ecommerceberlin.com";
            $eventName = "E-commerce Berlin Expo";
            $domain = "ecommerceberlin.com";
            $cc = "ecommerceberlin+auto@ecommerceberlin.com";

            app()->setLocale("en");
            config(["app.name" => $eventName]);

            $this->accountUrlPromotePublic = 'https://account.ecommerceberlin.com/#/promote?company_id=' . $companydata->getCompany()->id;
            $this->photosUrl = "https://photos.ecommerceberlin.com/".$companydata->getCompany()->id."/ebe7";
    

        }else{


            // $from = "karolina.michalak@targiehandlu.pl";
            $eventName = "Targi eHandlu";
            $domain = "targiehandlu.pl";
            $cc = "targiehandlu+auto@targiehandlu.pl";

            if($this->viewlang === "en"){
                app()->setLocale("en");
                config(["app.name" => "E-commerce Warsaw Expo"]);
            }
            else
            {
                app()->setLocale("pl");
                config(["app.name" => $eventName]);
            }
            
            $this->accountUrlPromotePublic = 'https://account.targiehandlu.pl/#/promote?company_id=' . $companydata->getCompany()->id;
            $this->photosUrl = "https://photos.targiehandlu.pl/".$companydata->getCompany()->id."/teh23";

            
        }

        $this->profile = $companydata->profileData();
        $this->company = $companydata->companyData();

        //URLS....
        $this->profileUrl = $companydata->profileUrl();
        $this->accountUrl = $companydata->accountUrl();

        $this->accountUrlVouchers = $companydata->accountUrl("vouchers");
        $this->accountUrlPremium = $companydata->accountUrl("premium");
        $this->accountUrlArrangement = $companydata->accountUrl("arrangement");
        $this->accountUrlReps = $companydata->accountUrl("representatives");

        $this->accountUrlRanking = $companydata->accountUrl("ranking");
        $this->accountUrlPromote = $companydata->accountUrl("promote");
        $this->accountUrlVisitors = $companydata->accountUrl("visitors");
        $this->accountUrlVips = $companydata->accountUrl("vips");
        $this->accountUrlBadgescanner = $companydata->accountUrl("badgescanner");
        $this->accountUrlScans = $companydata->accountUrl("scans");
        $this->accountUrlLogistics = $companydata->accountUrl("logistics");
        $this->accountUrlPeople = $companydata->accountUrl("people");
        $this->accountUrlParty = $companydata->accountUrl("party");


        $this->trackingLink = $companydata->trackedProfileUrl();
        $this->company_id = $companydata->getCompany()->id;

        if(!empty($this->creatives)){
            
            $englishCreatives = collect($this->creatives)->where("lang", "en");
            $this->sharers = $englishCreatives->where("name","logotype")->pluck("sharers")->collapse()->all();
            $this->newsletter = array_get($englishCreatives->where("name", "invite")->first(), "newsletter");

            $assignedPrizes = 1;

        }

        $recipient =  trim( strtolower( $this->participant->email ));

        if($this->context){

            $context_people = app(FetchCompanyPerson::class);
            $context_people->getForParticipantFiltered($this->participant, $this->context);

            $this->to( $context_people  );
            $this->cc( $recipient );
        }
        else{

            $this->to( $recipient );

        }

        $this->from($emailHelper->getEmail(), $emailHelper->getSender() . " - " . $eventName);

        $this->cc( $cc ); 

        $this->subject($this->subject);

        return $this->markdown('emails.company.' . $this->view);
    }
}
