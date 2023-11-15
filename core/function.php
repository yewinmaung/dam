<?php
function dd($data){
    echo "<pre>";
    die(var_dump($data));
}

function view($name,$data=[],$data2=[],$data3=[],$data4=[],$data5=[]){

  extract($data);
  extract($data2);
  extract($data3);
    extract($data4);
    extract($data5);

return require "views/$name.view.php";
}
//header("Location:http://localhost:8000/damlist");
function redirect($route_name){

    return header("Location:http://localhost:8000/$route_name");
}
function withMessage($dataName){
   return $dataName;
}
function timestamp(){
    $timezone=date_default_timezone_set("Asia/Yangon");
    $date=date("y-m-d h:i:s");
//dd($date);
    return $date;
}
