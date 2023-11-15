<?php


class TownController
{
function index(){
    $towns=App::get("database")->selectAll("town");
    $destricts=App::get("database")->selectAll("destrict");
    //redirect("townlist");
    view('admin/townList',["towns"=>$towns],["destricts"=>$destricts]);
}

function show(){
    $destricts=App::get("database")->selectAll("destrict");
    view("admin/addTown",["destricts"=>$destricts]);
}

function create(){
     App::get("database")->insertAll("town", [
            'id'=>"",
            'name'=>$_POST['name'],
            'destrict_id'=>$_POST["type"],
            'updated_at'=>timestamp(),
            ]
    );
    $towns=App::get("database")->selectAll("town");
    redirect("townlist");
   // view("admin/townList",["towns"=>$towns]);
}
function edit(){
    $destricts=App::get("database")->selectAll("destrict");
    $towns=App::get("database")->selectData('town',$_GET['id']);
    view("admin/EditTown",["towns"=>$towns],["destricts"=>$destricts]);
}
function update(){
    $towns=App::get("database")->updateData("town",[

        'name'=>$_POST['name'],
        'destrict_id'=>$_POST['type'],
    ],$id=$_POST['id']);

    $towns=App::get("database")->selectAll("town");
    redirect("townlist");
    //view("admin/townList",["towns"=>$towns]);

}
function delete(){
    App::get("database")->deleteData("town",$id=$_GET['id']);
    $towns=App::get("database")->selectAll("town");
    redirect("townlist");
    //view("admin/townList",["towns"=>$towns]);
}

}