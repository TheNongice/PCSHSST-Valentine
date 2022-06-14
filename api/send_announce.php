<?php
    session_start();
    if($_SESSION['Login']!=1 || !isset($_POST['editor'])){
        echo 'ไม่มีสิทธิการเรียกใช้ API ดังกล่าว โปรดเข้าสู่ระบบด้วยบัญชีผู้ดูแลระบบ<br>';
        echo 'หากคุณใช้บัญชีผู้ดูแลระบบพบปัญหาดังกล่าว ให้ทำการออกจากระบบเข้าใหม่อีกครั้ง<br>';
        echo '<a style="text-decoration: none;color: red;" href="mailto:wasawat.j@pccst.ac.th">หากยังพบปัญหาโปรดกดข้อความสีแดงเพื่อติดต่อไปยังผู้พัฒนาระบบ</a>';
        die();
    }else{
        include('../config.php');
        //error_reporting(0);
        $titles = $_POST['titles'];
        $msg = $_POST['editor'];
        $msg = mysqli_real_escape_string($conn,$msg);
        $user = $_SESSION['Username'];
        $t=time();
        $final_date = date("d/m/Y",$t);
        $final_time = date("H:i:s");
        //$sql = "UPDATE council_01.announce SET `texts` = '$msg', `lastchanged` = '<hr><em>ประกาศจาก <code>$user</code> เมื่อ: <code>$final_date $final_time</code></em>' WHERE (`id` = '2')";
        $final_etime = $final_date. " ". $final_time;
        $sql = "INSERT INTO announce (`texts`,`lastchanged`,`titles`,`dates_change`) VALUES ('{$msg}','<hr><em>ประกาศจาก <code>$user</code> เมื่อ: <code>{$final_date} {$final_time}</code></em>','{$titles}','{$final_etime}')";
        $result = mysqli_query($conn,$sql) or die("ไม่สามารถเปลี่ยนแปลงข้อมูลได้ โปรดลองอีกครั้งในภายหลัง");
        $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'แจ้งเตือน!',text: 'เปลี่ยนแปลงข้อมูลประกาศสำเร็จ',icon: 'success',confirmButtonColor: '#5EBA7D',confirmButtonText: 'รับทราบ!'})</script>";
        $_SESSION['nofi_tell_pwd'] = 0;
        header("Location: /admin");
    }
?>