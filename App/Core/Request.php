<?php
namespace App\Core;


class Request{
    private $route_params;
    private $params;
    private $ip;
    private $uri;
    private $method;
    private $agent;
    

    public function __construct()
    { 
        $this->params = $_REQUEST;
        $this->ip = $_SERVER['REMOTE_ADDR'] ;
        $this->uri = $_SERVER['REQUEST_URI'] ;
        $this->method = strtolower($_SERVER['REQUEST_METHOD']) ;
        $this->agent = strtok($_SERVER['HTTP_USER_AGENT'], '?') ;
        
    }
    public function add_route_params($key, $value){
        return $this->route_params[$key] = $value;
    }
    
    public function get_params(){
        return $this->params;
    }


    public function get_ip(){
        return $this->ip;
    }
    public function get_uri(){
        return $this->uri;
    }

    public function get_method(){
        return $this->method;
    }

    public function get_agent(){
        return $this->agent;
    }


    public function input(string $key = null ){
        return $this->params[$key] ?? null;


    }

    public function __get($name): string|null
    
    {

        return array_key_exists($name, $this->params) ? $this->params[$name] : null;
    }
        
}