<?php
session_start();
if($_SESSION['Roles'] != "Admin"){
    header('Location: ../admin');
}
if(isset($_GET['phpinfo'])&&($_GET['phpinfo'] == 'true')){
    phpinfo();
    echo '<hr><center><a style="color: red;" href="monitor.php"><< Back to Homes Debugger >></a></center><hr>';
}if(isset($_GET['logout'])&&($_GET['logout'] == 'true')){
    header('Location: logout.php');
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
    <a href="../admin/monitor.php?phpinfo=true">PHPINFO</a><br>
    <a href="../admin/monitor.php?logout=true">CLEAR SESSION</a>
</body>
</html>