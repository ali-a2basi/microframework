<?php


namespace App\Core\Routing;

use App\Core\Request;

class Router{
    private $request;
    private $routes;
    private $current_route;



    public function __construct(){

        $this->request = new Request;
        $this->routes = Route::route();
        $this->current_route = $this->findRoute($this->request) ?? null;
        var_dump($this->current_route);
    }


    public function findRoute(Request $request){

        foreach($this->routes as $route){
            
            
            if(in_array($request->get_method(), $route['methods']) and $request->get_uri()==$route['uri']){
                return $route;

            }
        }
        return null;

    }
}
