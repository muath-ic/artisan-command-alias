<?php

/**
 * Configuration file for ArtisanCommandAlias package
 * php version 7.3.1
 * 
 * @category Web
 * @package  Laravel
 * @author   BySwadi <muath.ye@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     ArtisanCommandAlias https://www.mokasweets.com/
 */
return [
    /*
     * Register all your alias in the next array. You can use string association
     * if there's no argument.
     *
     * https://laravel.com/docs/5.6/artisan#programmatically-executing-commands
     */
    /*
    alias migrate="php artisan migrate"
    # ARTISAN
    alias routes="php artisan route:list"
    alias serve="php artisan serve"
    #alias serp="php artisan serve --port=$1"
    serp() {
        php artisan serve --port=$1
    }

    */
    'commands' => [
        // 'i' => 'inspire',
        // 'lsr' => ['route:list', ['--reverse' => true]],
    ]
];
