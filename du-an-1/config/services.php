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
    'facebook' => [
        'client_id' => '421129083044878',
        'client_secret' => 'c1f811948e4ff265b85bef2ae757ebbb',
        'redirect' => 'http://localhost:8000/buyer/login/fbk/back'
    ],
    'google' => [
        'client_id'     => '923006995700-27ka0ltg2e445slsi1ibagcfd95slqvl.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect'      => 'http://127.0.0.1:8000/buyer/login/google/back'
    ],
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

];
