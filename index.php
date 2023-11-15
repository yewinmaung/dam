<?php
require "vendor/autoload.php";
require "core/bootstrap.php";
//var_dump(Router::load("route.php")->direct(Request::uri(),$_SERVER["REQUEST_METHOD"]));

 Router::load("route.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);


//$routes=new Router();
//require "route.php";
//require $routes->direct(trim($_SERVER['REQUEST_URI'],"/"));

