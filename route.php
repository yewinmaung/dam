<?php

//$routes->register([
//    ""=>"controller/home.php",
//    "about"=>"controller/aboutcontroller.php",
//    "admin"=>"controller/admincontroller.php",
//    "upload"=>"controller/uploadcontroller.php",
//    "create"=>"controller/create.php",
//    ]);
$routes->get("","controller/home.php");
$routes->get("about","controller/aboutcontroller.php");
$routes->get("admin","controller/admincontroller.php");
$routes->get("upload","controller/uploadcontroller.php");
$routes->post("create","controller/create.php");

