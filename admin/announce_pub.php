<?php
    session_start();
    if($_SESSION['Login']!=1){
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
    <script src="../js/ckeditor/ckeditor.js"></script>
</head>
<body>
        <?php include('./include/navbar.php'); ?>
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
                <div class="col-sm-9">
                    <div class="card">
                        <div class="card-header text-white" style="background-color: #B66E01;">
                            <i class="fas fa-bullhorn"></i> แก้ไขประกาศ
                        </div>
                        <div class="card-body">
                            <form action="../api/send_announce.php" method="post">
                                <h4 class="text-center" style="color: red;">**ไม่ควรใส่รูปภาพในหน้าประกาศ**</h4>
                                <input type="text" class="form-control" name="titles" value="<?php echo title_announce($conn);?>">
                                <textarea name="editor" id="ckeditor"><?php echo global_announce($conn);?></textarea>
                                <center style="padding-top: 1rem;"><button class="btn btn-success" type="submit"><i class="fas fa-save"></i> บันทึกข้อมูล</button></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
        if((isset($_SESSION['msg_monitor'])) && ($_SESSION['nofi_tell_pwd'] != 1)){
            echo $_SESSION['msg_monitor'];
            $_SESSION['nofi_tell_pwd'] = 1;
            unset($_SESSION['msg_monitor']);
        }
    ?>
    <script>
        CKEDITOR.replace( 'ckeditor', {
            language: 'th',
            uiColor: '#B66E01'
        });
    </script>
</body>
</html>