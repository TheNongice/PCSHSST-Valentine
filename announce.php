<?php include('./config.php'); 
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
        <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
        <link rel="icon" href="img/logo.svg" type="image/svg">
        <link rel="stylesheet" href="./style.css">
        <link rel="manifest" href="./mainfest/manifest.webmanifest">
        <!--Social tags-->
        <meta property="og:title" content="ส่งรักส่งยิ้ม">
        <meta property="og:description" content="ส่งรักส่งยิ้มโดย คณะกรรมการนักเรียนโรงเรียนวิทยาศาสตร์จุฬาภรณราชวิทยาลัย สตูล">
        <meta property="og:image" content="https://songrak.ngixx.in.th/img/social_thumb.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="ส่งรักส่งยิ้ม">
        <meta name="twitter:url" content="https://songrak.ngixx.in.th">
        <meta name="twitter:description" content="ส่งรักส่งยิ้มโดย คณะกรรมการนักเรียนโรงเรียนวิทยาศาสตร์จุฬาภรณราชวิทยาลัย สตูล">
        <meta name="twitter:image" content="https://songrak.ngixx.in.th/img/social_thumb.png">        
    </head>
    <body>
        <?php 
            include('include/navbar.php');
        ?>
    <div class="container mt-4">
        <a href="/" class="my-4" style="color: red;"><i class="fas fa-arrow-alt-circle-left"></i> ย้อนกลับไปหน้าแรก</a>
    </div>
    <div class="container formal-text" style="padding-top: 1rem;">
        <div class="card">
            <div class="card-header bg-warning">
                <i class="fas fa-bullhorn"></i> ประกาศ
            </div>
            <div class="card-body">
                <?php 
                    include_once('api/announce_api.php');
                    echo $rows['texts'];
                    echo $rows['lastchanged'];
                ?>

            </div>
        </div>
    </div>
    <?php
        // เช็กว่ามีกี่แถวใน DB
        $sql = "SELECT * FROM announce";
        $query = mysqli_query($conn,$sql) or die("ไม่สามารถเชื่อมไปยังฐานข้อมูลได้ในขณะนี้");
        $num_row = mysqli_num_rows($query);
        // ให้ดึงมาเฉพาะ 3 อันล่าสุด
    ?>
    <div class="container my-4 formal-text">
        <div class="card">
            <div class="card-header text-white" style="background-color: #282D7E;">
                <i class="fas fa-bullhorn"></i> ประกาศล่าสุด
            </div>
            <div class="card-body formal-text">
            <?php
            for($num = $num_row ; $num != $num_row-3 ; $num--){
                $sql = "SELECT * FROM announce WHERE id={$num}";
                $result = mysqli_query($conn,$sql);
                $rows = mysqli_fetch_array($result);
            ?>
            <div class="row" onclick="window.location.href = './announce.php?id_t=<?php echo $num;?>'">
                <div class="col-sm-10">
                    <?php echo $rows['titles'];?>
                </div>
                <div class="col-sm-2">
                    <?php echo "<code>(".$rows['dates_change'].")</code><br>"?><a href="./announce.php?id_t=<?php echo $num;?>">(<i class="fas fa-book"></i> อ่านเพิ่มเติม)</a>
                </div>
            </div>
            <?php
                echo "<hr>";
            }
            ?>
            </div>
        </div>
    </div>
</body>
</html>