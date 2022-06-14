<?php 
error_reporting(0);
include('./config.php');
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
    <link rel="manifest" href="./mainfest/manifest.webmanifest">
    <noscript><meta http-equiv="refresh" content="0; url=./dontsupport.php"></noscript>
</head>
<body>
    <!--Navbar-->
   <?php include('./include/navbar.php');?>
   <?php 
   if(isset($error_temp)){
        include('./include/request-form/box-error.php');
   }
   ?>
   <div class="container-sm mt-3 mb-3">
       <div class="card">
           <div class="card-header bg-primary text-white">
                <i class="far fa-address-card"></i> ตรวจสอบข้อมูลการจอง
           </div>
           <div class="card-body">
               <form action="" method="get" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="num_books" name="book_id" placeholder="" required inputmode="numeric" autofocus>
                        <label for="num_books">เลขที่การจอง</label>
                    </div>
                        <center>
                        <button class="btn btn-success px-4" type="submit"><i class="fas fa-search"></i> ตรวจสอบ</button>
                        </center>
               </form>
           </div>
       </div>
   </div>
   <?php
        if(isset($_GET['book_id'])){
            include_once('./include/checker.php');
        }
   ?>
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