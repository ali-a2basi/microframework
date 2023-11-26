<?php
namespace App\Core\Routing;


class Route{

    private static $routes = [];

    public static function add($methods, $uri, $action = null, $middleware = null){
        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action, 'middleware' => $middleware];
    }

    public static function get($uri, $action = null, $middleware = null){
        self::add('get', $uri, $action,  $middleware);
    }

    public static function post($uri, $action = null, $middleware = null){
        self::add('post', $uri, $action, $middleware);
    }

    public static function put($uri, $action = null, $middleware = null){
        self::add('put', $uri, $action, $middleware);
    }

    public static function delete($uri, $action = null, $middleware = null){
        self::add('delete', $uri, $action, $middleware);
    }

    public static function patch($uri, $action = null, $middleware = null){
        self::add('patch', $uri, $action, $middleware);
    }

    public static function head($uri, $action = null, $middleware = null){
        self::add('head', $uri, $action, $middleware);
    }

    public static function option($uri, $action = null, $middleware = null){

        self::add('head', $uri, $action, $middleware);
    }

    public static function route(){
        return self::$routes;
    }
}