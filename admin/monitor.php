<?php
session_start();
$agent_support = ["Mozilla/5.0 (iPhone; CPU iPhone OS 15_4 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.4 Mobile/15E148 Safari/604.1","PCSHSST-Debug"];
if((isset($_SESSION['msg_monitor'])) && ($_SESSION['msg_monitor'] != 1)){
    echo $_SESSION['msg_monitor'];
    $_SESSION['msg_monitor'] = 1;
}
function back(){
    echo '<hr><center><a style="color: red;" href="monitor.php"><< Back to Homes Debugger >></a></center><hr>';
}
if($_SESSION['Roles'] != "Admin"){
    $_SESSION['nofi_tell_pwd'] = 0;
    $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'แจ้งเตือน!',text: 'กรุณาใช้สิทธิแอดมินในการเข้าถึง',icon: 'warning',})</script>";
    header('Location: ../admin');
}elseif($_SERVER['HTTP_USER_AGENT'] != in_array($_SERVER['HTTP_USER_AGENT'],$agent_support)){ // Check user-agents
    $_SESSION['nofi_tell_pwd'] = 0;
    $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'Verify System',text: 'กรุณาเข้าเว็บไซต์ด้วย User-agent ที่ได้รับอนุญาตเท่านั้น',icon: 'error',confirmButtonText: 'รับทราบ!',confirmButtonColor: '#F27474'})</script>";
    header('Location: ../admin');
}
if(isset($_GET['phpinfo'])&&($_GET['phpinfo'] == 'true')){ // show phpinfo
    phpinfo();
    back();
}if(isset($_GET['logout'])&&($_GET['logout'] == 'true')){ // Remove session (Logout)
    header('Location: logout.php');
}if(isset($_GET['adduser'])&&($_GET['adduser'] == 'true')){ // Add user menu
    include('./include/adduser.php');
    back();
}if(isset($_GET['resetpwd'])&&($_GET['resetpwd'] == 'true')){ // Add user menu
    include('./include/monitor/resetpwd.php');
    back();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: DEBUGGER ::</title>
</head>
<body>
<table style="width: 100%;">
	<tbody>
		<tr>
			<td style="width: 100.0000%;"><a href="../admin/monitor.php?phpinfo=true">PHPINFO</a>
				<br>
			</td>
		</tr>
		<tr>
			<td style="width: 100.0000%;"><a href="../admin/monitor.php?adduser=true">ADD USER</a>
				<br>
			</td>
		</tr>
		<tr>
			<td style="width: 100.0000%;"><a href="../admin/monitor.php?resetpwd=true">RESET PASSWORD</a>
				<br>
			</td>
		</tr>
		<tr>
			<td style="width: 100.0000%;"><a href="../admin/">BACK TO MAIN STAFF</a>
				<br>
			</td>
		</tr>
		<tr>
			<td style="width: 100.0000%;"><a href="../admin/monitor.php?logout=true">CLEAR SESSION</a>
				<br></td>
		</tr>
	</tbody>
</table>

</body>
</html>