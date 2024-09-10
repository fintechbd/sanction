<?php

// config for Fintech/Sanction
return [

    /*
    |--------------------------------------------------------------------------
    | Enable Module APIs
    |--------------------------------------------------------------------------
    | This setting enable the API will be available or not
    */
    'enabled' => env('PACKAGE_Sanction_ENABLED', true),

    /*
    |--------------------------------------------------------------------------
    | Sanction Group Root Prefix
    |--------------------------------------------------------------------------
    |
    | This value will be added to all your routes from this package
    | Example: APP_URL/{root_prefix}/api/sanction/action
    |
    | Note: while adding prefix add closing ending slash '/'
    */

    'root_prefix' => 'api/',

    //** Model Config Point Do not Remove **//

    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | This value will be used across systems where a repository instance is needed
    */

    'repositories' => [
        //** Repository Binding Config Point Do not Remove **//
    ],

];
