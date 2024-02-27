<?php

namespace Ozoriotsn\OpenCep;

use GuzzleHttp\Client;

class Api
{

    /**
     * @return Client
     */
    public static function openCep(){

        return new Client([
            'base_uri' => 'https://opencep.com/v1/',
            'timeout'  => 2.0,
        ]);
    }

}