<?php 
session_start();
if(!isset($_SESSION['Login'])){
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ส่งรักส่งยิ้ม :: Staff</title>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
        <link rel="icon" href="../img/logo.svg" type="image/svg">
        <link rel="stylesheet" href="../style.css">
        <link rel="manifest" href="../mainfest/manifest.webmanifest">
    </head>
<body>
    <!--Navbar-->
    <?php include('./include/navbar.php');?>
    <div class="container-fluid bg-dark text-white">
        <div class="container-lg" style="padding: 2rem;">
            <div class="row">
                <div class="col-sm-2">
                    <img src="../img/user.png" class="img-fluid" alt="Logo Council" width="150">
                </div>
                <div class="col-sm-10">
                    <h1 class="title-th" style="padding-top: 10px;">สวัสดี! <?php echo $_SESSION['Firstname'].' '.$_SESSION['Lastname'];?></h1>
                    <p class="title-th">คุณเข้ามาหน้านี้เวลา: <mark><?php echo date("h:i:sa")." (UTC)";?></mark></p>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(($_SESSION['changePwd'] < 1) && $_SESSION['nofi_tell_pwd'] != 1){
        echo '<script>
            Swal.fire({
                title: \'แจ้งเตือน!\',
                text: \'กรุณาเปลี่ยนรหัสผ่านการใช้ครั้งแรก เพื่อความปลอดภัย!\',
                icon: \'warning\',
                footer: \'<p style="color: red;">**ข้อความนี้จะเตือนทุก ๆ ครั้งที่เข้าสู่ระบบครั้งแรก**</p>\',
                confirmButtonText: \'รับทราบ!\',
                confirmButtonColor: \'#5EBA7D\'
            })
            </script>';
        $_SESSION['nofi_tell_pwd'] = 1;
        $_SESSION['changePwd'] = 1;
    }if((isset($_SESSION['msg_monitor'])) && ($_SESSION['nofi_tell_pwd'] != 1)){
        echo $_SESSION['msg_monitor'];
        $_SESSION['nofi_tell_pwd'] = 1;
        $_SESSION['msg_monitor'] = "";
    }
    ?>
</body>
</html>
