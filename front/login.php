<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Zidan-Web Resume</title>
    <link rel="stylesheet" href="../plugins/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- customCSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- JQ -->
    <script src="../plugins/jquery-3.5.1.min.js"></script>
    <style>
    .card {
        width: 25rem;
    }
    
    </style>

</head>
<body class="bg-light">
<?php
    include_once "../include/headerbend.php";
?>

<section class="w-100 d-flex flex-column align-items-center justify-content-center" style="height:90vh;">
    <div>
        <p>履歷表管理後台，請在下方登入或註冊。</p>
    </div>


<!-- 登入區域 -->
<form action="" method="post" class="form-group" style="width:600px;">
    <div class="container">
        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">會員登入</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile">註冊會員</a>
          </li>
        </ul>

        <div class="tab-content col-12 card" style="width:600px; height:400px;">
            
            <div class="tab-pane card-body text-center active" id="home">
                    <!-- <div class=""> -->
                    <form action="" method="post">
                        <div style="width:100%;" class="">
                            <br>
                            <p>帳號：<input type="text" name="acc" id="acc" class="myform-control"></p>
                            <p>密碼：<input type="password" name="pw" id="pw" class="myform-control"></p>
                            <input type="submit" value="登入" id="login" class="btn btn-outline-secondary">
                            <input type="reset" value="重置" class="btn btn-outline-secondary">
                            <br><br>
                        </div>
                    </form>
                    <!-- </div> -->
            </div>

                    
                
            <div class="tab-pane card-body" id="profile">
                    <!-- <div class=""> -->
                    <form action="" method="post">
                        <div style="text-align:right; padding-right:50px;">
                            <br>
                            <p>登入帳號：<input type="text" name="acc" id="acc2" class="myform-control" placeholder="請輸入英數字元，勿超過32個字元" size="40px"></p>
                            <p>登入密碼：<input type="password" name="pw" id="pw2" class="myform-control" placeholder="請輸入英數字元，勿超過32個字元" size="40px"></p>
                            <p>再次確認密碼：<input type="password" name="pw2" id="pw3" class="myform-control" placeholder="請輸入同上字元" size="40px"></p>
                            <p>姓名：<input type="text" name="name" id="name" class="myform-control" size="40px"></p>
                            <p>電子郵件：<input type="text" name="email" id="email" class="myform-control" placeholder="如「xxx@xxmail.com」" size="40px"></p>
                            <p>居住縣市：<input type="text" name="residence" id="residence" class="myform-control" placeholder="如「新北市」,「桃園市」" size="40px"></p>
                        </div>
                            
                            <div class="text-center">
                                <input type="submit" value="註冊" id="reg" class="btn btn-outline-secondary">
                                <input type="reset" value="重置" class="btn btn-outline-secondary">
                            </div>
                    </form>
                    <!-- </div> -->
            </div>
            
        </div>
    </div>    


            
        
</form>
</section>


<script>
    $("#login").on("click",function(){
        let acc = $("#acc").val();
        let pw = $("#pw").val();
        $.post("./api/chkacc.php",{acc},function(res){
            if(res==='1'){
                $.post("./api/chkpw.php",{acc,pw},function(res){
                    if(res==='1'){
                        location.href="admin.php";
                    }else{
                        alert("帳號或密碼有誤，請重新輸入");
                    }
                })
            }else{
                alert("無此帳號，請輸入正確的帳號");
            }
        }) 
    })


$("#reg").on("click",function(){
    let acc=$("#acc2").val()
    let pw=$("#pw2").val()
    let pw2=$("#pw3").val()
    let email=$("#email").val()
    let name=$("#name").val()
    let residence=$("#residence").val()
    
if(acc=="" || pw=="" || pw2=="" ||email=="" || residence=""){
    alert("不可空白")
}else{
    $.post("./api/chkacc.php",{acc},function(status){
        
            if(status=="1"){
                alert("帳號重複")
            }else{

                if(pw==pw2){
                    
                    $.post("./api/reg.php",{acc,pw,email},function(status){
                        if(status=="1"){
                            alert("恭喜，歡迎加入")
                            location.href="index.php";
                        }else{
                            console.log(status)
                        }
                    })

                }else{
                    alert("密碼錯誤")
                }
            }
        })
    }
})



</script>

</body>
</html>

