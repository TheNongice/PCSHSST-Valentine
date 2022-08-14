<?php
error_reporting(0);
if($_SESSION['Roles'] != "Admin"){
    die('<p style="color: red;font-weight: bold;">This include work in `monitor.php` only!</p>
    <a style="color: darkred;" href="/"><< BACK HOME >></p>');
}
?>
<form action="./include/monitor/api_reset.php" method="post">
    <input type="number" name="ID" id="ID" placeholder="ID" inputmode="numeric" autofocus>
    <button class="pure-button" style="background: #1CB841;color:#fff;" type="submit">Reset</button>
</form>