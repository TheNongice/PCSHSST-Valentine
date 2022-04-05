<?php
session_start();
if((isset($_SESSION['msg_monitor'])) && ($_SESSION['msg_monitor'] != 1)){
    echo $_SESSION['msg_monitor'];
    $_SESSION['msg_monitor'] = 1;
}
function back(){
    echo '<hr><center><a style="color: red;" href="monitor.php"><< Clear Debugger >></a></center><hr>';
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:: DEBUGGER ::</title>
	<link rel="stylesheet" href="https://unpkg.com/purecss@2.1.0/build/pure-min.css" integrity="sha384-yHIFVG6ClnONEA5yB5DJXfW2/KC173DIQrYoZMEtBvGzmf0PKiGyNEqe9N6BNDBH" crossorigin="anonymous">
	<script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
</head>
<body>
<table class="pure-table">
	<thead>
		<th>No.</th>
		<th>Process</th>
	</thead>
	<tbody>
	<tr>
		<td>1</td>
		<td><a href="../admin/monitor.php?phpinfo=true">PHPINFO</a></td>
	</tr>
	<tr>
		<td>2</td>
		<td><a href="../admin/monitor.php?adduser=true">ADD USER</a></td>
	</tr>
	<tr>
		<td>3</td>
		<td><a href="../admin/monitor.php?resetpwd=true">RESET PASSWORD</a></td>
	</tr>
	<tr>
		<td>4</td>
		<td><a href="../admin/monitor.php?announce=true">ANNOUNCE EDITOR (**STAFF**)</a></td>
	</tr>
	<tr>
		<td>5</td>
		<td><a href="../admin/announce_pub.php">ANNOUNCE EDITOR (**PUBLIC**)</a></td>
	</tr>
	<tr>
		<td>6</td>
		<td><a href="../admin/">BACK TO MAIN STAFF</a></td>
	</tr>
	<tr>
		<td>6</td>
		<td><a style="color:red;" href="../admin/monitor.php?logout=true">CLEAR SESSION (LOGOUT)</a></td>
	</tr>
	</tbody>
</table>
<br>
<?php 
if($_SESSION['Roles'] != "Admin"){
    $_SESSION['nofi_tell_pwd'] = 0;
    $_SESSION['msg_monitor'] = "<script>Swal.fire({title: 'แจ้งเตือน!',text: 'กรุณาใช้สิทธิแอดมินในการเข้าถึง',icon: 'warning',})</script>";
    header('Location: ../admin');
}
if(isset($_GET['phpinfo'])&&($_GET['phpinfo'] == 'true')){ // show phpinfo
    back();
    phpinfo();
}if(isset($_GET['logout'])&&($_GET['logout'] == 'true')){ // Remove session (Logout)
    header('Location: logout.php');
}if(isset($_GET['adduser'])&&($_GET['adduser'] == 'true')){ // Add user menu
    include('./include/monitor/adduser.php');
    back();
}if(isset($_GET['resetpwd'])&&($_GET['resetpwd'] == 'true')){ // Add user menu
    include('./include/monitor/resetpwd.php');
    back();
}if(isset($_GET['announce'])&&($_GET['announce'] == 'true')){ // Announce Editor
	include('./include/monitor/announce.php');
	back();
}if(isset($_GET['muimiu0y'])){
	$_SESSION['msg_monitor'] = '<script>alert("มุยน่ารักเกินต้านมากมาก นะระจีงๆ >//<");</script>';
	$_SESSION['nofi_tell_pwd'] = 0;
	header('Location: monitor.php');
}if(isset($_GET['ngixx']) || isset($_GET['TheNongice']) || isset($_GET['thenongice']) || isset($_GET['thengi'])){
	header('Location: https://facebook.com/carice2549');
}
?>
</body>
</html>