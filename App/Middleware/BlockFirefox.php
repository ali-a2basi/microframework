<?php

namespace App\Middleware;

use App\Middleware\Contracts\MiddlewareInterface;
use hisorange\BrowserDetect\Parser as Browser;

class BlockFirefox implements MiddlewareInterface{

    public function handle(){
        if(Browser::isFirefox()){

            die('Access Denied');
        } 
        var_dump(Browser::deviceType());
        
        

    }


}