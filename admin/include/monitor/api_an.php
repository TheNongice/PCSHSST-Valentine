<?php
    error_reporting(0);
	session_start();
    include('../../../config.php');
	if(($_SESSION['Roles']!="Admin") || (!$_POST['editor'])){
        echo 'ไม่มีสิทธิการเรียกใช้ API ดังกล่าว โปรดเข้าสู่ระบบด้วยบัญชีผู้ดูแลระบบ<br>';
        echo 'หากคุณใช้บัญชีผู้ดูแลระบบพบปัญหาดังกล่าว ให้ทำการออกจากระบบเข้าใหม่อีกครั้ง<br>';
        echo '<a style="text-decoration: none;color: red;" href="mailto:wasawat.j@pccst.ac.th">หากยังพบปัญหาโปรดกดข้อความสีแดงเพื่อติดต่อไปยังผู้พัฒนาระบบ</a>';
		die();
	}
    $editor_data = mysqli_real_escape_string($conn,$_POST[ 'editor' ]);
    $query = "UPDATE `council_01`.`announce` SET `texts` = '$editor_data' WHERE (`id` = '1');";
    $result = mysqli_query($conn,$query) or die('ไม่สามารถบันทึกการเปลี่ยนแปลงข้อมูล');
    if($result==1){
        echo 'ANNOUNCE TEXT HAVE BEEN CHANGED!<br>';
        echo '<a href="../../monitor.php"><< BACK MONITOR >></a>';
    }
?>