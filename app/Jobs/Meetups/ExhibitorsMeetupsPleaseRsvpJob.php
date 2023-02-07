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
    protected $number_of_rsvp;
    protected $config;

    public function __construct(Participant $participant, $number_of_rsvp, array $config){
        $this->participant = $participant;
        $this->number_of_rsvp = $number_of_rsvp;
        $this->config = $config;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){

        $company = $this->participant->company;
        $sales_managers = $company->people->where("role", "sales_manager");
        $sent_to_valid_sales_manager = false;

        if($sales_managers->count()){

            foreach( $sales_managers as $sales_manager){


                if(!filter_var($sales_manager->email, FILTER_VALIDATE_EMAIL)){
                    continue;
                }

                $sent_to_valid_sales_manager = true;

                Mail::send(new Email($this->participant, 
                    array_merge($this->config,[
                        "recipient" => $sales_manager->email,
                        "number_of_rsvp" =>  $this->number_of_rsvp
                    ])
                ));
  
            }
        }
        
        if(!$sent_to_valid_sales_manager){

            Mail::send(new Email($this->participant, 
                array_merge($this->config,[
                    "recipient" => $this->participant->email,
                    "number_of_rsvp" =>  $this->number_of_rsvp
                ])
            ));

        }        
    }
}