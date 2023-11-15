<?php


class EndUserController
{
    function route(){
        redirect("home");
    }
    function home(){

        $dams=App::get("database")->selectAll('daminfo');
        $destricts=App::get("database")->selectAll("destrict");
        $towns=App::get("database")->selectAll("town");
        $news=App::get("database")->selectAll("post");
        view("user/index",["dams"=>$dams],["towns"=>$towns],["destricts"=>$destricts],["posts"=>$news]);
    }
    function search(){
        $destricts=App::get("database")->selectAll("destrict");
        $dams=App::get("database")->selectAll('daminfo');

        if($_POST['search']) {
            $searchs = App::get("database")->searchData("destrict", $_POST['search']);

            foreach ($dams as $dam) {
                    foreach ($searchs as $search) {
                        $SelectDams = App::get("database")->Data("daminfo", $search->id);
                    }

                }

            if (!isset($SelectDams)){
                $error[]="error";
                $news=App::get("database")->selectAll("post");
                view("user/index",["errors"=>$error],["posts"=>$news]);
            }
            else
                view("user/index",["selectDams"=>$SelectDams],["destricts"=>$destricts]);
        } else
       redirect("home");
    }
    function detail(){
        $dams=App::get("database")->selectData('daminfo',$_GET['id']);
        $destricts=App::get("database")->selectAll("destrict");
        $towns=App::get("database")->selectAll("town");
        view("user/detail",["dams"=>$dams],["towns"=>$towns],["destricts"=>$destricts]);
    }
    function message(){
        $name=$_POST['name'];
        $title=$_POST['title'];
        $email=$_POST['email'];
        $description=$_POST['description'];
        $messages=App::get("database")->insertAll('message',[
           'id'=>"",
           'title'=>$title,
           'name'=>$name,
            'email'=>$email,
            'description'=>$description,
            'updated_at'=>timestamp()
        ]);
        redirect("home");
}
function messageDetail(){
        $id=$_GET["id"];
        $messages=App::get("database")->selectData("message",$id);
        view("admin/detailMessage",["messages"=>$messages]);
}
function detailnew(){
        $id=$_GET['id'];
        $posts=App::get("database")->selectData("post",$id);
        view("user/newdetail",['posts'=>$posts]);
}
function about(){
        view("user/about");
}
}