<?php
class Connection{
    public static function make(){
    try {
      return  $pdo= new PDO("mysql:host=localhost;dbname=dam", "root", "");
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
}
?>
