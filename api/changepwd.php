<?php
    session_start();
    if(isset($_POST['Password'])){
        if($_POST['Password'] != $_POST['PasswordVerify']){
            $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'พบข้อผิดพลาด!',text: 'รหัสผ่านทั้งสองช่องไม่ตรงกัน',icon: 'error',confirmButtonText: 'รับทราบ!',confirmButtonColor: '#F27474'})</script>";
            $_SESSION['nofi_tell_pwd'] = 0;
            header('Location: ../admin/changepwd.php');
        }elseif(($_POST['Password']=="")||($_POST['PasswordVerify']=="")){
            $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'พบข้อผิดพลาด!',text: 'กรุณากรอกรหัสผ่าน',icon: 'error',confirmButtonText: 'รับทราบ!',confirmButtonColor: '#F27474'})</script>";
            $_SESSION['nofi_tell_pwd'] = 0;
            header('Location: ../admin/changepwd.php');     
        }else{
            include('../config.php'); // Import SQL Data
            $pass = mysqli_real_escape_string($conn,$_POST['Password']);
            $pass_encrypt = password_hash($pass,PASSWORD_DEFAULT);
            $id = $_SESSION['ID'];
            $sql = "UPDATE council_01.user SET Password='$pass_encrypt',changePwd='1' WHERE ID='$id'";
            $result = mysqli_query($conn,$sql) or die ("Error $sql:\n". mysqli_error($conn));
            header('Location: ../admin');

        }
    }else{
        header('Location: ../');
    }
?>