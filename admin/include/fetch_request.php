<?php
session_start();
if(!isset($_SESSION['Login'])){
    die('API ERROR :: กรุณาเข้าสู่ระบบด้วยบัญชีที่มีสิทธิ์');
}
?>
<table class="table table-hover table-fluid formal-text">
    <thead>
    <tr>
    <th class="text-nowrap" scope="col">ID</th>
    <th class="text-nowrap" scope="col">ชื่อผู้ขอ</th>
    <th class="text-nowrap" scope="col">ชั้นเรียน</th>
    <th class="text-nowrap" scope="col">ชื่อผู้ถูกขอ</th>
    <th class="text-nowrap" scope="col">ชั้นเรียน</th>
    <th class="text-nowrap" scope="col">คำถามที่ 1</th>
    <th class="text-nowrap" scope="col">คำถามที่ 2</th>
    <th class="text-nowrap" scope="col">คำถามที่ 3</th>
    <th class="text-nowrap" scope="col">คำถามที่ 4</th>
    <th class="text-nowrap" scope="col">คำถามที่ 5</th>
    <th class="text-nowrap" scope="col">จำนวนรูปภาพ</th>
    <th class="text-nowrap" scope="col">สถานะการจอง</th>
    <th class="text-nowrap" scope="col">ราคาค่าจอง</th>
    <th class="text-nowrap" scope="col">แก้ไขข้อมูล</th>
    <th class="text-nowrap" scope="col">ลบข้อมูล</th>
    </tr>
    </thead>
    <tbody>         
<?php
include('../../config.php');
$max_in_page = 10;
if(isset($_GET['p'])){
    $page_id = $_GET['p'];
}else{
    $page_id = 1;
}
$start = ($page_id-1)*$max_in_page;
$query = "SELECT * FROM request_list LIMIT {$start},{$max_in_page}";
$result = mysqli_query($conn,$query) or die('API ERROR :: You don\'t have access this page!');
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<th scope='row'>{$row['id']}</th>";
    echo "<td class='text-nowrap'>{$row['name_rq']} ({$row['nickname_rq']})</td>";
    echo "<td class='text-nowrap'>{$row['class_rq']}</td>";
    echo "<td class='text-nowrap'>{$row['name_rec']} ({$row['nickname_rec']})</td>";
    echo "<td class='text-nowrap'>{$row['class_rec']}</td>";
    echo "<td>". substr($row['quest1'], 0, 10) ."...</td>";
    echo "<td>". substr($row['quest2'], 0, 10) ."...</td>";
    echo "<td>". substr($row['quest3'], 0, 10) ."...</td>";
    echo "<td>". substr($row['quest4'], 0, 10) ."...</td>";
    echo "<td>". substr($row['quest5'], 0, 10) ."...</td>";
    echo "<td>{$row['amount_photo']}</td>";
    echo "<td class='text-nowrap'>{$row['status_pub']}</td>";
    echo "<td class='text-nowrap'>{$row['price']} บาท</td>";
    echo "<td><a href=\"./data.php?book_id={$row['id']}\" type=\"button\" class=\"btn btn-success\"><i class=\"fas fa-cog\"></i></a></td>";
    echo "<td><button onClick=\"deleteDiag({$row['id']})\" type=\"button\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i></button></td>";
    echo "</tr>";
}
?>
</tbody>
</table>
<?php
    $sql = "SELECT * FROM request_list";
    $query2 = mysqli_query($conn, $sql);
    $total_record = mysqli_num_rows($query2);
    $total_page = ceil($total_record / $max_in_page);
?>
<nav aria-label="pagination">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="./list.php?p=1"><i class="fas fa-step-backward"></i></a></li>
    <?php for($i=1;$i<=$total_page;$i++){ ?>
            <li class="page-item"><a class="page-link" href="./list.php?p=<?php echo $i;?>"><?php echo $i;?></a></li>
        <?php } ?>
    <li class="page-item"><a class="page-link" href="./list.php?p=<?php echo $total_page;?>"><i class="fas fa-step-forward"></i></a></li>
  </ul>
</nav>