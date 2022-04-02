<?php
    include('../config.php');
    session_start();
    if(isset($_POST['Username'])){
        $user = mysqli_real_escape_string($conn,$_POST['Username']);
        $pass = mysqli_real_escape_string($conn,$_POST['Password']);
        $query = "SELECT * FROM council_01.user where `Username` = '$user'";
        $result = mysqli_query($conn,$query);
        $rows = mysqli_fetch_array($result);
        if(mysqli_num_rows($result) == 1){
            if(password_verify($pass,$rows['Password']) == 1){
                $_SESSION['Username'] = $user;
                $_SESSION['Login'] = 1;
                $_SESSION['ID'] = $rows['ID'];
                $_SESSION['Firstname'] = $rows['Firstname'];
                $_SESSION['Lastname'] = $rows['Lastname'];
                $_SESSION['changePwd'] = $rows['changePwd'];
                $_SESSION['Roles'] = $rows['Roles'];
                $_SESSION['nofi_tell_pwd'] = 0;
                header('Location: ../admin');
            }else{
                $_SESSION['msg'] = "
            <script>
            Swal.fire({
                title: 'พบข้อผิดพลาด',
                text: 'Username/Password ไม่ถูกต้อง',
                icon: 'error',confirmButtonText: 'รับทราบ!',
                confirmButtonColor: '#F27474'
              })
            </script>";
            header('Location: ../authen.php');
            }
        }else{
            $_SESSION['msg'] = "
            <script>
            Swal.fire({
                title: 'พบข้อผิดพลาด',
                text: 'Username/Password ไม่ถูกต้อง',
                icon: 'error',confirmButtonText: 'รับทราบ!',
                confirmButtonColor: '#F27474'
              })
            </script>";
            header('Location: ../authen.php');
        }
    }else{
        $_SESSION['msg'] = "
        <script>
        Swal.fire({
            title: 'พบข้อผิดพลาด',
            text: 'กรุณากรอกข้อมูลเพื่อดำเนินการต่อ',
            icon: 'error',confirmButtonText: 'รับทราบ!',
            confirmButtonColor: '#F27474'
          })
        </script>";
        header('Location: ../authen.php');
    }
?>