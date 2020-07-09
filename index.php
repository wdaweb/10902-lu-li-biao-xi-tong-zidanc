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
                	    <p class="card-text">繪製2D／3D模具設計圖、產品外型設計、曲面、實體3D軟體操作、繪圖工具與軟體操作、電腦基礎動畫設計、專案溝通╱整合管理</p>
                	</div>
                  <div class="vline"></div>
                	<div class="card-body text-secondary col-12 col-md-3">
                	    <h5 class="card-title">Visual Design/ UI UX</h5>
                	    <p class="card-text">使用者介面設計、產品包裝設計、設計印刷基本認知、各式封面設計、色彩應用繪製、素材辨識與處理、視覺設計相關知識、電腦排版設計、電腦繪圖軟體操作、產品介紹及解說銷售</p>
                	</div>
                  <div class="vline"></div>
                	<div class="card-body text-secondary col-12 col-md-3">
                	    <h5 class="card-title">Web Design</h5>
                	    <p class="card-text mb-1">HTML, CSS, Javascript, JQuery</p>
                      <p class="card-text mb-1">RWD, Bootstrap,</p>
                      <p class="card-text mb-1">PHP, MySQL,</p>
                      <p class="card-text mb-1">Git - File Version Management</p>
                	</div>
                </aside>
          </div>
        </artical>
    </section>
    
    <section class="container w-100">
        <artical class="row justify-content-between">
          <div class="card border-secondary mb-3 mt-3 col-12 col-md-12">   <!-- style="max-width: XXrem"; -->
              <div class="card-header">工作經歷 <small>＆</small> 相關活動</div>
                <div class="card-body text-secondary">
                    <div class="d-flex justify-content-between flex-wrap mb-2">
                    	<span class="font-weight-bold mytitle">(接案)工業設計</span><span class="text-right mt-2">2019/9~2019/11</span>
                    </div>
                    <p class="card-text">與上市公司雷虎集團合作，參與電競PUBG(絕地求生)遙控模型車製作。期間參與車體外觀3D塑膠配件的機構設計與建模、資料蒐集分析、三視圖繪製、俄羅斯軍卡3D車殼造型正向建模，並密集與該專案窗口做可行性討論、模型修改、提供基本排模圖等設計諮詢。</p>
                </div>
                <div class="card-body text-secondary">
                    <div class="d-flex justify-content-between flex-wrap mb-2">
                    	<span class="font-weight-bold mytitle">工業設計師</span><span class="text-right mt-2">2016/12~2019/9</span>
                    </div>
                    <p class="card-text">視覺規劃、圖像化組裝說明書，並提供基礎CMF、噴漆、包裝設計。研調競爭者的定位，做出市場區隔並提供未來趨勢的電繪造型提案，或者根據客戶明確指出的風格趨向作提案設計。正向A級曲面建模、3D逆向工程建模。兼顧車殼及塑膠配件的尺寸搭配，建構車殼模具。並與廠商密切配合後續打樣、問題解決。兼顧製造生產與玩家對產品外觀、造形、色彩、結構、功能及安全性等方面要求條件下，從事大量生產產品之設計及開發。</p>
                </div>
                <div class="card-body text-secondary">
                    <div class="d-flex justify-content-between flex-wrap mb-2">
                    	<span class="font-weight-bold mytitle">專案管理</span><span class="text-right mt-2">2015/8~2016/11</span>
                    </div>
                    <p class="card-text">研究客戶開發方向。整合開發文件、電子規格等。執行新產品開發專案之規劃、執行、設計及發展進度掌控、成本控制及結案程序。協助各部門及廠處推動專案。協調新產品導入量產與上市。進行客戶溝通及訴願處理。</p>
                </div>
                <div class="card-body text-secondary">
                    <div class="d-flex justify-content-between flex-wrap mb-2">
                    	<span class="font-weight-bold mytitle">立體造型工業設計師</span><span class="text-right mt-2">2013/8~2015/8</span>
                    </div>
                    <p class="card-text">研調競爭對手的定位，做出市場區隔的電繪造型提案，或者根據客戶明確指出的風格趨向作提案設計。正向A級曲面建模、3D逆向工程建模。兼顧車殼及塑膠配件的尺寸搭配，建構車殼模具。並與廠商密切配合後續打樣、問題解決。兼顧製造生產與玩家對產品外觀、造形、色彩、結構、功能及安全性等方面要求條件下，從事大量生產產品之設計及開發。</p>
                </div>
                <div class="card-body text-secondary">
                    <div class="d-flex justify-content-between flex-wrap mb-2">
                    	<span class="font-weight-bold mytitle">視覺傳達設計師</span><span class="text-right mt-2">2012/6~2013/8</span>
                    </div>
                    <p class="card-text">從事專業遙控模型車的產品視覺包裝、各式車殼貼紙、內襯結構設計、圖像化組裝說明書等設計工作，以強化商品的視覺形象。</p>
                </div>
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
                    <img src="./img/kyosho_scorpion.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                      
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kyosho_scorpion.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                      
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kyosho_scorpion.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    </div>
                  </div>
                  
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kyosho_scorpion.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                    </div>
                  </div>
                      
                  <div class="card mb-4" style="min-width:300px;">
                    <img src="./img/kyosho_scorpion.jpg" draggable="false" ondragstart="return false;" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
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