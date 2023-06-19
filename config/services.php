<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
     'google' => [
        'client_id' => '231165282567-gnniqdoma77oqgao1nd6i7scke5c7d8o.apps.googleusercontent.com', //Google API
        'client_secret' => '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', //Google Secret
        'redirect' => 'https://dhiiraayarealty.com/login/google/callback',
     ],
     'facebook' => [
        'client_id' => '799292818178402', //Facebook API
        'client_secret' => 'ec21aec15f813ee019631c6be1bf86f5', //Facebook Secret
        'redirect' => 'https://dhiiraayarealty.com/login/facebook/callback',
     ],



];