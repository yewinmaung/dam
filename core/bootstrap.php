<?php
//$config=require "config.php";
require "function.php";

require "core/Router.php";
require "core/Request.php";
require "database/connection.php";
require "database/querys.php";
App::bind("config",require "config.php");
$pdo=Connection::make(App::get('config')['database']);
App::bind("database",new QueryBuilder($pdo));
//App::bind("config",require "config.php");
//App::get("config");
//dd(App::get("config"));
?>