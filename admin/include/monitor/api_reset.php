<?php
    session_start();
    error_reporting(0);
    $id = $_POST['ID'];
    if($_SESSION['Roles']!="Admin"){
        echo 'ไม่มีสิทธิการเรียกใช้ API ดังกล่าว โปรดเข้าสู่ระบบด้วยบัญชีผู้ดูแลระบบ<br>';
        echo 'หากคุณใช้บัญชีผู้ดูแลระบบพบปัญหาดังกล่าว ให้ทำการออกจากระบบเข้าใหม่อีกครั้ง<br>';
        echo '<a style="text-decoration: none;color: red;" href="mailto:wasawat.j@pccst.ac.th">หากยังพบปัญหาโปรดกดข้อความสีแดงเพื่อติดต่อไปยังผู้พัฒนาระบบ</a>';
    }
    include('../../../config.php'); // Import SQL
    $pass_encrypt = password_hash("12345678",PASSWORD_DEFAULT);
    $sql = "UPDATE council_01.user SET Password='$pass_encrypt',changePwd='0' WHERE ID='$id'";
    $result = mysqli_query($conn,$sql) or die('Error: '.mysqli_error($conn));
    if($_SESSION['Roles'] == "Admin" && $result==1){
        echo 'Password for [ID:' .sprintf('%03d', $id).'] has been reset!';
        echo '<br><a href="../../monitor.php"><< BACK MONITOR >></a>';
    }
?>