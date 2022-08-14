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
        <link rel="stylesheet" href="./style.css">
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
                        <li class="list-group-item"><a href="./list.php"><i class="fas fa-clipboard-check"></i> ตรวจสอบรายชื่อผู้จอง</a></li>
                        <li class="list-group-item"><a href="./logout.php" style="color:red;"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-9 mt-2">
                <div class="card">
                    <div class="card-header bg-warning">
                        <!--Marquee Announce-->
                        <div class="row">
                            <div class="col-sm-3 card-header">
                                <i class="fas fa-bullhorn"></i> ประกาศ:
                            </div>
                            <div class="col-sm-9 card">
                                <marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="" direction=""><?php echo announce_show($conn);?></marquee>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--Menu-->
                        <h4 class="title-th mx-1"><i class="fas fa-atlas"></i> สรุปข้อมูล:</h4>
                        <div class="row mt-2">
                            <div class="col-sm-4">
                                <div class="card bg-primary text-white mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-sigma"></i> จำนวนผู้ขอทั้งหมด
                                    </div>
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <?php 
                                                        $query = "SELECT * FROM request_list";
                                                        $result = mysqli_query($conn,$query);
                                                        echo "<h1 class='text-end'>".mysqli_num_rows($result)."</h1>";
                                                    ?>
                                            </div>
                                            <div class="col-sm">
                                                คน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card bg-success text-white mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-clipboard-check"></i> จำนวนผู้ที่ชำระแล้ว
                                    </div>
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <?php 
                                                        $query = "SELECT * FROM request_list WHERE status_pub='ชำระค่าจองแล้ว'";
                                                        $result = mysqli_query($conn,$query);
                                                        echo "<h1 class='text-end'>".mysqli_num_rows($result)."</h1>";
                                                    ?>
                                            </div>
                                            <div class="col-sm">
                                                คน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card bg-danger text-white mb-2">
                                    <div class="card-header">
                                        <i class="fas fa-exclamation-triangle"></i> จำนวนผู้ไม่ชำระทั้งหมด
                                    </div>
                                    <div class="card-body">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <?php 
                                                        $query = "SELECT * FROM request_list WHERE status_pub='ยังไม่ชำระค่าจอง'";
                                                        $result = mysqli_query($conn,$query);
                                                        echo "<h1 class='text-end'>".mysqli_num_rows($result)."</h1>";
                                                    ?>
                                            </div>
                                            <div class="col-sm">
                                                คน
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card text-white mt-2" style="background-color: #B66E01;">
                                    <div class="card-header">เปลี่ยนรหัสผ่าน</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-key"></i></h5>
                                        <p class="card-text">ควรเปลี่ยนรหัสผ่านเมื่อได้รับการรีเซ๊ทรหัสหรือรู้สึกว่ารหัสผ่านเดิมไม่ปลอดภัย</p>
                                        <a href="./changepwd.php" class="btn btn-success stretched-link">กดเพื่อกระทำ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card text-white bg-primary mt-2">
                                    <div class="card-header">แก้ไขการประกาศ</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-bullhorn"></i></h5>
                                        <p class="card-text">ช่องทางอัพเดตข้อมูลประกาศหน้าหลักของเว็บไซต์</p>
                                        <a href="./announce_pub.php" class="btn btn-success stretched-link">กดเพื่อกระทำ</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                            <div class="card text-white bg-info mt-2">
                                    <div class="card-header">ตรวจสอบรายชื่อ</div>
                                    <div class="card-body">
                                        <h5 class="card-title"><i class="fas fa-business-time"></i></h5>
                                        <p class="card-text">ตรวจสอบรายชื่อผู้จองเพื่อจัดการสถานะหรือออเดอร์ใด ๆ </p>
                                        <a href="./list.php" class="btn btn-success stretched-link">กดเพื่อกระทำ</a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
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
