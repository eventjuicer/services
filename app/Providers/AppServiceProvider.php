<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;



use Illuminate\Support\Facades\View;
use Eventjuicer\ViewComposers\ParticipantPromoComposer;
use Horizon;



use Eventjuicer\Contracts\CountsSoldTickets;
use Eventjuicer\Services\TicketsSold;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        $this->app->bind(CountsSoldTickets::class, TicketsSold::class);


        View::composer('promo/*', ParticipantPromoComposer::class);
        View::composer('crm/*', ParticipantPromoComposer::class);

        if($this->app->environment() === 'production')
        { 
            $this->app['request']->server->set('HTTPS', true); 
        }

        //use NGINX cookie-based auth!

        Horizon::auth(function ($request) {
            return true;
        });

        Horizon::routeSlackNotificationsTo(env("QUEUE_SLACK_URL"), '#dev');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    




    }
}
