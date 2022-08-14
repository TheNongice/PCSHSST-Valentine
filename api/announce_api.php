<?php
    // โค้ดเหล่านี้จะทำงานก็ต่อเมื่อหน้าเพจนั้นๆ เชื่อมกับ config.php เท่านั้น!!!
    $id = mysqli_real_escape_string($conn,$_GET['id_t']);
    if($id == "1"){
        die("**ID ประกาศนี้เป็นประกาศสงวนของเจ้าหน้าที่ ไม่สามารถอ่านได้**");
    }
    $sql = "SELECT * from council_01.announce where id={$id}";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 0){
        die("**ไม่พบหมายเลขประกาศที่ท่านเรียกขอ**");
    }
    $rows = mysqli_fetch_array($result);

?>