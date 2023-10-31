<?php

require "core/bootstrap.php";

require Router::load("route.php")->direct(Request::uri(),$_SERVER['REQUEST_METHOD']);

//$routes=new Router();
//require "route.php";
//require $routes->direct(trim($_SERVER['REQUEST_URI'],"/"));

?>
