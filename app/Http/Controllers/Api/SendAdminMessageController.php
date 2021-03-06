<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Eventjuicer\Services\SendAdminMessage;
use Eventjuicer\Services\SparkPost;


class SendAdminMessageController extends Controller
{
    

 
    public function store(SparkPost $spark, SendAdminMessage $service, Request $request)
    {
        $data = $this->postData();

        $errors = $service->validate($data);

        if(count($errors))
        {

            throw new \Exception("cannot send!" . json_encode($errors) );

            return $this->jsonError($errors, 500);
        }

        $recipients = $service->make( 
            $data["ids"], 
            array_get($data, "event_id", 0),
            (bool) array_get($data, "unique", 1),
            false
        );

        if(!$recipients->count()){
            return response()->json([
                "error" => [
                    "message" => "no valid recipients or protected!"
                ]
            ]);
        }

        try {
            
            $data = $service->legacy($data);

        } catch (\Exception $e) {
                
            return response()->json([
                "error" => [
                    "message" => $e->getMessage()
                ]
            ]);
        }


        if(env('APP_DEBUG')){

            return response()->json([
                "recipients" => $recipients->toArray(),
                "data" => $data
            ]);
        }

        $status = $spark->bulk(
            $recipients,
            $data,
            array_get($data, "event_id", 0)
        );

        return response()->json(["data", $status]);
    }

 
    
}
