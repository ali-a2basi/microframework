<?php

namespace App\Utilities;


class AssetUrl{

    public static function current()
    {
        $actualLink = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        return $actualLink;
        
    }
}