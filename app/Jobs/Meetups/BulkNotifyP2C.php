<?php

namespace App\Jobs\Meetups;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;
use App\Mail\Meetups\BulkP2C;
use Eventjuicer\Models\Participant;

class BulkNotifyP2C //implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $participant;
    protected $number_of_rsvp;

    public function __construct(Participant $participant, $number_of_rsvp){
        $this->participant = $participant;
        $this->number_of_rsvp = $number_of_rsvp;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(){

        $company = $this->participant->company;
        $sales_managers = $company->people->where("role", "sales_manager");

        if($sales_managers->count()){

            foreach( $sales_managers as $sales_manager){


                if(!filter_var($sales_manager->email, FILTER_VALIDATE_EMAIL)){
                    continue;
                }

                Mail::send(new BulkP2C( array(
                    "email" => $sales_manager->email,
                    "token" => $this->participant->token,
                    "number_of_rsvp" =>  $this->number_of_rsvp
                ) ) );
            }  
        }else{

            Mail::send(new BulkP2C( array(
                "email" => $this->participant->email,
                "token" => $this->participant->token,
                "number_of_rsvp" =>  $this->number_of_rsvp
            ) ) );
        }

       

    }
}
