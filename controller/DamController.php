<?php


class DamController
{
    function index(){
        $dams=App::get("database")->selectAll('daminfo');
        $destricts=App::get("database")->selectAll("destrict");

        $towns=App::get("database")->selectAll("town");
        view("admin/damlist",["dams"=>$dams],["towns"=>$towns],["destricts"=>$destricts]);
    }
function show(){
    $towns=App::get("database")->selectAll("town");
    $destricts=App::get("database")->selectAll("destrict");
    view("admin/addDam",["destricts"=>$destricts],["towns"=>$towns]);
}
function edit(){
    $dams=App::get("database")->selectData("daminfo",$_GET['id']);

    $destricts=App::get("database")->selectAll("destrict");
    $towns=App::get("database")->selectAll("town");
    view("admin/editDam",["dams"=>$dams],["destricts"=>$destricts],["towns"=>$towns]);
}
function delete(){
    App::get("database")->deleteData("daminfo",$id=$_GET['id']);
    $dams=App::get("database")->selectAll("daminfo");
    $destricts=App::get("database")->selectAll("destrict");
    $towns=App::get("database")->selectAll("town");
    redirect("damlist");
    //view("admin/damlist",["dams"=>$dams],["destricts"=>$destricts],["towns"=>$towns]);
}
function create(){
    $temFile = $_FILES['image']['tmp_name'];
    $temName = $_FILES['image']['name'];
    $folderName="upload_img";
    $storeFolder = $folderName . '/';
    $img=$storeFolder.uniqid().$temName;

    function run($temFile, $img, $folderName)
    {

           if (!file_exists($folderName)){
               mkdir($folderName);
           }

            move_uploaded_file($temFile, $img);
      }
        run($temFile,$img,$folderName);

        // connect to the database
       App::get("database")->insertAll("daminfo",[

           'id'=>"",
           'name'=>$_POST['name'],
           'img'=>$img,
           'district_id'=>$_POST['destrict'],
           'town_id'=>$_POST['town'],
           'date'=>$_POST['date'],
           'mass'=>$_POST['mass'],
           'description'=>$_POST['desc'],
           'updated_at'=>timestamp(),

       ]);
       $dams=App::get("database")->selectAll('daminfo');
    $destricts=App::get("database")->selectAll("destrict");
    $towns=App::get("database")->selectAll("town");
    redirect("damlist");
 // header("Location:http://localhost:8000/damlist");

       //view("admin/damlist",["dams"=>$dams],["destricts"=>$destricts],["towns"=>$towns]);
    }

}