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
        include BASEPATH.'/views/errors/404.php';
        die();
    }

    private function dispatch405(){
        header("HTTP/1.1 405 Method Not Allowed");
        include BASEPATH.'/views/errors/405.php';
        die();
    }


    private function methodIsInvalid(Request $request){

        return true;
        // return in_array($request->get_method(), $this->routes['methods'])? false : true ;


    }
    public function run(){

        #404 not found uri

        if(is_null($this->current_route)){

            
            $this->dispatch404();
        }



        #405 method not supported

        // if($this->methodIsInvalid($this->request)){
        //     echo 'method is invalid';
        //     $this->dispatch405();
        // }
    }
}
