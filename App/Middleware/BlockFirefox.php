<?php

namespace App\Middleware;

use App\Middleware\Contracts\MiddlewareInterface;

class BlockFirefox implements MiddlewareInterface{

    public function handle(){
        echo "block firefox";       

    }


}