<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>履歷表管理後台</title>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- customCSS -->
    <link rel="stylesheet" href="./css/custom.css">
    
    <style>
    .card {
        width: 25rem;
    }
    </style>
</head>
<body class="bg-light">
<?php
    include_once "./include/header.php";
?>

<section class="w-100 d-flex flex-column align-items-center justify-content-center" style="height:90vh;">
    <div>
        <p>履歷表管理後台，請在下方登入。</p>
    </div>


<!-- 登入區域 -->
<form action="./api/login.php" method="post" class="form-group">
    <div class="container d-flex align-items-center">
        
        <div class="col-12 card">
            <div class="card-body text-center">
                <br>
                    <p>帳號：<input type="text" name="acct" id="acct" class="myform-control"></p>
                    <p>密碼：<input type="password" name="psw" id="psw" class="myform-control"></p>
                    <input type="submit" value="登入" class="btn btn-outline-secondary">
                    <input type="reset" value="重置" class="btn btn-outline-secondary">
                <br><br>
                <a href="reg.html">註冊</a>
                <!-- 忘記密碼功能時間夠要加上去 <a href="#">忘記密碼</a> -->
            </div>
        </div>
    </div>
        
            
        
</form>
</section>


</body>
</html>

