<?php
    error_reporting(0);
    if($_SESSION['Roles']!="Admin"){
        die('You don\'t have access this page.');
    }else{
        include('../config.php');
        $sql = "SELECT * from council_01.announce where id=1";
        $result = mysqli_query($conn,$sql);
        $dump_text = mysqli_fetch_array($result)['texts'];
    }
?>
<form class="pure-form" method="POST" action="./include/monitor/api_an.php">
    <textarea name="editor" id="ckeditor"><?php echo $dump_text;?></textarea>
    <script>
        CKEDITOR.replace( 'ckeditor', {
            language: 'th',
            uiColor: '#ec5656'
        });
    </script>
    <button class="pure-button" style="background: #1CB841;color:#fff;" type="submit">Submit</button>
</form>