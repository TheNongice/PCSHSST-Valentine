<?php
session_start();
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ส่งรักส่งยิ้ม :: Staff</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo.svg" type="image/svg">
    <link rel="stylesheet" href="../style.css">
    <link rel="manifest" href="../mainfest/manifest.webmanifest">
</head>
<body>
    <!--Navbar-->
    <?php include('./include/navbar.php'); ?>
    <?php 
    if((isset($_SESSION['msg_monitor'])) && $_SESSION['nofi_tell_pwd'] != 1){
        echo $_SESSION['msg_monitor'];
        $_SESSION['nofi_tell_pwd'] = 1;
    }
    ?>
    <div class="container-sm" style="padding-top: 1rem;">
        <div class="card">
            <div class="card-header text-white" style="background-color: #B66E01;">
                <i class="fas fa-user-cog"></i> เปลี่ยนรหัสผ่าน
            </div>
            <div class="card-body">
                <form action="../api/changepwd.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="Password" id="Password" placeholder=" " required minlength="8">
                        <label for="floatingInput"><i class="fas fa-key"></i> รหัสผ่าน: </label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="PasswordVerify" id="PasswordVerify" placeholder=" " required minlength="8">
                        <label for="floatingPassword"><i class="fas fa-key"></i> ยืนยันรหัสผ่าน: </label>
                    </div>
                    <center style="padding-top: 0.4rem;"><button class="btn btn-lg btn-success" type="submit">บันทึกข้อมูล</button></center>
                </form>
            </div>
        </div>
    </div>
</body>
</html>