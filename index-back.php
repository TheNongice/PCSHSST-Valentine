<?php include('./config.php'); 
session_start();
if(isset($_SESSION['Login'])){
    header('Location: /admin/');
}
?>
<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ส่งรักส่งยิ้ม</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
        <link rel="icon" href="img/logo.svg" type="image/svg">
        <link rel="stylesheet" href="./style.css">
        <link rel="manifest" href="./mainfest/manifest.webmanifest">
    </head>
    <body>
        <?php 
            include('include/navbar.php');
        ?>
    <div class="container" style="padding-top: 1rem;">
        <div class="row">
            <div class="col-md-5 align-self-center">
                <h1>ระบบส่งรักส่งยิ้ม</h1>
                <p class="blockquote-footer motto">Council of PCSHSST</p>
            </div>
            <div class="col-md-7">
                <div class="d-grid gap-2">
                    <?php
                        error_reporting(0);
                        if($error_temp <= 0){
                            echo '<a role="button" class="btn btn-outline-primary btn-lg" href="./request.php"><i class="fab fa-wpforms"></i> แบบฟอร์มส่งรักส่งยิ้ม</a>';
                            echo '<a role="button" class="btn btn-outline-warning btn-lg" href="./check.php"><i class="fas fa-eye"></i> ตรวจสอบสถานะ</a>';
                        }else{
                            echo '<a role="button" class="btn btn-outline-primary btn-lg disabled" aria-disabled="true"><i class="fab fa-wpforms"></i> แบบฟอร์มส่งรักส่งยิ้ม</a>';
                            echo '<a role="button" class="btn btn-outline-warning btn-lg disabled" aria-disabled="true"><i class="fas fa-eye"></i> ตรวจสอบสถานะ</a>';
                        }
                    ?>
                    <a role="button" class="btn btn-outline-danger btn-lg" href="./authen.php"><i class="fas fa-user-cog"></i> ระบบเจ้าหน้าที่</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="padding-top: 2rem;">
        <div class="card">
            <div class="card-header">
                <h5 class="title-th">สถานะการทำงานของระบบ:</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <section ><i class="fas fa-database"></i> การเชื่อมต่อฐานข้อมูล:</section>
                    </div>
                    <div class="col">
                        <?php include('./api/checkcon.php');?>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">
                    <?php
                        if($error_temp>=1){
                            echo "<p class='alert alert-danger text-center' role='alert'><i class=\"fas fa-exclamation-triangle\"></i><strong> โปรดเลี่ยงการทำรายการในช่วงเวลาดังกล่าว เพื่อป้องกันการสูญหายของข้อมูล</strong></p>";
                        }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('./include/footbar.php');?>
</body>
</html>