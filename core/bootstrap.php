<?php

require "database/querys.php";
require "core/Router.php";
require "core/Request.php";

$pdo=Connection::make();
$query=new QueryBuilder($pdo);
?>