<?php
class Router{
    public $routes=[
        "GET"=>[],
        "POST"=>[]
    ];
    public function get($uri,$controller){
        $this->routes['GET'][$uri]=$controller;
    }
    public function post($uri,$controller){
        $this->routes['POST'][$uri]=$controller;
    }
    public static function load($filename){

        $routes=new Router();
        require $filename;

        return $routes;
    }
    public function register($routes){
        $this->routes=$routes;
    }



    public function direct($uri,$method){

        if (!array_key_exists($uri,$this->routes[$method])){
            die("404");
        }
        $explosion=explode("@",$this->routes[$method][$uri]);
        //return $this->routes[$method][$uri];

        $this->callMethod($explosion[0],$explosion[1]);

   }
    function callMethod($class,$method){
 $class=new $class;
 $class->$method();

    }


}