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
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    // 'facebook' => [
    // 'client_id' => '990643984435915',
    // 'client_secret' => '6817ecddcfaab51e0f402d55f78b13ff',
    // 'redirect' => 'http://192.168.1.186:4200/social-login/facebook/callback',
    // ],

    'facebook' => [
    'client_id' => '161656441138846',
    'client_secret' => '34d09735f28aa94ba62253cd859bfe56',
    'redirect' => 'http://192.168.1.109:4200/social-login/facebook/callback',
    ],

    'twitter' => [
    'client_id' => 'S1K2OdzDbe3SarNeP8flCaTOH',
    'client_secret' => 'cyRZfg6yjME2syCTs8TdiVRHON2FeWfoSemEqQb1uE3iqRrK8e',
    'redirect' => 'http://127.0.0.1/futurestarr-backend/api/social-login/twitter/callback',
    ],

    'google' => [
    'client_id' => '1065713626324-h0i7ik5bn4c1b1lq3mr2p2l6660fu57m.apps.googleusercontent.com',
    'client_secret' => 'I1sHoTTY_N0DVfMlMHm_sQPa',
    'redirect' => 'http://localhost/futurestarr-backend/api/social-login/google/callback',
    ],

    'linkedin' => [
    'client_id' => '81rcju5knzj24b',
    'client_secret' => 'Pb4CTqF0zOm25brR',
    'redirect' => 'http://192.168.1.185/futurestarr-backend/api/social-login/linkedin/callback',
    ],

];
