<?php
    include('../config.php');
    session_start();
    if(isset($_POST['Username'])){
        $user = mysqli_real_escape_string($conn,$_POST['Username']);
        $pass = mysqli_real_escape_string($conn,$_POST['Password']);
        $query = "SELECT * FROM council_01.user where `Username` = '$user' AND `Password` = '$pass'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) == 1){
            $_SESSION['Username'] = $user;
            $_SESSION['Login'] = 1;
            $rows = mysqli_fetch_array($result);
            $_SESSION['Firstname'] = $rows['Firstname'];
            $_SESSION['Lastname'] = $rows['Lastname'];
            $_SESSION['changePwd'] = $rows['changePwd'];
            $_SESSION['Roles'] = $rows['Roles'];
            $_SESSION['nofi_tell_pwd'] = 0;
            header('Location: ../admin/index.php');
        }else{
            $_SESSION['msg'] = "
            <script>
            Swal.fire(
                'พบข้อผิดพลาด',
                'Username/Password ไม่ถูกต้อง',
                'error'
              )
            </script>";
            header('Location: ../authen.php');
        }
    }else{
        $_SESSION['msg'] = "
        <script>
        Swal.fire(
            'พบข้อผิดพลาด',
            'กรุณากรอกข้อมูลเพื่อดำเนินการต่อ',
            'error'
          )
        </script>";
        header('Location: ../authen.php');
    }
?>