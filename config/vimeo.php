<?php

/**
 *   Copyright 2018 Vimeo.
 *
 *   Licensed under the Apache License, Version 2.0 (the "License");
 *   you may not use this file except in compliance with the License.
 *   You may obtain a copy of the License at
 *
 *       http://www.apache.org/licenses/LICENSE-2.0
 *
 *   Unless required by applicable law or agreed to in writing, software
 *   distributed under the License is distributed on an "AS IS" BASIS,
 *   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *   See the License for the specific language governing permissions and
 *   limitations under the License.
 */
declare(strict_types=1);

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
    | Vimeo Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Example
    | configuration has been included, but you may add as many connections as
    | you would like.
    |
    */

    'connections' => [

        // 'main' => [
        //     'client_id' => env('VIMEO_CLIENT', '1aa22b83a7b4c17b9ad314b6d33efe1607c27523'),
        //     'client_secret' => env('VIMEO_SECRET', 'janKACYl8YONDNpONMD5UlTY4RyFRwcd8Vli1zADWQ5MX7CFJkVLPcdVSBnTHhNUmfhrJPUkacWUv5vJvilA+6wkYl46TSRSgdfd1I0kWkzq1ATJs6oDGGcCmekDkRpn'),
        //     'access_token' => env('VIMEO_ACCESS', '7c7632732b4a058938b2e6e501ea44c7'),
        // ],

        'main' => [
            'client_id' => env('VIMEO_CLIENT', '51c0567ce32ffb5a62ce8b1133f8625a7e5bac57'),
            'client_secret' => env('VIMEO_SECRET', 'PzBDW2EPVBGx91EPUE33D7tdBo+vtbWU28Tdq6DHubT9e8zrIxLYnDkPZyePi+1GWWsJC2vLQ/d73guXlrfTjgMpTH9Q2gq7BjA38y1zZ0apEg2bx/RPJvZ74yCTG7ym'),
            'access_token' => env('VIMEO_ACCESS', 'acae598df851eb96297208f8e826713d'),
        ],


        'alternative' => [
            'client_id' => env('VIMEO_ALT_CLIENT', 'your-alt-client-id'),
            'client_secret' => env('VIMEO_ALT_SECRET', 'your-alt-client-secret'),
            'access_token' => env('VIMEO_ALT_ACCESS', null),
        ],

    ],

];
