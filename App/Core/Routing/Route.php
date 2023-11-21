<?php
namespace App\Core\Routing;


class Route{

    private static $routes = [];

    public static function add($methods, $uri, $action = null, $middleWare =[]){
        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action, 'middleware' => $middleWare];
    }

    public static function get($uri, $action = null, $middleWare =[] ){
        self::add('get', $uri, $action, $middleWare);
    }

    public static function post($uri, $action = null, $middleWare =[]){
        self::add('post', $uri, $action, $middleWare);
    }

    public static function put($uri, $action = null, $middleWare =[]){
        self::add('put', $uri, $action);
    }

    public static function delete($uri, $action = null, $middleWare =[]){
        self::add('delete', $uri, $action, $middleWare);
    }

    public static function patch($uri, $action = null, $middleWare =[]){
        self::add('patch', $uri, $action, $middleWare);
    }

    public static function head($uri, $action = null, $middleWare =[]){
        self::add('head', $uri, $action, $middleWare);
    }

    public static function option($uri, $action = null, $middleWare =[]){

        self::add('head', $uri, $action, $middleWare);
    }

    public static function route(){
        return self::$routes;
    }
}