<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Eventjuicer\Services\Exhibitors\Console;
use Eventjuicer\Models\CompanyPerformance;

class StoreAwardsData extends Command {
 
    protected $signature = 'exhibitors:promoninja_save       
        {--domain=} 
        {--previous}';
    
    protected $description = 'Save promoninja ranking!';
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function handle(Console $service){

        $domain = $this->option("domain");
        $previous =  $this->option("previous");

        if(empty($domain)) {
            $this->error("--domain= must be set!");
        }
     
        $service->run($domain, !empty($previous));
        $eventId =  $service->getEventId();
        $this->info("Event id: " . $eventId );
        $exhibitors = $service->getDataset(true);
        $this->info("Number of exhibitors with companies assigned: " . $exhibitors->count() );
        $apiCall = $service->getApi("/ranking?event_id=" . $eventId, $domain);
        $ranking = collect(array_get($apiCall, "data", []))->mapWithKeys(function($item){

             return [$item['company_id'] => $item['stats']];
        });

        foreach($exhibitors as $ex)
        {

            if(! $ex->hasCompany() )
            {
                $this->error("No company assigned for " . $ex->email . " - skipped.");
                continue;
            }

            $stats   = array_get($ranking, $ex->company_id, []);

            $item = CompanyPerformance::firstOrNew([
                "event_id" => $eventId,
                "company_id" => $ex->company_id
            ]);
           
            $item->event_id = $eventId;
            $item->company_id = $ex->company_id;
            $item->prizes = array_get($stats, "prizes", []);
            $item->points = array_get($stats, "sessions", []);
            $item->position = array_get($stats, "position", []);
            $item->save();

        }   


    }
}
