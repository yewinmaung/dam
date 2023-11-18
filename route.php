<?php
session_start();
//$routes->register([
//    ""=>"controller/home.php",
//    "about"=>"controller/aboutcontroller.php",
//    "admin"=>"controller/admincontroller.php",
//    "upload"=>"controller/uploadcontroller.php",
//    "create"=>"controller/create.php",
//    "damlist"=>"controller/damlistcontroller.php",
//    "destrict"=>"controller/destrictcontroller@adddestrict",
//
//    "destrictlist"=>"controller/Destrictlist.php",
//    ]);
$routes->get("","EndUserController@route");
$routes->get("home","EndUserController@home");
$routes->get("detail","EndUserController@detail");
$routes->post("search",'EndUserController@search');
$routes->post("message","EndUserController@message");
$routes->get("detailReport","EndUserController@messageDetail");
$routes->get("newdetail","EndUserController@detailnew");
$routes->get("about","EndUserController@about");

$routes->get("login","AdminController@loginview");
$routes->get("admin","DestrictController@index");
$routes->get("new","AdminController@news");
$routes->post("uploadPost","AdminController@upload");
$routes->get("post","AdminController@postshow");
$routes->get("destoryPost","AdminController@delete");
$routes->get("detailPost","AdminController@detail");
$routes->post("updatePost","AdminController@update");
$routes->post("reply","AdminController@reply");
$routes->get("login","AdminController@loginview");
$routes->post("adminlogin","AdminController@login");
$routes->get("logout","AdminController@logout");


$routes->get("destrict","DestrictController@addDestrict");
$routes->post("destrictcreate","DestrictController@createDestrict");
$routes->get("editdestrict","DestrictController@edit");
$routes->post("destrictUpdate","DestrictController@update");
$routes->get("destroyDestrict","DestrictController@delete");
$routes->get("destrictlist","DestrictController@show");


$routes->get("addtown","TownController@show");
$routes->post("createtown","TownController@create");
$routes->get("townlist","TownController@index");
$routes->get("editTown","TownController@edit");
$routes->post("updateTown","TownController@update");
$routes->get("destoryTown","TownController@delete");

$routes->get("dam","DamController@show");
$routes->post("create","DamController@create");
$routes->get("damlist","DamController@index");
$routes->get("destoryDam","DamController@delete");
$routes->get("editDam","DamController@edit");
$routes->post("updateDam","DamController@update");


?>


