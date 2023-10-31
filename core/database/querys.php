<?php
require "connection.php";

class QueryBuilder {
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function selectAll($table){
        $statement=$this->pdo->prepare("select * from $table");
        $statement->execute();
        $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }


}

?>
