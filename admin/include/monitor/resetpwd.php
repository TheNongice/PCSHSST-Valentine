<?php
error_reporting(0);
if($_SESSION['Roles'] != "Admin"){
    echo "<p style='color: red;font-weight: bold;'>This include work in `monitor.php` only!</p>";
    echo '<a style="color: darkred;" href="/"><< BACK HOME >></p> ';
}else{
    echo '<form action="./include/monitor/api_reset.php" method="post">';
    echo '<input type="number" name="ID" id="ID" placeholder="ID" inputmode="numeric" autofocus>';
    echo '<button type="submit">Reset</button></form>';
}
?>