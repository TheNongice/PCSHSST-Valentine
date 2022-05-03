<?php
    error_reporting(0);
    // โค้ดเหล่านี้จะทำงานก็ต่อเมื่อหน้าเพจนั้นๆ เชื่อมกับ config.php เท่านั้น!!!
    $sql = "SELECT * from council_01.announce where id=2";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_array($result);
?>
<div class="container-sm formal-text" style="padding: 1rem;">
    <div class="card">
        <div class="card-header bg-warning">
            <i class="fas fa-bullhorn"></i> ประกาศ
        </div>
        <div class="card-body">
            <?php 
            echo $rows['texts'];
            echo $rows['lastchanged'];
            ?>
        </div>
    </div>
</div>