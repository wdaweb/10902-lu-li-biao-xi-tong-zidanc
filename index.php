<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Zidan-Web Resume</title>
    <link rel="stylesheet" href="./plugins/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <!-- customCSS -->
    <link rel="stylesheet" href="./css/custom.css">
    <!-- JQ -->
    <script src="./plugins/jquery-3.5.1.min.js"></script>
    
</head>
<body>
<!-- 準備include header-->
  <header class="bg-dark fixed-top">
    <nav class="navbar navbar-expand-md navbar-dark container">
      <a class="navbar-brand" href="./index.php">ZidanResume</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#zinav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="zinav">
        <ul class="navbar-nav" style="width:100%;">
          
          <li class="myleft-5">
            <ul class="myclear-le mycol-sm">
              <li class="nav-item myli-sm myliclear-md dropright">
                <a class="nav-link dropdown-toggle" href="#lokiroom" data-toggle="dropdown" role="button"><i class="fas fa-user mr-2"></i>關於我</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" onclick="">個人資料</a>
                    
                      <a class="dropdown-item" href="#" onclick="">自我簡介</a>
                    
                      <a class="dropdown-item" href="#" onclick="">工作技能</a>
                    </div>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#lokifacility"><i class="fas fa-people-arrows mr-2"></i>獵職條件</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#lokifood"><i class="fas fa-address-card mr-2"></i>履歷</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#lokifood"><i class="fas fa-address-book mr-2"></i>作品集</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#lokitrans"><i class="fas fa-images mr-2"></i>圖管理</a>
              </li>
            </ul>
          </li>

          <li class="myright-5">
            <ul style="list-style: none;">
              <li class="nav-item">
                <a class="nav-link" href="./login.php"><i class="fas fa-sign-in-alt mr-2"></i>登入</a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>



<!-- Main section -->

    <section class="container w-100 pt-5">
        <artical class="row justify-content-between">

          <div class="card border-secondary mb-3 mt-5 col-12 col-md-3">   <!-- style="max-width: XXrem"; -->
              <div class="card-header">個人資料</div>
                <div class="card-body text-secondary">
                  <span class=""><img src="./img/personal.jpg" draggable="false" ondragstart="return false;"></span>
                    <h5 class="card-title">簡志瀚</h5>
                    <p class="card-text">Taipei City, Taiwan</p>
                </div>
          </div>

          <div class="card border-secondary mb-3 mt-5 col-12 col-md-8">
              <div class="card-header">基本簡介</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">secondary card title</h5>
                    <p class="card-text">有5年工業設計師及1.5年專案管理能力，能與客戶直接溝通並提供網頁、工業、商業、平面設計的整合服務，並且具有手繪能力，達到客戶所需質感。</p>
                </div>
          </div>
        </artical>
    </section>
    
    <section class="container w-100">
        <artical class="row justify-content-between">
          <div class="card border-secondary mb-3 mt-3 col-12 col-md-12">   <!-- style="max-width: XXrem"; -->
              <div class="card-header">工作技能</div>
                <div class="card-body text-secondary">
                    <h5 class="card-title">third card title</h5>
                    <p class="card-text">繪製2D／3D模具設計圖、產品外型設計、使用者介面設計、意外事故防範與急救、產品包裝設計、設計印刷基本認知、各式封面設計、色彩應用繪製、素材辨識與處理、視覺設計相關知識、電腦排版設計、電腦繪圖軟體操作、繪圖工具與軟體操作、電腦動畫設計、行程規劃業務、產品介紹及解說銷售、專案溝通╱整合管理、文書處理軟體操作、種植栽培能力</p>
                </div>
          </div>
        </artical>
    </section>



    
<!-- 準備include footer   -->
  <footer class="bg-dark text-muted text-center py-3">
    <article class="bg-dark py-4 text-center">


    </article>
    
    <small>Personal Website - Online Resume System<br>
      Copyright &copy; <a class="text-warning" href="#" target="_blank">Zidan Chien</a>. All Rights Reserved
    </small>
    <span class="pinefixed pine-xs"><img src="./include/pine_sm.png" draggable="false" ondragstart="return false;"></span>
    <a href="#lokislider" class="btn btn-info bobofixed"><i class="fas fa-arrow-up text-light"></i></a>
  </footer>

<script>
  document.getElementsByTagName('img').ondragstart = function() {
     return false;
    };
</script>

</body>
</html>