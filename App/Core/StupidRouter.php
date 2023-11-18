<?php


namespace App\Core;

use App\Utilities\AssetUrl;

class StupidRouter{

    private $route;

    public function __construct()
    {
        $this->route = [

            '/colors/blue' => 'colors/blue',
            '/colors/red' => 'colors/red',
            '/colors/green' => 'colors/green'

        ];

        
    }

    public function start_router(){

        $uri = AssetUrl::current_uri();

        foreach($this->route as $key => $view){

            if($uri === $key)
                include  BASEPATH ."/views/$view.php" ;
                die();
        }
    }
}