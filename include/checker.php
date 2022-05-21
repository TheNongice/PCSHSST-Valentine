<?php
$idbook = mysqli_real_escape_string($conn,$_GET['book_id']);
$query = "SELECT * FROM request_list WHERE id = '{$idbook}'";
$result = mysqli_query($conn,$query);
$data = mysqli_fetch_array($result);
if(mysqli_num_rows($result) == 1){
    $name_rq = $data['name_rq'];
    $nickname_rq = $data['nickname_rq'];
    $price = $data['price'];
    $status = $data['status_pub'];
    $date_req = $data['date_req'];
    $check = 1;
}else{
    echo "<script>Swal.fire({title: 'พบข้อผิดพลาด',text: 'ไม่พบการลงทะเบียนในฐานข้อมูล!',icon: 'error',confirmButtonText: 'รับทราบ!',confirmButtonColor: '#F27474',footer: '<p class=\"fst-italic\">หากทำการลงทะเบียนแล้วโปรดแจ้งผู้ดูแลระบบ</p>'})</script>";
}
?>
<div class="container-sm">
    <div class="card">
        <div class="card-header bg-warning">
            <i class="fas fa-info-circle"></i> ผลการค้นหา
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">
            <?php 
                if(isset($check)){
                    echo "<p><strong><i class='fas fa-user'></i> ชื่อผู้ขอ:</strong> {$name_rq} ({$nickname_rq})</p>";
                    echo "<p><strong><i class='fas fa-money-bill-alt'></i> จำนวนราคา</strong>: {$price} บาท</p>";
                    echo "<p><strong><i class='fas fa-comment-alt'></i> สถานะการจอง</strong>: {$status}</p>";
                    echo "<p><strong><i class='fas fa-calendar'></i> วันที่ทำรายการ</strong>: {$date_req}</p>";
                }else{
                    echo "ไม่ตรวจพบการจอง";
                }
            ?>
                </div>
                <div class="col-sm-4 text-center">
                    <?php
                        if(isset($check)){
                            echo '<div class="alert alert-danger" roles="alert"><h1><i class="fas fa-exclamation-triangle"></i></h1>
                            <h3>การตรวจสอบดังกล่าวนี้<br>ไม่สามารถตรวจได้ทุกอย่างที่กรอก</h3></div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>