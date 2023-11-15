<?php


class AdminController
{

    function postshow(){
        $posts=App::get("database")->selectAll("post");
        view("admin/newsLists",["posts"=>$posts]);
    }
    function news(){
        view("admin/addNews");
    }
    function upload(){
        $title=$_POST['title'];
        $description=$_POST['desc'];
        $posts=App::get("database")->insertAll("post",[
            'id'=>'',
            'title'=>$title,
            'description'=>$description,
            'updated_at'=>timestamp()
        ]);
        redirect("post");
    }
function delete(){
       $id=$_GET['id'];
       App::get("database")->deleteData("post",$id);
       redirect("post");
}
function detail(){
    $id=$_GET['id'];
    $posts=App::get("database")->selectData("post",$id);
    view('admin/EditNews',["posts"=>$posts]);
}
function update(){
        $id=$_POST['id'];
        $title=$_POST['title'];
        $desc=$_POST['desc'];
        $posts=App::get("database")->updateData("post",[
            "title"=>$title,
            "description"=>$desc,
        ],$id);
        redirect("post");
}
function reply(){
$id=$_POST['id'];
$reply=$_POST['reply'];
    $messages=App::get("database")->selectData("message",$id);
    foreach ($messages as $message){
        //dd(mail($message->email,"Reply From MOALI","$reply"));
    }

    $to_email = $message->email;
    $subject = $message->title;
    //$body = "Hello,nn It is a testing email sent by PHP Script";
    $headers = "From: sender\'s email";

    if (mail($to_email, $subject, $reply, $headers)) {
        echo "Email successfully sent to $to_email...";
        $uMessage=App::get("database")->updateData("message",[
            'replied'=>1,
        ],$id);
    }
    else {
        echo "Email sending failed...";
    }

  redirect("admin");

}
function singin(){
    $email=$_POST['email'];
    $password=$_POST['password'];
$user=App::get("database")->insertAll("user",[
   'email'=>$email,
    'password'=>hash('md5',$password),
    'updated_at'=>timestamp(),
]);
redirect("admin");
}
function loginview(){
        view("admin/login");
}
function login()
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $newpwd = hash('md5', $password);

    $admin = App::get("database")->checkData("user", $email, $newpwd);
    if ($admin) {
        if (!isset($_SESSION["user"])){
            session_start();
            $_SESSION["user"]=$admin;
            redirect("admin");
        }

    }
    else {
        $error[] = "error";
        view("admin/login", ["errors" => $error]);


    }
}
function logout(){
        session_destroy();
        redirect("login");
}
}