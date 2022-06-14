<?php
error_reporting(0);
include('./config.php');
session_start();
if(isset($_SESSION['Login'])){
    header('Location: /admin');
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: เจ้าหน้าที่ ::</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/logo.svg" type="image/svg">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="manifest" href="./mainfest/manifest.webmanifest">
</head>
<body>
    <!--Navbar-->
    <?php if(isset($_SESSION['msg'])){echo $_SESSION['msg'];$_SESSION['msg']='';}include('./include/navbar.php'); ?>
    <div class="container-md" style="padding-top: 1rem;">
        <div class="card">
            <div class="card-body">
                <h4><i class="far fa-address-card"></i> เจ้าหน้าที่</h4>
                <form action="./api/login.php" method="post" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="username" class="form-control" name="Username" id="Username" placeholder=" " required>
                        <label for="floatingInput"><i class="fas fa-user"></i> ชื่อผู้ใช้: </label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" name="Password" id="Password" placeholder=" " required>
                        <label for="floatingPassword"><i class="fas fa-key"></i> รหัสผ่าน: </label>
                    </div>
                    <center style="padding-top: 0.4rem;"><button type="submit" id="submit" class="btn btn-success btn-lg"><i class="fas fa-check-circle"></i> เข้าสู่ระบบ</button></center>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('contextmenu', event => event.preventDefault());
        document.onkeydown = function (e) {
            // disable F12 key
            if(e.keyCode == 123) {              
                return false;
            }
            // disable I key
            if(e.ctrlKey && e.shiftKey && e.keyCode == 73){              
                return false;
            }
            // disable J key
            if(e.ctrlKey && e.shiftKey && e.keyCode == 74) {              
                return false;
            }
            // disable U key
            if(e.ctrlKey && e.keyCode == 85) {              
                return false;
            }
        }
        
        console.log(
            "%cหยุด!",
            "color:red;font-family:system-ui;font-size:4rem;font-weight:bold"
        );
        console.log(
            "%cนี่เป็นคุณสมบัติการทำงานของเบราว์เซอร์ที่มีจุดมุ่งหมายให้ใช้สำหรับผู้พัฒนา/ทดสอบระบบ \nมิควรทำกระการใด ๆ ที่อาจทำให้ระบบเกิดความเสียหาย หากพบอาจถูกดำเนินคดีทางกฏหมาย",
            "font-family:system-ui;font-size:2rem;font-weight:bold"
        );
    </script>
</body>
</html>