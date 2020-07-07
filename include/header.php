
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

                      <a class="dropdown-item" href="#" onclick="">工作經歷</a>

                      <a class="dropdown-item" href="#" onclick="">學歷資料</a>
                      
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
              
                <?php
                  if(empty($_SESSION)){
                      echo "<a class='nav-link' href='./index.php'><i class='fas fa-sign-in-alt mr-2'></i>登入</a>";
                  }else{
                      echo "<a class='nav-link' href='           '><i class='fas fa-sign-out-alt mr-2'></i>登出</a>";
                  }
                ?>
              
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </nav>
</header>