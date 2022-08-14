<?php
    error_reporting(1);
    $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
    if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
	    header('Location: dontsupport.php');
    }
    $conn = mysqli_connect('localhost','root','','council_01');
    $tokens_line = "YOUR_LINE_TOKENS";
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
        $sql_1 = "SELECT * FROM announce";
        $query = mysqli_query($conn,$sql_1);
        $max_id = mysqli_num_rows($query);
        $sql = "SELECT * from council_01.announce where id={$max_id}";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_array($result)['texts'];
        return $rows;
    }

    function title_announce($conn){
        $sql_1 = "SELECT * FROM announce";
        $query = mysqli_query($conn,$sql_1);
        $max_id = mysqli_num_rows($query);
        $sql = "SELECT * from council_01.announce where id={$max_id}";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_array($result)['titles'];
        return $rows;
    }


    function msgLine($tokens,$msg){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");
        $chOne = curl_init(); 
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt( $chOne, CURLOPT_POST, 1); 
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$msg); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$tokens.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec( $chOne ); 
    
        //Result error 
        if(curl_error($chOne)) 
        { 
            echo 'error:' . curl_error($chOne); 
        } 
        else { 
            $result_ = json_decode($result, true); 
            echo "status : ".$result_['status']; echo "message : ". $result_['message'];
        } 
        curl_close( $chOne );
    }
    // ค่าส่งทพรายการของรักส่งยิ้มให้แก้ไขในโฟล์เดอร์ ./api/box-request.php
?>