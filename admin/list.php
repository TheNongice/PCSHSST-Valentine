<?php 
session_start();
$query = "SELECT * FROM request_list";
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
        <script src="../js/jquery-3.6.0.min.js"></script>
        <link rel="icon" href="../img/logo.svg" type="image/svg">
        <link rel="stylesheet" href="./style.css">
        <link rel="manifest" href="../mainfest/manifest.webmanifest">
    </head>
<body>
    <!--Navbar-->
    <?php include('./include/navbar.php');?>
    <!--Content-->
    <div class="container-fluid" style="padding: 1rem;">
        <hr>
        <div class="row">
            <div class="container">
                <div class="card">
                    <div class="card-body">
                        <a href="/admin" style="color: red;"><i class="fas fa-arrow-alt-circle-left"></i> ย้อนกลับหน้าหลัก</a>
                        <center>
                            <h3 class="mt-3"><strong><i class="fas fa-address-book"></i> รายชื่อผู้จอง</strong></h3>
                            <h4 style="color: red;">โปรดเข้าผ่านคอมพิวเตอร์/แล็ปท็อป</h4>
                            <i><p class="formal-text">(ข้อมูลจะรีเฟรชทุก ๆ 5 วินาที)</p></i>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl mt-2">
                <div class="card">
                    <div id="content-req" class="table-responsive">
                        <div class="d-flex justify-content-center">
                            <div class="spinner-border text-warning mt-4 mb-4" role="status">
                                <span class="sr-only">***</span>
                            </div>
                        </div>
                        <center><h5 class="title-th mb-4">กรุณารอสักครู่</h5></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var getUrlParameter = function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
            return 1;
        };
        function deleteDiag(id){
            if(confirm("ยืนยันการลบไอดีการจองที่ "+ id  +" หรือไม่?")){
                window.location.href='remove_req.php?del='+id;
                return true;

            }
        }
        $('document').ready(function(){
            setInterval(function(){fetchData()},3500);
            function fetchData(){
                jQuery.ajax({
                    type: 'GET',
                    url: 'include/fetch_request.php',
                    data: {p : getUrlParameter('p')},
                    beforeSend: function(){},
                    complete: function(){},
                    success:function(data){
                        $('#content-req').html(data);
                    }
                });
            }
        })
    </script>
<?php
if((isset($_SESSION['msg_monitor'])) && ($_SESSION['nofi_tell_pwd'] != 1)){
    echo $_SESSION['msg_monitor'];
    $_SESSION['nofi_tell_pwd'] = 1;
    unset($_SESSION['msg_monitor']);
}
?>
</body>
</html>
