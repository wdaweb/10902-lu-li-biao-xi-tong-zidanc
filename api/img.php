<?php

include "../base.php";

$id=$_POST['id'];
$table=$_POST['table'];
$data=find($table,$id);
$data['text']=$_POST['text'];

if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);
    save($table,$data);
}

to("../admin.php?do=$table");
?>