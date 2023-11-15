<?php


class DestrictController
{

    function index(){
    //$destricts=App::get("database")->count("destrict");



        $destricts=App::get("database")->count("destrict");
        $towns=App::get("database")->count("town");
        $dams=App::get("database")->count("daminfo");
        $reports=App::get("database")->count("message");
        $messages=App::get("database")->selectAll("message");


        view("admin/admin", ['destricts' => $destricts[0]], ['towns' => $towns[0]], ['dams' => $dams[0]], ["reports" => $reports[0]], ["messages" => $messages]);

            }
    function show(){
        $destricts=App::get("database")->selectAll("destrict");

        view("admin/destrict",["destricts"=>$destricts]);
    }
    function edit(){
      $id=$_GET['id'];
        $destricts=App::get("database")->selectData("destrict",$id);

      //$destricts=App::get("database")->selectAll("destrict");
        view("admin/EditDestrict",["destricts"=>$destricts]);
    }
function update(){
    $destricts=App::get("database")->updateData("destrict",[

    'name'=>$_POST['name'],

    ],$id=$_POST['id']);

    $destricts=App::get("database")->selectAll("destrict");

view("admin/destrict",["destricts"=>$destricts]);

}
function delete(){
    App::get("database")->deleteData("destrict",$id=$_GET['id']);
    $destricts=App::get("database")->selectAll("destrict");
    view("admin/destrict",["destricts"=>$destricts]);
}
function addDestrict(){
    view("admin/addDestrict");
}
function createDestrict(){
App::get("database")->insertAll("destrict", [
            'id'=>"",
            'name'=>$_POST['name'],
            'updated_at'=>timestamp(),
                //date('d/m/y H:i:s'),
        ]
    );
    $destricts=App::get("database")->selectAll("destrict");
    //view("admin/addTown",["destricts"=>$destricts]);
    view("admin/destrict",["destricts"=>$destricts]);
}
}