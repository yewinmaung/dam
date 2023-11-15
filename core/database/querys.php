<?php


class QueryBuilder {
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo=$pdo;
    }

    public function selectAll($table){
        $statement=$this->pdo->prepare("select * from $table");
        $statement->execute();
        return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function Data($table,$id){
        $statement=$this->pdo->prepare("select * from $table where $id=$table.district_id");
        $statement->execute();
        return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function checkData($table,$email,$password){
        $statement=$this->pdo->prepare("select * from $table where $table.email='$email' and $table.password='$password' ");
        $statement->execute();
        return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function selectData($table,$id){
        $statement=$this->pdo->prepare("select * from $table where $id=$table.id");
        $statement->execute();
        return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function count($table){
        $statement=$this->pdo->prepare("select count($table.id) as count from $table ");
        $statement->execute();
        return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
    }
 public function searchData($table,$name){
     $statement=$this->pdo->prepare("Select * from $table where $table.name like '%$name%'");
     $statement->execute();
     return $tasks=$statement->fetchAll(PDO::FETCH_OBJ);
 }

    public function updateData($table,$dataArr,$where)
    {
        $getDataKey = array_keys($dataArr);

        $data= implode("=?,", $getDataKey);
        $cols=$data."=?";
      $questionmark="";
        foreach ($getDataKey as $keys){
           $questionmark.="?,";
        }
        $questionmark=rtrim($questionmark,",");

        // dd($questionmark);
        $statement=$this->pdo->prepare("UPDATE $table SET $cols where id=$where");
        $getDataValue=array_values($dataArr);
        $statement->execute($getDataValue);

    }
    public function deleteData($table,$where){
        //$getDataKey = array_keys($dataArr);
        $statement=$this->pdo->prepare("DELETE FROM $table where id=$where");
        //$getDataValue=array_values($dataArr);
        $statement->execute();
    }

   public function insertAll($table,$dataArr){
        $getDataKey=array_keys($dataArr);
        $cols=implode(",",$getDataKey);
        $questionmark="";
        foreach ($getDataKey as $keys){
                   $questionmark.="?,";
        }
        $questionmark=rtrim($questionmark,",");

        $statement=$this->pdo->prepare("insert into $table ($cols) values ($questionmark)");

         $getDataValue=array_values($dataArr);

          $statement->execute($getDataValue);

         }

}

?>
