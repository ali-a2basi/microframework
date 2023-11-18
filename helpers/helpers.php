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





