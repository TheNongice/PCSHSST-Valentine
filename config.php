<?php
    error_reporting(0);
    $conn = mysqli_connect('localhost','root','','council_01');
    $msg_01 = "หากท่านพบข้อความต่อไปนี้โปรดติดต่อผู้ดูแลระบบโดยไวที่สุด";
    if(!$conn){
        $error_temp +=1;
    }
    // ระบบดึงประกาศ Staff
    function announce_show($conn){
        $query = "SELECT * FROM council_01.announce where id=1";
        $sql_send = mysqli_query($conn,$query);
        $announce_a = mysqli_fetch_array($sql_send);
        return $announce_a['texts'];
    }
    // ระบบดึงประกาศ Global
    function global_announce($conn){
        $sql = "SELECT * from council_01.announce where id=2";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_array($result)['texts'];
        return $rows;
    }
?>