<?php 
    include('./config.php');
    //print_r($_POST);
    session_start();
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="icon" href="img/logo.svg" type="image/svg">
    <link rel="stylesheet" href="./style.css">
    <script src="./js/jquery-3.6.0.min.js"></script>
    <link rel="manifest" href="./mainfest/manifest.webmanifest">
    <noscript><meta http-equiv="refresh" content="0; url=./dontsupport.php"></noscript>
</head>
<body>
    <!--Navbar-->
    <?php 
        if(isset($_SESSION['alert'])){
            echo $_SESSION['alert'];
            unset($_SESSION['alert']);
        }
    ?>
   <?php include('./include/navbar.php');?>
   <?php 
   if(isset($error_temp)){
        include('./include/request-form/box-error.php');
   }else{
       include('./include/request-form/box.php');
   }
   ?>
   <?php
        error_reporting(0);
        if($_POST['NAME_REQUEST']=="ไม่พบข้อมูล" || $_POST['NAME_RECIEVE']=="ไม่พบข้อมูล"){
                echo "<script>
                Swal.fire({
                    title: 'พบข้อผิดพลาด',
                    text: 'กรุณากรอกข้อมูลให้ถูกต้อง/ครบถ้วน!',
                    icon: 'error',confirmButtonText: 'รับทราบ!',
                    confirmButtonColor: '#F27474'
                })
                </script>";
            }
   ?>
</body>
</html>