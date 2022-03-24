<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #B66E01;">
  <div class="container-sm">
    <a class="navbar-brand" href="/">
      <img src="../../img/logo.svg" alt="" style="width: 10vh;">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
            
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-cog"></i> ผู้ใช้: <?php echo $_SESSION['Username']; ?></a>
            <ul class="dropdown-menu">
              <?php if($_SESSION['Roles']=="Admin"){echo '<li><a class="dropdown-item" href="./monitor.php"><i class="fas fa-bug"></i> เมนูเฉพาะกิจ</a></li>';}?>            
              <li><a class="dropdown-item" href="./changepwd.php"><i class="fas fa-key"></i> เปลี่ยนรหัสผ่าน</a></li><hr> 
              <li><a class="dropdown-item" href="./logout.php" style="color: red;"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
            </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>