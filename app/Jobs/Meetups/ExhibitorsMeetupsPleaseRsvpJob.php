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
        $context_recipients = $company->people->where("role", $this->config()."_manager");
        $sent_to_valid_sales_manager = false;

        if($sales_managers->count()){

            foreach( $sales_managers as $sales_manager){

                if(filter_var($sales_manager->email, FILTER_VALIDATE_EMAIL)){
                   
                    Mail::send(new Email(
                        $this->participant, 
                        $this->config,
                        $sales_manager->email
                    ));

                    $sent_to_valid_sales_manager = true;

                }
            }
        }

        if(!$sales_managers->count() || !$sent_to_valid_sales_manager){

            Mail::send(new Email(
                $this->participant, 
                $this->config,
                $this->participant->email
            ));

        }        
    }
}