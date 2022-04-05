<?php
    session_start();
    if(!isset($_POST['Username'])){
        die('API ERROR: กรุณาตั้งชื่อผู้ใช้งาน<br><a href="../admin/monitor.php"><< GO BACK >></a>');
    }elseif((isset($_SESSION['Roles'])) && ($_SESSION['Roles']=="Admin")){
        require_once('../config.php');
        // Check repeat username.
        $user = mysqli_real_escape_string($conn,$_POST['Username']);
        $sql = "SELECT * from council_01.user where `Username` = '$user'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            die('API ERROR: Username ดังกล่าวมีในระบบ กรุณาเลือกชื่ออื่น! <br><a href="../admin/monitor.php"><< GO BACK >></a>');
        }
        //
        $pass = password_hash('12345678',PASSWORD_DEFAULT);
        $firstname = mysqli_real_escape_string($conn,$_POST['Firstname']);
        $lastname = mysqli_real_escape_string($conn,$_POST['Lastname']);
        $sql = "INSERT INTO council_01.user (`Username`, `Password`, `Firstname`, `Lastname`, `Roles`, `changePwd`) VALUES ('$user', '$pass', '$firstname', '$lastname', 'null', '0');";
        $result = mysqli_query($conn,$sql) or die("Error SQL with $sql:\n".mysqli_error($conn));
        header("Location: ../admin/monitor.php");
    }else{
        $_SESSION['nofi_tell_pwd'] = 0;
        $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'แจ้งเตือน!',text: 'กรุณาใช้สิทธิแอดมินในการเข้าถึง',icon: 'warning',})</script>>";
        header('Location: ../admin');
    }
?>