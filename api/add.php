<?php
include "../base.php";

$table=$_POST['table'];

if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);
}

switch($table){
    case "user":
      if(!empty($_POST['acc']) && !empty($_POST['pw']) && !empty($_POST['email'])){
          $data["acc"]=$_POST['acc'];
          $data["pw"]=$_POST['pw'];
          $data["email"]=$_POST['email'];
      }
    break;
    case "intro":
      if(!empty($_POST['intro'])){
          $data["intro"]=$_POST['intro'];
      }
    break;
    case "msg":
      if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['tel']) && !empty($_POST['email'])){
          $data['name']=$_POST['name'];
          $data['address']=$_POST['address'];
          $data['tel']=$_POST['tel'];
          $data['email']=$_POST['email'];
          $data['birthday']=$_POST['birthday'];
      }
    break;
    case "exp":
      if(!empty($_POST['jobfn']) && !empty($_POST['period']) && !empty($_POST['description'])){
          $data['jobfn']=$_POST['jobfn'];
          $data['period']=$_POST['period'];
          $data['description']=$_POST['description'];
      }
    break;
    case "skill":
      if(!empty($_POST['skill']) && !empty($_POST['type'])){
          $data['skill']=$_POST['skill'];
          $data['type']=$_POST['type'];
      }
    break;
    case "c_resume":
      if(!empty($_POST['intro'])){
          $data["intro"]=$_POST['intro'];
      }
    break;
    default:
      
    if(!empty($_POST['text'])){
        $data['text']=$_POST['text'];
    }  
}




save($table,$data);
to("../admin.php?do=$table");
?>