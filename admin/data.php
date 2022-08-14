<?php
    session_start();
    if(!isset($_SESSION['Login'])){
        header('Location: /');
    }
    include('../config.php');
    if(!isset($_GET['book_id'])){
        die('API ERROR :: เรียกใช้ URLs ไม่ถูกต้อง');
    }
    $query = "SELECT * FROM request_list WHERE (id={$_GET['book_id']})";
    $result = mysqli_query($conn,$query);
    $rows = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) == 1){
        $id = $rows['id'];
        $name_rq = $rows['name_rq'];
        $nickname_rq = $rows['nickname_rq'];
        $class_rq = $rows['class_rq'];
        $name_rec = $rows['name_rec'];
        $nickname_rec = $rows['nickname_rec'];
        $class_rec = $rows['class_rec'];
        $quest1 = $rows['quest1'];
        $quest2 = $rows['quest2'];
        $quest3 = $rows['quest3'];
        $quest4 = $rows['quest4'];
        $quest5 = $rows['quest5'];
        $amount_photo = $rows['amount_photo'];
        $status_pub = $rows['status_pub'];
        $status_admin = $rows['status_admin'];
        $price = $rows['price'];
        $date_req = $rows['date_req'];
    }else{
        die('API ERROR :: ไม่พบข้อมูลผู้จองดังกล่าวในระบบ');
    }
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไข/ตรวจสอบข้อมูล > [ID: <?php echo $id;?>]</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/7b30317d32.js" crossorigin="anonymous"></script>
</head>
<body class="bg-data">
    <div class="container-fluid mt-4 formal-text">
        <div class="container-md">
            <div class="row">
                <div class="col-10">
                    <h3><i class="fas fa-user"></i> ผู้ขอ : <?php echo $name_rq." ({$nickname_rq}) <strong>[ID:{$id}]</strong>";?></h3>
                </div>
                <div class="col-2">
                    <a href="javascript:history.back();" type="button" class="btn btn-primary px-4"><i class="fas fa-angle-left"></i></a>
                </div>
            </div>
            <hr style="border: 3px solid #f4a024;">
            <form action="include/submit_data.php" method="POST">
                <div class="row my-2">
                    <div class="col-4">
                        <label for="idCheck" class="col-form-label">ID: </label>
                    </div>
                    <div class="col-7">
                        <input class="form-control" name="id" value="<?php echo $id;?>" placeholder="<?php echo $id;?>" id="idCheck" type="text" readonly="readonly">
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="name_rq" class="col-form-label">ชื่อผู้ขอ: </label>
                    </div>
                    <div class="col-7">
                        <input class="form-control" placeholder="<?php echo $name_rq;?>" id="name_rq" type="text" disabled>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="idCheck" class="col-form-label">ชั้นเรียนผู้ขอ: </label>
                    </div>
                    <div class="col-7">
                        <input class="form-control" placeholder="<?php echo $class_rq;?>" id="idCheck" type="text" disabled>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="idCheck" class="col-form-label">ชื่อผู้ถูกขอ: </label>
                    </div>
                    <div class="col-7">
                        <input class="form-control" placeholder="<?php echo $name_rec;?>" id="idCheck" type="text" disabled>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="idCheck" class="col-form-label">ชั้นเรียนผู้ถูกขอ: </label>
                    </div>
                    <div class="col-7">
                        <input class="form-control" placeholder="<?php echo $class_rec;?>" id="idCheck" type="text" disabled>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="idCheck" class="col-form-label">จำนวนรูปภาพ: </label>
                    </div>
                    <div class="col-7">
                        <select class="form-control" name="amount_photo" id="idCheck">
                            <option value="<?php echo $amount_photo;?>"><?php echo $amount_photo;?> (ปัจจุบัน)</option>
                            <option value="0">----------</option>
                            <?php
                                for($rounds = 1; $rounds<=10 ;$rounds++){
                                    echo "<option value='$rounds'>$rounds</option>";
                                }
                            ?>
                        </select>
                    </div>
                    <div class="col-auto">
                        <p class="col-form-label">รูปภาพ</p>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="quest1" class="col-form-label">คำถามที่ 1:</label>
                    </div>
                    <div class="col-7">
                        <textarea name="quest1" id="quest1" rows="5" class="form-control"><?php echo $quest1;?></textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="quest2" class="col-form-label">คำถามที่ 2:</label>
                    </div>
                    <div class="col-7">
                        <textarea name="quest2" id="quest2" rows="5" class="form-control"><?php echo $quest2;?></textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="quest3" class="col-form-label">คำถามที่ 3:</label>
                    </div>
                    <div class="col-7">
                        <textarea name="quest3" id="quest3" rows="5" class="form-control"><?php echo $quest3;?></textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="quest4" class="col-form-label">คำถามที่ 4:</label>
                    </div>
                    <div class="col-7">
                        <textarea name="quest4" id="quest4" rows="5" class="form-control"><?php echo $quest4;?></textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="quest5" class="col-form-label">คำถามที่ 5:</label>
                    </div>
                    <div class="col-7">
                        <textarea name="quest5" id="quest5" rows="5" class="form-control"><?php echo $quest5;?></textarea>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="status_pub" class="col-form-label">สถานะ (สาธารณะ):</label>
                    </div>
                    <div class="col-7">
                        <select name="status_pub" class="form-control" id="status_pub">
                            <option value="<?php echo $status_pub;?>"><?php echo $status_pub;?> (ปัจจุบัน)</option>
                            <option value="0">----------------</option>
                            <option value="ยังไม่ชำระค่าจอง">ยังไม่ชำระค่าจอง</option>
                            <option value="ชำระค่าจองแล้ว">ชำระค่าจองแล้ว</option>
                            <option value="ยกเลิกการจอง">ยกเลิกการจอง</option>
                        </select>
                    </div>
                </div>
                <div class="row my-2">
                    <div class="col-4">
                        <label for="date_req" class="col-form-label">วันที่ทำรายการ:</label>
                    </div>
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="<?php echo $date_req;?>" disabled>
                    </div>
                </div>
                <center class="my-4">
                    <button type="submit" class="btn btn-success px-3"><i class="fas fa-clipboard-list"></i> ปรับปรุงข้อมูล</button>
                    <a onClick="deleteDiag(<?php echo$id;?>)" class="btn btn-danger px-4"><i class="fas fa-trash"></i> ลบข้อมูล</a>
                </center>
            </form>
        </div>
    </div>
 <script>
         function deleteDiag(id){
            if(confirm("ยืนยันการลบไอดีการจองที่ "+ id  +" หรือไม่?")){
                window.location.href='remove_req.php?del='+id;
                return true;

            }
        }
 </script>
</body>
</html>