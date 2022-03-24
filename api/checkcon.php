<?php
    error_reporting(0);
    include('./config.php');
    if ($error_temp <= 0){
        echo "<p style='color: green; font-weight: bold;'>ทำงานปกติ</p>";
    }else{
        echo "<p style='color: red; font-weight: bold;'><abbr title='$msg_01'>ผิดปกติ</abbr></p>";
    }
?>