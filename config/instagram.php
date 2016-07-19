<?php

/*
 * This file is part of Laravel Instagram.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default' => 'main',

    /*
    |--------------------------------------------------------------------------
    | Instagram Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        'main' => [ 
            'id' => 'e67eb6f918064a1394110ec0ef0ae915', 
            'secret' => '6cbb2b37ac0b4527962d84749ed6f9fa', 
            'access_token' => '{ "access_token": "2947574023.e67eb6f.23b91478c9e54c8e88b68fafb1209949"}' 
        ],

    ],
    /*
    get token
    https://instagram.com/oauth/authorize/?client_id=e67eb6f918064a1394110ec0ef0ae915&redirect_uri=http://localhost&response_type=token&scope=likes+comments+relationships+basic+public_content
    */

];
