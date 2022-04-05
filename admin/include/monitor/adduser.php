<?php 
if(!isset($_SESSION['Roles'])){
    die('This include work in monitor.php only!<br><a style="color: red;font-weight:bold;" href="/"><< BACK HOME >></a>');
}else{
    if($_SESSION['Roles']!="Admin"){
        die('This include work in monitor.php only!<br><a style="color: red;font-weight:bold;" href="/"><< BACK HOME >></a>');
    }
}
?>
<form class="pure-form" action="../../api/adduser.php" method="post">
    <input type="text" placeholder="Username" name="Username" required>
    <input type="text" placeholder="Firstname" name="Firstname" required>
    <input type="text" placeholder="Lastname" name="Lastname" required>
    <button type="submit" class="pure-button" style="background: #1CB841;color:#fff;">Add user</button>
</form>