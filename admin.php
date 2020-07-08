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
    <title>Zidan-Backend Management</title>
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
    <!-- custom JS -->
    <script src="./js/js.js"></script>
    
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
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button"><i class="fas fa-user mr-2"></i>關於我</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#" onclick="">個人資料</a>
                    
                      <a class="dropdown-item" href="#" onclick="">自我簡介</a>
                    
                      <a class="dropdown-item" href="#" onclick="">工作技能</a>

                      <a class="dropdown-item" href="#" onclick="">工作經歷</a>

                      <a class="dropdown-item" href="#" onclick="">學歷資料</a>
                      
                    </div>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#"><i class="fas fa-people-arrows mr-2"></i>獵職條件</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#"><i class="fas fa-address-card mr-2"></i>履歷</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#"><i class="fas fa-address-book mr-2"></i>作品集</a>
              </li>
              <li class="nav-item myli-sm myliclear-md">
                <a class="nav-link" href="#"><i class="fas fa-images mr-2"></i>圖管理</a>
              </li>
            </ul>
          </li>

          <li class="myright-5">
            <ul style="list-style: none;">
              <li class="nav-item">
                <a class="nav-link" href="index.php" style="text-decoration:none;"><i class="fas fa-sign-in-alt mr-2"></i>登出</a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>


  <!-- pop up window -->
  <div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"	onclick="cl(&#39;#cover&#39;)">╳</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>

    <section class="container pt-5 mt-5">
      <article class="d-flex flex-column justify-content-around">
        <div><img src="./img/<?=find('photo',['sh'=>1])['file']?>" style="width:200px;height:200px;">
            <div style="display:inline-block;width:65%;" class='mx-4'><?=find('intro',['sh'=>1])['intro'];?></div>
        </div>
      </article>
    </section>

    
    <section class="container pt-5">
        <artical class="row">
          <aside class="d-flex flex-column align-items-center" style="width:230px;">
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=intro" class="text-white" style="text-decoration:none;">基本簡介</a>
            </div>  
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=msg" class="text-white" style="text-decoration:none;">獵職條件</a>
            </div>  
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=skill" class="text-white" style="text-decoration:none;">工作技能</a>
            </div>  
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=exp" class="text-white" style="text-decoration:none;">工作經歷</a>
            </div>  
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=photo" class="text-white" style="text-decoration:none;">個人相片</a>
            </div>  
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=item" class="text-white" style="text-decoration:none;">作品集</a>
            </div>  
            <div class="btn btn-secondary my-1" style="width:200px;height:2.5rem;font-size:1rem;">
              <a href="?do=user" class="text-white" style="text-decoration:none;">帳號管理</a>
            </div>
          </aside>  
            

          <aside class="card border-secondary mb-3 mt-5 col-12 col-sm-9 col-md-9">   <!-- style="object-fit:cover"; 圖片等比例充滿版面-->
            <div class="col-md-8 my-3 mx-3">
                    <?php
                        $do=(!empty($_GET['do']))?$_GET['do']:"photo";
                        $path="./backend/".$do.".php";
                      
                        if(file_exists($path)){
                          include $path;
                        }else{
                          include "./backend/photo.php";
                        }
                    ?>
            </div>
          </aside>
            
        </artical>
    </section>
    

    

<script>
  document.getElementsByTagName('img').ondragstart = function() {
     return false;
    };

</script>

</body>
</html>