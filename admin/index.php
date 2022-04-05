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
    <!--Content-->
    <div class="container-sm" style="padding: 1rem;">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-header text-white" style="background-color: #B66E01;">
                        เมนูด่วน <?php echo "[{$_SESSION['Username']} :: ".sprintf('%03d', $_SESSION['ID'])."]";?>
                    </div>
                    <ul class="list-group list-group-flush card-link">
                        <li class="list-group-item"><a href="./"><i class="fas fa-home"></i> หน้าหลัก</a></li>
                        <li class="list-group-item"><a href="./changepwd.php"><i class="fas fa-key"></i> เปลี่ยนรหัสผ่าน</a></li>
                        <li class="list-group-item"><a href="./announce_pub.php"><i class="fas fa-bullhorn"></i> แก้ไขประกาศ</a></li>
                        <li class="list-group-item"><a href="./logout.php" style="color:red;"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="card">
                    <div class="card-header">
                        <!--Marquee Announce-->
                        <div class="row">
                            <div class="col-sm-3 card-header bg-warning">
                                <i class="fas fa-bullhorn"></i> ประกาศ:
                            </div>
                            <div class="col-sm-9 card">
                                <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="" direction=""><?php echo announce_show($conn);?></marquee>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--Menu-->
                            Hello World!
                        <!--End of Menu-->
                    </div>
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
        unset($_SESSION['msg_monitor']);
    }
    ?>
</body>
</html>
