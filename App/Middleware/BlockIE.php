<?php

namespace App\Middleware;

use App\Middleware\Contracts\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class BlockIE implements MiddlewareInterface {

    public function handle(){
        if(Browser::isIE()){

            die('Access Denied');
        }       

    }


}