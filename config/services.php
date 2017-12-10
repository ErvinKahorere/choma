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

    'facebook' => [
    'client_id' => '2004044996530006',
    'client_secret' => '0fcdb571e9949b502705c46d34b1ee8e',
    'redirect' => 'http://choma.dev/login/facebook/callback',
],
    'twitter' => [
        'client_id' => 'A8UWV21ngj8E32JiiDGcZClWr',
        'client_secret' => '4fUQfXOUlHtVNI37Ggzsladz2LL9Ez7WrzST5woEhPY9QrBEW1',
        'redirect' => 'http://127.0.0.1:8000/login/twitter/callback',
    ],

    'google' => [
        'client_id' => '48251168427-8mrivhafabq0ggjihohua27gknnh8qo0.apps.googleusercontent.com',
        'client_secret' => 'H6OG3XvEz0Wh2zllTnccH_qV',
        'redirect' => 'http://choma.dev/login/google/callback',
    ],



];
