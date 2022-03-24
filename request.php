<?php 
error_reporting(0);
include('./config.php');
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
    <!--Navbar-->
   <?php include('./include/navbar.php');?>
   <?php 
   if(isset($error_temp)){
        include('./include/request-form/box-error.php');
   }
   
   ?>
   <!--Footer-->
   <?php include('./include/footbar.php');?> 
</body>
</html>