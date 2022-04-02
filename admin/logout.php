<?php
session_start();
session_unset();
session_destroy();
header('Location: /');
if((isset($_GET['authenpage']))&&($_GET['authenpage']==1)){
    header('Location: ../authen.php');
}
?>