<?php 
  //load file LayoutTrangChu.php
  $this->fileLayout = "LayoutTrangTrong.php";
 ?>
 <?php 
 if(isset($_POST["send"])) {
     
    //include required phpmailer files
    require 'includes/PHPMailer.php';
    require 'includes/SMTP.php';
    require 'includes/Exception.php';
    //
    // use PHPMailer\PHPMailer\PHPMailer;
    // use PHPMailer\PHPMailer\SMTP;
    // use PHPMailer\PHPMailer\Exception;
    //

    //
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "nguyenthilethu2001vn@gmail.com";
    $mail->Password = "AT160447";
    $mail->Subject = "DEALBOOK shop";
    $mail->setFrom("nguyenthilethu2001vn@gmail.com");
    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["content"];
    $mail->addAddress($_POST["email"], 'Thu user');
    if($mail->Send()) {
        echo "Email Sent";
    }
    else {
        echo "Error";
    }
 }
 ?>
 <div class="container" style="margin-bottom: 34px;">
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="#">
                Liên hệ
                </a></li>
            </ol>
        </div>
    </section>
    <div class="row" style="margin-top: 26px;">
    
        <div class="col-lg-12 col-md-12">        
            <iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15673.422227952962!2d106.59787188614214!3d10.860538090618876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b088de30f3b%3A0xd2140740d360f705!2sHCM%20City%20University%20of%20Foreign%20Languages%20-%20Information%20Technology%20(HUFLIT)%20-%20Hoc%20Mon%20Campus!5e0!3m2!1sen!2s!4v1669137976972!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
 </div>