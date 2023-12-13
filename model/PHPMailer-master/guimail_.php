<?php 
require "PHPMailer-master/src/PHPMailer.php"; 
require "PHPMailer-master/src/SMTP.php"; 
require 'PHPMailer-master/src/Exception.php'; 
$mail = new PHPMailer\PHPMailer\PHPMailer(true);
try {
  $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug
  $mail->isSMTP();  
  $mail->CharSet  = "utf-8";
  $mail->Host = 'smtp.gmail.com'; //địa chỉ server
  $mail->SMTPAuth = true; 
  $tennguoigui = 'Long'; //Nhập tên người gửi
  $mail->Username='emailnguoigui@gmail.com';
  $mail->Password = 'mậtkhẩu'; // mật khẩu ứng dụng
  $mail->SMTPSecure = 'ssl';   
  $mail->Port = 465;              
  $mail->setFrom('emailnguoigui@gmail.com'); 
  $mail->addAddress($_POST['guiden']); //mail người nhận  
  $mail->isHTML(true);  
  $mail->Subject = 'Gửi thư từ php';      
  $mail->Body = nl2br($_POST['noidung']); //nội dung thư
  $mail->smtpConnect( array("ssl" => array(
      "verify_peer" => false,
      "verify_peer_name" => false,
      "allow_self_signed" => true
  )));
  $mail->send();
  echo 'Đã gửi mail xong';
} catch (Exception $e) {
   echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
}