<?php
include "../base.php";

$data['acc']=$_POST['acc'];
$data['pw']=$_POST['pw'];
$data['email']=$_POST['email'];
$data['name']=$_POST['name '];
$data['residence']=$_POST['residence'];
echo save("user",$data);

?>