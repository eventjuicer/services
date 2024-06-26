<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Eventjuicer\Services\Hashids;
use Eventjuicer\Models\Participant;
use Eventjuicer\Repositories\ParticipantMuteRepository;
use Eventjuicer\Repositories\Criteria\ColumnMatches;
use Illuminate\Database\Eloquent\Model;
use Eventjuicer\Models\ParticipantMute;
use Eventjuicer\Models\SocialLinkedin;

class UnsubscribeController extends Controller
{


    /*
        bob_participant_mutes
        
        id
        email
        level
        organizer_id
        group_id
        event_id
        created_at
        updated_at

    */
	
    function __construct()
	{
    
	}

    
    //test vddqwm

    function index(Request $request, ParticipantMuteRepository $mutes, $hash)
    {

        $user = $this->getUser($hash);

        if($user){
            return view("unsubscribe.options", ["hash" => $hash]);
        }
       
        return view("unsubscribe.notfound");
	
    }


    function muteGroup(Request $request, ParticipantMuteRepository $mutes, $hash){

        $user = $this->getUser($hash);

        if($user && $this->doUnsub($user, "group")){
            return view("unsubscribe.done");
        }

        return view("unsubscribe.notfound");
    }


    function muteLocation(Request $request, ParticipantMuteRepository $mutes, $hash){

        $user = $this->getUser($hash);

        if($user && $this->doUnsub($user, "location")){
            return view("unsubscribe.done");
        }
     
        return view("unsubscribe.notfound");         
    }

    function muteEvent(Request $request, ParticipantMuteRepository $mutes, $hash){

        $user = $this->getUser($hash);

        if($user && $this->doUnsub($user, "event")){
            return view("unsubscribe.done");
        }

        return view("unsubscribe.notfound");
    }

    public function voter($linkedIn){

        $models = SocialLinkedin::where("linkedin_id", $linkedIn)->get();

        if($models->isEmpty()){
            return view("unsubscribe.notfound");
        }

        foreach($models as $model){
            $model->unsubscribed = 1;
            $model->save();
        }

        return view("unsubscribe.done");
        
    }



    private function doUnsub(Model $user, $unSubType = ""){

        //we got a fuckup here....
        //event, group must be from CURRENT SCOPE!

        $event_id = 89;
        $group_id = 1;
        $organizer_id = 1;


        // EBE5
        // $event_id = 86;
        // $group_id = 23;
        // $organizer_id = 5;

        $email = trim(strtolower($user->email));

        $mute = ParticipantMute::firstOrNew([
            "email" => $email, 
            "event_id" => $event_id
        ]);
        
        $mute->email = $email;
        $mute->level = $unSubType;
        
        //tempfix!!
        $mute->organizer_id = $organizer_id;
        $mute->group_id = $group_id;
        $mute->event_id = $event_id;

        $mute->save();

        return $mute->id;   
    }

    private function getUser($hash){

        $participant_id =  (new Hashids())->decode($hash);

        return is_numeric($participant_id) ? Participant::find($participant_id) : null;

    }

}
