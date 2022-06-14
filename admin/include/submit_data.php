<?php
    session_start();
    if(!isset($_SESSION['Login'])){
        die('API ERROR :: ขออภัยคุณไม่มีสิทธิการใช้งาน');
    }
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        die('API ERROR :: ขออภัยคุณเรียกใช้งานคำสั่งผิดวิธี');
    }
    if($_POST['amount_photo'] == 0 || $_POST['status_pub'] == 0){
        $_SESSION['msg_monitor'] = '
        <script>
        Swal.fire({
            position: \'top\',
            title: \'เกิดข้อผิดพลาด\',
            text: \'ข้อมูลที่กรอกไม่ถูกต้อง\',
            icon: \'error\',
            showConfirmButton: false,
            timer: 2500
        })
        </script>
        ';
        $_SESSION['nofi_tell_pwd'] = 0;
        header('Location: /admin/list.php');
    }else{
    include('../../config.php');
    $query = "UPDATE request_list SET `amount_photo` = '{$_POST['amount_photo']}', `quest1` = '{$_POST['quest1']}', `quest2` = '{$_POST['quest2']}', `quest3` = '{$_POST['quest3']}', `quest4` = '{$_POST['quest4']}', `quest5` = '{$_POST['quest5']}', `status_pub` = '{$_POST['status_pub']}' WHERE (id='{$_POST['id']}')";
    $result = mysqli_query($conn,$query);
    if(!$result){
        die('ไม่สามารถส่งข้อมูลไปยังฐานข้อมูลได้ โปรดลองอีกครั้งในภายหลัง');
    }else{
        $_SESSION['msg_monitor'] = '
        <script>
        Swal.fire({
            position: \'top\',
            title: \'แจ้งเตือน!\',
            text: \'เปลี่ยนแปลงข้อมูลเสร็จสิ้น\',
            icon: \'success\',
            showConfirmButton: false,
            timer: 2500
        })
        </script>
        ';
        $_SESSION['nofi_tell_pwd'] = 0;
        header('Location: /admin/list.php');
    }
    }
?>