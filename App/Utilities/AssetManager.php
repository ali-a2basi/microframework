<?php


namespace App\Utilities;


class AssetManager{


    public static function __callStatic($method, $arguments)
    {
        return $_ENV['BASEURL'] . 'assets/' . $method . '/' . $arguments[0];
        
    }



}




