<?php


namespace App\Core\Routing;

use App\Core\Request;
use App\Middleware\GlobalMiddleWare;

class Router{
    const fullNameSpace = 'App\Controllers\\';
    private $request;
    private $routes;
    private $current_route;
    
    



    public function __construct(){

        $this->request = new Request;
        $this->routes = Route::route();
        
        $this->current_route = $this->findRoute($this->request) ?? null;
        
        if($this->current_route['middleware'] ){
            $this->runMiddleware();
        }
        
    }


    private function runMiddleware(){
        $middlewares = $this->current_route['middleware'];
        foreach($middlewares as $middleware){

            $middleClassFullName = "\\$middleware";
            $middlewareClass = new $middleClassFullName;
            $middlewareClass->handle();
        }
        die();

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

        $checkChrome = new GlobalMiddleWare();
        if($checkChrome->handle()){
            die('Access Denied');
        }
        
        #405 method not supported

        if($this->methodIsInvalid($this->request)){
            $this->dispatch405();             
         }

        #404 not found uri

         if(is_null($this->current_route)){
            $this->dispatch404();
            }


        $this->dispatch($this->current_route);
    }

     function dispatch($route){

        $action = $route['action'];


       #null requests

        if(is_null($this->current_route)){

            return;
        }


        #closures


        if(is_callable($action)){


            $action();

            //second way to call an anonymous function
            // call_user_func($action);
        }



        #string patterns ['NameController@method']

        if(is_string($action)){
            $action = explode('@', $action);
        }




        #array patterns ['NameController', 'method']

        if(is_array($action)){
           
            $className = self::fullNameSpace .$action[0];

            $method = $action[1];

            // checking that if class is exist

            if(!class_exists($className)){

                throw new \Exception($className. 'not exists');
            }


            $callClass = new $className();

            // checking that if method is exist 
            
            
            if(!method_exists($callClass, $method)){

                throw new \Exception("$method does not exist in class $className");
            }

            $callClass->$method();

        }

    }

}
