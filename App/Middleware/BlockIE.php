<?php

namespace App\Middleware;

use App\Middleware\Contracts\MiddlewareInterface;

class BlockIE implements MiddlewareInterface {

    public function handle(){
        echo "block IE";

    }


}