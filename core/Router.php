<?php
class Router{
    protected $routes=[
        "GET"=>[],
        "POST"=>[]
    ];
    public static function load($filename){
        $routes=new Router();
        require $filename;
        return $routes;
    }
    public function register($routes){
        $this->routes=$routes;
    }
    public function get($uri,$controller){
      $this->routes['GET'][$uri]=[$controller];

    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri]=[$controller];

    }
    public function direct($uri,$method){

        if (array_key_exists($uri,$this->routes[$method])){
            return $this->routes[$method][$uri];

        }
        else
            die("404");
    }

}