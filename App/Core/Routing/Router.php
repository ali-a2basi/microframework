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


    private function dispatch404(){
        header("HTTP/1.1 404 Not Found");
        view('errors.404');
        die();
    }

    private function dispatch405(){
        header("HTTP/1.1 405 Method Not Allowed");
        view('errors.405');
        die();
    }


    private function methodIsInvalid(Request $request){

        foreach($this->routes as $route){
            return in_array($request->get_method(), $route['methods']) ? false : true ;
         }
        // 


    }
    public function run(){

        
        #405 method not supported

        if($this->methodIsInvalid($this->request)){
            $this->dispatch405();             
         }

        #404 not found uri

         if(is_null($this->current_route)){
            $this->dispatch404();
            }


        $this->dispatcher();
    }

    private function dispatcher(){
        
    }

}
