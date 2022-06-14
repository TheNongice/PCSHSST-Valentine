<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #ac7625;">
  <div class="container-sm">
    <a class="navbar-brand" href="/">
        <img src="./img/logo.svg" class="logo" style="width: 10vh;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item d-flex justify-content-center">
            <?php
            if(isset($error_temp)){
              if($error_temp <= 0){
                  echo '<a class="nav-link" href="/request.php"><i class="fab fa-wpforms"></i> แบบฟอร์ม</a>';
              }
            }else{
                echo '<a class="nav-link" href="/request.php"><i class="fab fa-wpforms"></i> แบบฟอร์ม</a>';
            }
            ?>
        </li>
        <li class="nav-item d-flex justify-content-center">
            <?php
            if(isset($error_temp)){
              if($error_temp <= 0){
                  echo '<a class="nav-link" href="/check.php"><i class="fas fa-eye"></i> ตรวจสอบสถานะ</a>';
              }
            }else{
                echo '<a class="nav-link" href="/check.php"><i class="fas fa-eye"></i> ตรวจสอบสถานะ</a>';
            }
            ?>
        </li>
        <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="/faq.html"><i class="fas fa-question"></i> คำถามที่พบบ่อย</a>
        </li>
        <li class="nav-item d-flex justify-content-center">
            <a class="nav-link" href="/authen.php"><i class="fas fa-user-cog"></i> สำหรับเจ้าหน้าที่</a>
        </li>
      </ul>
    </div>
  </div>
</nav>