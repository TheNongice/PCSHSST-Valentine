<?php
    include('../../config.php');
    /*
    * check POST
    */
    $class_request = $_POST['CLASS_REQUEST'];
    $class_no_request = $_POST['CLASS_NO_REQUEST'];
    $class_db = "class_std{$class_request}{$class_no_request}";
    $class_id = isset($_POST['CLASS_REQUEST']) ? $_POST['CLASS_REQUEST'] : "";   
    $query = mysqli_query($conn,"SELECT * FROM ".$class_db."");
    // SELECT * FROM council_01.class_std43;
    $Rows = mysqli_num_rows($query);
    if ($Rows > 0) {
        while ($Result = mysqli_fetch_array($query)) {
            echo "<option value=\"" . $Result['id'] . "\">".$Result['fullname']." "."(".$Result['nickname'].")</option>";
        }
    }else{
        
    }
?>