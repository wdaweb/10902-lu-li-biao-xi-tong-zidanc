<?php
include "../base.php";

$table=$_POST['table'];

foreach ($_POST['id'] as $key => $id) {
    if(!empty($_POST['del']) && in_array($id,$_POST['del'])){
        del($table,$id);
    }else{
        $data=find($table,$id);

        switch($table){
            case "photo":
               
                $data['text']=$_POST['text'][$key];
                $data['sh']=($id==$_POST['sh'])?1:0;
            break;
            case "user":
                $data['acc']=$_POST['acc'][$key];
                $data['pw']=$_POST['pw'][$key];    
                $data['email']=$_POST['email'][$key];               
            break;
            case "msg":
                $data['name']=$_POST['name'][$key];
                $data['address']=$_POST['address'][$key];
                $data['tel']=$_POST['tel'][$key];
                $data['email']=$_POST['email'][$key];
                $data['birthday']=$_POST['birthday'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;                  
            break;
            case "intro":
                $data['intro']=$_POST['intro'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;                  
            break;
            case "exp":
                $data['jobfn']=$_POST['jobfn'][$key];
                $data['period']=$_POST['period'][$key];
                $data['description']=$_POST['description'][$key];
                $data['id']=$_POST['id'][$key];                  
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;                  
            break;
            default:
                
                $data['text']=$_POST['text'][$key];
                $data['sh']=(in_array($id,$_POST['sh']))?1:0;
        }
        save($table,$data);
    }
   
}

to("../admin.php?do=$table");
?>