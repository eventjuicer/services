<?php

namespace App\Jobs\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Meetups\ExhibitorsMeetupsPleaseRsvpMail as Email;
use Eventjuicer\Models\Participant;

class ExhibitorsMeetupsPleaseRsvpJob //implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $participant;
    protected $config;

    public function __construct(Participant $participant, array $config){
        $this->participant = $participant;
        $this->config = $config;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){

        $company = $this->participant->company;
        $context_recipients = $company->people->where("role", $this->config["context"]."_manager");
        $sent_to_context = false;

        if($context_recipients->count()){

            foreach( $context_recipients as $context_recipient){

                if(filter_var($context_recipient->email, FILTER_VALIDATE_EMAIL)){
                   
                    Mail::send(new Email(
                        $this->participant, 
                        $this->config,
                        $context_recipient->email
                    ));

                    $sent_to_context = true;

                }
            }
        }

        if(!$context_recipients->count() || !$sent_to_context){

            Mail::send(new Email(
                $this->participant, 
                $this->config,
                $this->participant->email
            ));

        }        
    }
}