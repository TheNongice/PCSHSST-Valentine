<?php
    include('../config.php');
    session_start();
    $PRICE_PHOTO = 10; // ค่ารูป
    $QUEST_PRICE = 5; // ค่าคำถาม
    function error_redirect($msg){
        $_SESSION['alert'] = $msg;
        header('Location: ../request.php');
    }
    $error_msg = "<script>Swal.fire({title: 'พบข้อผิดพลาด',text: 'กรุณากรอกข้อมูลให้ถูกต้อง/ครบถ้วน!',icon: 'error',confirmButtonText: 'รับทราบ!',confirmButtonColor: '#F27474'})</script>";

    // เด้งออกถ้ายังไม่กรอกข้อมูลให้เรียบร้อย
    if(empty($_POST['QUEST1']) == 1 || empty($_POST['QUEST2']) == 1 || empty($_POST['QUEST3']) == 1){
        error_redirect($error_msg);
        die();
    }
    if($_POST['CLASS_REQUEST'] == "ชั้นมัธยมศึกษาปีที่ ...." || $_POST['CLASS_NO_RECIEVE'] == ""){
        error_redirect($error_msg);
    }
    if($_POST['CLASS_RECIEVE'] == "ชั้นมัธยมศึกษาปีที่ ...." || $_POST['CLASS_NO_RECIEVE'] == ""){
        error_redirect($error_msg);
    }
    if($_POST['NAME_RECIEVE'] == "NULL" || $_POST['NAME_REQUEST'] == "NULL"){
        error_redirect($error_msg);
    }
    
    // ดึงชื่อคนขอ
    $query_re = "SELECT * FROM class_std{$_POST['CLASS_REQUEST']}{$_POST['CLASS_NO_REQUEST']} where id={$_POST['NAME_REQUEST']}";
    $result_re = mysqli_query($conn,$query_re) or error_redirect($error_msg);
    $rows_re = mysqli_fetch_array($result_re);
    // ดึงชื่อคนถูกขอ
    $query_rec = "SELECT * FROM class_std{$_POST['CLASS_RECIEVE']}{$_POST['CLASS_NO_RECIEVE']} WHERE id={$_POST['NAME_RECIEVE']}";
    $result_rec = mysqli_query($conn,$query_rec) or error_redirect($error_msg);
    $rows_rec = mysqli_fetch_array($result_rec);
    // Data คนขอ
    $name_request = $rows_re['fullname'];
    $nickname_request = $rows_re['nickname'];
    $class_request = "{$_POST['CLASS_REQUEST']}/{$_POST['CLASS_NO_REQUEST']}"; # ชั้นเรียน เช่น (4)/(5)
    // Data คนถูกขอ
    $name_recieve = $rows_rec['fullname'];
    $nickname_recieve = $rows_rec['nickname'];
    $class_recieve = "{$_POST['CLASS_RECIEVE']}/{$_POST['CLASS_NO_RECIEVE']}"; # ชั้นเรียน เช่น (4)/(5)
    // คำถามรายละเอียดการจอง
    $question1 = $_POST['QUEST1'];
    $question2 = $_POST['QUEST2'];
    $question3 = $_POST['QUEST3'];
    $question4 = $_POST['QUEST4'];
    $question5 = $_POST['QUEST5'];
    $amount_photo = (int)$_POST['AMOUNT_PHOTO'];
    $dates_request = date("H:i:s น. d/m/Y");

    // คำนวณราคา
    if($amount_photo > 10 || $amount_photo < 1){
        error_redirect($error_msg);
    }else{
        $photo_price = $PRICE_PHOTO*$amount_photo;
        $amount_quest = 3;
        if($question1 == ""){
            error_redirect($error_msg);
        }
        if($question2 == ""){
            error_redirect($error_msg);
        }
        if($question3 == ""){
            error_redirect($error_msg);
        }
        if($question4 != ""){
            $amount_quest++;
        }
        if($question5 != ""){
            $amount_quest++;
        }
        $finalPrice = $photo_price+($amount_quest*$QUEST_PRICE);
        $submitQuery = "INSERT INTO request_list (`name_rq`, `nickname_rq`, `class_rq`, `name_rec`, `nickname_rec`, `class_rec`, `quest1`, `quest2`, `quest3`, `quest4`, `quest5`, `amount_photo`, `price`,`date_req`) VALUES ('{$name_request}', '{$nickname_request}', '{$class_request}', '{$name_recieve}', '{$nickname_recieve}', '{$class_recieve}', '{$question1}', '{$question2}', '{$question3}', '{$question4}', '{$question5}', '{$amount_photo}', '{$finalPrice}','{$dates_request}');";
        $result = mysqli_query($conn,$submitQuery);
        if($result == true){
            $query = "SELECT * FROM request_list WHERE name_rq = '{$name_request}' AND nickname_rq = '{$nickname_request}' AND class_rq = '{$class_request}' AND name_rec = '{$name_recieve}' AND nickname_rec = '{$nickname_recieve}' AND class_rec = '{$class_recieve}' AND quest1 = '{$question1}' AND quest2 = '{$question2}' AND quest3 = '{$question3}' AND quest4 = '{$question4}' AND quest5 = '{$question5}' AND amount_photo = '{$amount_photo}' AND price = '{$finalPrice}' AND date_req = '{$dates_request}';";
            $result = mysqli_query($conn,$query) or die('ไม่สามารถติดต่อไปยังฐานข้อมูล โปรดลองอีกครั้งในภายหลัง');
            $rows = mysqli_fetch_array($result);
            $id_reg = $rows['id'];
            msgLine($tokens_line,"มีการลงทะเบียนเข้ามาใหม่จาก\nชื่อ: {$nickname_request} \nชั้น: {$class_request} \nราคา: {$finalPrice} \nจำนวน: {$amount_photo} รูป\nเมื่อ: {$dates_request} \nไอดีลงทะเบียน: {$id_reg}");
            error_redirect("<script>Swal.fire({title: 'การจองเสร็จสิ้น!',text: 'หมายเลขไอดีการจองคือ: {$id_reg}',icon: 'success',confirmButtonText: 'รับทราบ',confirmButtonColor: '#5eba7d',footer: 'กรุณาเก็บหลักฐาน/จดจำรหัสการจองไว้เพื่อใช้ยืนยันการจองหรือติดต่อ'})</script>");
        }else{
            error_redirect("<script>Swal.fire({title: 'พบข้อผิดพลาด',text: 'ไม่สามารถบันทึกข้อมูลลงฐานข้อมูลได้ โปรดลองอีกครั้งในภายหลัง',icon: 'error',confirmButtonText: 'รับทราบ!',confirmButtonColor: '#F27474'})</script>");
        }
    }
?>