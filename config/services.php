<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
       'domain'   => env('MAILGUN_DOMAIN'),
       'secret'   => env('MAILGUN_SECRET'),   // API key
        // US region (default): api.mailgun.net
        // EU region: api.eu.mailgun.net
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.eu.mailgun.net'),
        'region' => env('MAILGUN_REGION', 'eu'),
        "options" => [
            'endpoint' => env('MAILGUN_ENDPOINT', 'api.eu.mailgun.net'),
            'region' => env('MAILGUN_REGION', 'eu'),
            'open_tracking'  => false,
            'click_tracking' => false,
            'transactional'  => true,
        ],
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
        'options' => [
            'endpoint' => env('SPARKPOST_HOST', 'https://api.eu.sparkpost.com'),
            'options' => [
                'open_tracking'  => false,
                'click_tracking' => false,
                'transactional'  => true,
            ],
            'open_tracking'  => false,
            'click_tracking' => false,
            'transactional'  => true,
        ],
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
