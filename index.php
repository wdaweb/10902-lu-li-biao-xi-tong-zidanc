<?php
include_once "base.php";
?>

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
  <header class="bg-info fixed-top">
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
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"><i class="fas fa-user mr-2"></i>關於我</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#intro" onclick="">個人資料</a>
                    
                      <a class="dropdown-item" href="#intro" onclick="">自我簡介</a>
                    
                      <a class="dropdown-item" href="#" onclick="">工作技能</a>

                      <a class="dropdown-item" href="#" onclick="">工作經歷</a>

                      <a class="dropdown-item" href="#" onclick="">學歷資料</a>
                      
                    </div>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#jobreq"><i class="fas fa-people-arrows mr-2"></i>獵職條件</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#"><i class="fas fa-address-card mr-2"></i>履歷</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#zidanportfolio"><i class="fas fa-address-book mr-2"></i>作品集</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#"><i class="fas fa-images mr-2"></i>圖管理</a>
              </li>
            </ul>
          </li>

          <li class="myright-5">
            <ul style="list-style: none;">
              <li class="nav-item">
                <a class="nav-link" href="./front/login.php"><i class="fas fa-sign-in-alt mr-2"></i>登入</a>
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

          <div class="card border-secondary mb-3 mt-5 col-12 col-md-3" id="intro">   <!-- style="max-width: XXrem"; -->
              <div class="card-header">個人資料</div>
                <div class="card-body text-secondary">
                  <span class=""><img src="./img/<?=find('photo',['sh'=>1])['file'];?>" draggable="false" ondragstart="return false"; class="rounded-circle" style="width:115px; height:115px;"></span>
                    <h5 class="card-title">簡志瀚</h5>
                    <p class="card-text">Taipei City, Taiwan</p>
                    <!-- <div id="jobreq"></div>     -->
                </div>
          </div>

          <div class="card border-secondary mb-3 mt-5 col-12 col-md-8" id="intro">
              <div class="card-header">基本簡介</div>
                <div class="card-body text-secondary">
<style>
  .div p:nth-child(1){
    font-size: 1.6rem;
  }
</style>
          <div class="div">
                  <?php
                    $rows=all('intro',['sh'=>1]);
                    foreach($rows as $value){
                  ?>
                   
          <p class="card-text"><?=$value['intro'];?></p>
                  
                  <?php
                  }
                  ?>

          </div>
                </div>
                <div class="card-body">
                  <a class="pr-2" href="" style="font-size:2rem; color:rgb(0,255,230);"><i class="fab fa-github"></i></a>
                  <a class="pr-2" href="" style="font-size:2rem; color:rgb(0,255,230);"><i class="fas fa-at"></i></a>
                  <a class="pr-2" href="" style="font-size:2rem; color:rgb(0,255,230);"><i class="fab fa-codepen"></i></a>
                </div>
          </div>
        </artical>
    </section>
    

    <section class="container w-100">
        <artical class="row justify-content-between">
          <div class="card border-secondary mb-3 mt-3 col-12 col-md-12">   <!-- style="max-width: XXrem"; -->
              <div class="card-header myhighlight text-white font-weight-bold bd-radius-clear mb-4">獵職條件</div>
                <table class="mb-3">
                  <tr>
                    <td class="text-muted py-1 mypl-20px">希望性質</td>
                    <td class="text-muted py-1">全職 / 對遠端工作有興趣 / 網頁前端工程師 / UI/UX設計師</td>
                  </tr>
                  <tr>
                    <td class="text-muted py-1 mypl-20px">上班時段</td>
                    <td class="text-muted py-1">日班</td>
                  </tr>
                  <tr>
                    <td class="text-muted py-1 mypl-20px">可上班日</td>
                    <td class="text-muted py-1">錄取後一週可上班</td>
                  </tr>
                  <tr>
                    <td class="text-muted py-1 mypl-20px">希望地點</td>
                    <td class="text-muted py-1">台北市、新北市、桃園市蘆竹區中壢區</td>
                  </tr>
                  <tr>
                    <td class="text-muted py-1 mypl-20px">希望職稱</td>
                    <td class="text-muted py-1">網頁前端工程師、UI/UX設計師</td>
                  </tr>
                  <tr>
                    <td class="text-muted py-1 mypl-20px">希望待遇</td>
                    <td class="text-muted py-1">面議</td>
                  </tr>
                </table>
          </div>
        </artical>
    </section>


    <section class="container w-100">
        <artical class="row justify-content-between">
          <div class="card border-secondary mb-3 mt-3 col-12 col-md-12">   <!-- style="max-width: XXrem"; -->
              <div class="card-header">工作技能</div>
                <aside class="d-flex justify-content-between flex-wrap">
                	<div class="card-body text-secondary col-12 col-md-3">
                	    <h5 class="card-title">Industrial Design</h5>
          <?php
                $rows=all('skill',['sh'=>1,'type'=>1]);
                foreach($rows as $value){
          ?>  
                      <p class="card-text"><?=$value['skill'];?></p>
          <?php
          }
          ?>
                	</div>
                  <div class="vline"></div>
                	<div class="card-body text-secondary col-12 col-md-3">
                	    <h5 class="card-title">Visual Design/ UI UX</h5>
          <?php
                $rows=all('skill',['sh'=>1,'type'=>2]);
                foreach($rows as $value){
          ?>              
                      <p class="card-text"><?=$value['skill'];?></p>
          <?php
          }
          ?>
                	</div>
                  <div class="vline"></div>
                	<div class="card-body text-secondary col-12 col-md-3">
                      <h5 class="card-title">Web Design</h5>
          <?php
                $rows=all('skill',['sh'=>1,'type'=>3]);
                foreach($rows as $value){
          ?>  
                	    <p class="card-text mb-1"><?=$value['skill'];?></p>
                      
          <?php
          }
          ?>
                	</div>
                </aside>
          </div>
        </artical>
    </section>
    
    <section class="container w-100">
        <artical class="row justify-content-between">
          <div class="card border-secondary mb-3 mt-3 col-12 col-md-12">   <!-- style="max-width: XXrem"; -->
              <div class="card-header">工作經歷 <small>＆</small> 相關活動</div>
          
          <?php
                $rows=all('exp',['sh'=>1]);
                foreach($rows as $value){
          ?>  

                <div class="card-body text-secondary">
                    <div class="d-flex justify-content-between flex-wrap mb-2">
                    	<span class="font-weight-bold mytitle"><?=$value['jobfn'];?></span><span class="text-right mt-2"><?=$value['period'];?></span>
                    </div>
                    <p class="card-text"><?=$value['description'];?></p>
                </div>
          
          <?php
          }
          ?>      

          </div>
        </artical>
    </section>


    <section class="container w-100" id="zidanportfolio">
        <artical class="row justify-content-between">
          <div class="card border-secondary mb-5 mt-3 col-12 col-md-12">   <!-- style="object-fit:cover"; 圖片等比例充滿版面-->
              <div class="card-header myhighlight text-white font-weight-bold bd-radius-clear">作品集</div>
                
              <div class="" style="margin: 40px 20px 0px 20px;">
                            
                <div class="card-deck">
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/invoice.jpg" draggable="false" ondragstart="return false;" class="card-img-top" style="width:404px; height:316px;">
                    <div class="card-body">
                      <h5 class="card-title">發票對獎系統</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>

                <div class="card-deck">
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/ana_clock.jpg" draggable="false" ondragstart="return false;" class="card-img-top" style="width:404px; height:316px;">
                    <div class="card-body">
                      <h5 class="card-title">寧靜時計</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>

                <div class="card-deck">
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kyosho_scorpion.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">日本傳奇再現</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                      
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/pubg.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">PUBG擬真遙控俄羅斯軍卡</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                  
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kraken_stryker.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">美國大型遙控領導品牌突擊1/10市場</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>

                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/manual.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">美國大型遙控領導品牌KrakenRC LSE KIT完美符合消費者使用經驗手冊</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                  </div>
                  
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kyosho_madbug.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">日本京商與德國福斯首次合作</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                  </div>

                  
                     
                      
                </div>
                
              </div>
                    
                
          </div>
        </artical>
        <!-- background-blend-mode: color-burn;
            background-position: center;
            background-size: cover;
            background-attachment: fixed; -->
    </section>



    
<!-- 準備include footer   -->
  <footer class="bg-dark text-muted text-center py-3 position-relative">
    <article class="bg-dark py-4 text-center">


    </article>
    
    <small>Personal Website - Online Resume System<br>
      Copyright &copy; <a class="text-warning" href="#" target="_blank">Zidan Chien</a>. All Rights Reserved
    </small>
    <span class="pinefixed pine-xs"><img src="./img/pine_sm.png" draggable="false" ondragstart="return false;"></span>
    <a href="#" class="btn btn-info bobofixed"><i class="fas fa-arrow-up text-light"></i></a>
  </footer>

<script>
  document.getElementsByTagName('img').ondragstart = function() {
     return false;
    };
</script>

</body>
</html>