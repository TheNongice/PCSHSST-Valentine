<?php
include('../config.php');
session_start();
if(!$_SESSION['Login']){
    header('Location: /');
}

if(isset($_GET['del'])){
    $id = mysqli_real_escape_string($conn,$_GET['del']);
    $query = "DELETE FROM request_list WHERE (id={$id})";
    $result = mysqli_query($conn,$query) or die('ไม่สามารถเชื่อมต่อไปยังฐานข้อมูล โปรดลองอีกครั้งในภายหลัง');
    if(!$result){
    $_SESSION['msg_monitor'] = '
    <script>
        Swal.fire({
            position: \'top\',
            title: \'แจ้งเตือน!\',
            text: \'เกิดข้อผิดพลาด\',
            icon: \'error\',
            showConfirmButton: false,
            timer: 1500
        })
    </script>';
    $_SESSION['nofi_tell_pwd'] = 0;
    header('Location: list.php');
    }else{
    $_SESSION['msg_monitor'] = '
    <script>
        Swal.fire({
            position: \'top\',
            title: \'แจ้งเตือน!\',
            text: \'ลบข้อมูลเสร็จสิ้น\',
            icon: \'success\',
            showConfirmButton: false,
            timer: 1500
        })
    </script>';
    $_SESSION['nofi_tell_pwd'] = 0;
    header('Location: list.php');
    }
}
?>