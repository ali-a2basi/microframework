<?php

function siteUrl($route){

    return $_ENV['BASEURL']. $route;
    
}



function assetURL($route){

    return siteUrl("assets/" . $route);
}


function randoElement($arr){

    shuffle($arr);

    return array_pop($arr);
    
}


function view($path){
    #input errors.404
    #/views/errors/404.php

    //changing errors.php to errors/php
    $changePath = str_replace('.', '/' , $path );

    //creating full Path
    $fullPath = BASEPATH."views/$changePath.php";

    include_once $fullPath;

}





