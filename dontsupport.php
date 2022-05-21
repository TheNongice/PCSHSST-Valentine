<?php
    $title = "ไม่สามารถให้บริการเว็บไซต์ได้";
    $reason = "เนื่องจากท่านไม่ได้เปิด JavaScript ไว้กรุณาเปิดใช้งานเพื่อใช้ในการลงทะเบียน";
    $ua = htmlentities($_SERVER['HTTP_USER_AGENT'], ENT_QUOTES, 'UTF-8');
    if (preg_match('~MSIE|Internet Explorer~i', $ua) || (strpos($ua, 'Trident/7.0') !== false && strpos($ua, 'rv:11.0') !== false)) {
        $title = "ขณะนี้ท่านกำลังใช้เบราเซอร์ที่ไม่รองรับ";
        $reason = "กรุณาใช้งานเบราเซอร์อื่นที่รองรับ HTML5 และ CSS3 โดยเบราเซอร์ที่รองรับเว็บมีดังนี้";
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>
    <head>
        <title>:: แจ้งความเข้ากันได้ของ Client ::</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
        <div class="container" style="padding-top: 1rem;">
            <div class="alert alert-error" style="padding-bottom: 1rem;">
                <center>
                    <h3><strong>คำเตือน :: <?php echo $title;?></strong></h3>
                    <p><?php echo $reason;?></p>
                    <img src="./dontsupport.jpg" alt="Chrome Firegox Safari Edge เวอร์ชั่นใหม่ล่าสุด"><br>
    
                </center>
            </div>
        </div>
    </body>
</html>