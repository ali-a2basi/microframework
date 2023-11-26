<?php

namespace App\Middleware;

use App\Middleware\Contracts\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class GlobalMiddleWare implements MiddlewareInterface{

    public function handle(){

        if (Browser::isChrome()){
            return true;
        }
    }


}