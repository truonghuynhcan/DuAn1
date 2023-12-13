<?php
if (  isset($_POST['btnguilienhe'])  ==true ) {

	require "model/PHPMailer-master/src/PHPMailer.php"; 
	require "model/PHPMailer-master/src/SMTP.php"; 
	require 'model/PHPMailer-master/src/Exception.php'; 
	$noidung="<p>Có thư góp ý đến từ khách hàng </p> ";
	$noidung .= "<p>Họ tên : " . $_POST['ho'] ." " . $_POST['ten'] . "</p>";
	$noidung .="<p>Nội dung liên hệ:<br> ";
	$noidung .= $_POST['noidung'];


	$mail = new PHPMailer\PHPMailer\PHPMailer(true);
	try {
	  $mail->SMTPDebug = 0;  // 0,1,2: chế độ debug
	  $mail->isSMTP();  
	  $mail->CharSet  = "utf-8";
	  $mail->Host = 'smtp.gmail.com'; //địa chỉ server
	  $mail->SMTPAuth = true; 
	  $tennguoigui = 'Long'; //Nhập tên người gửi
	  $mail->Username='vangchian1010@gmail.com';
	  $mail->Password = 'pitiayhzeifpnoye'; // mật khẩu ứng dụng
	  $mail->SMTPSecure = 'ssl';   
	  $mail->Port = 465;              
	  $mail->setFrom('vangchian1010@gmail.com'); 
	  $mail->addAddress('anvcps31716@fpt.edu.vn'); //mail người nhận  
	  $mail->isHTML(true);  
	  $mail->Subject = 'Gửi thư góp ý';      
	  $mail->Body = nl2br($noidung); //nội dung thư
	  $mail->smtpConnect( array("ssl" => array(
		  "verify_peer" => false,
		  "verify_peer_name" => false,
		  "allow_self_signed" => true
	  )));
	  $mail->send();
	  echo "<script> 
	        alert('Chúng tôi đã nhận được thư góp ý của bạn. Xin trân trọng cảm ơn thư góp ý của bạn.');
			document.location='index.php';
			</script>
			";
	} catch (Exception $e) {
	   echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
	}


}
?>
<style>
		iframe,
audio,
video {
	border: none !important;
	box-shadow: none !important;
	width: 100%;
}

.contact-wrap {
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 5px;
    }

body {
	font-family: Arial, Helvetica, sans-serif;
  }
  
  * {
	box-sizing: border-box;
  }
  
  /* Style inputs */
  input[type=text], select, textarea {
	width: 100%;
	padding: 12px;
	border: 1px solid #ccc;
	margin-top: 6px;
	margin-bottom: 5px;
	resize: vertical;
  }
  
  input[type=submit] {
	background-color: #e0d2a2;
	color: white;
	padding: 12px 20px;
	border: none;
	cursor: pointer;
  }
  
  input[type=submit]:hover {
	background-color: goldenrod;
  }
  
  /* Style the container/contact section */
  .container {
	/* border-radius: 5px;
	background-color: #f2f2f2; */
	padding: 10px;
  }
  
  /* Create two columns that float next to eachother */
  .column {
	float: left;
	width: 50%;
	margin-top: 6px;
	padding: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
	content: "";
	display: table;
	clear: both;
  }
  
  /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 600px) {
	.column, input[type=submit] {
	  width: 100%;
	  margin-top: 0;
	}
  }
</style>
<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
		
      <div class="container">
        <h3 class="page-title">Góp Ý</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
                GÓP Ý VỀ CỬA HÀNG GALAXYBOOK. 
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="index.php?pg=home">Trang Chủ</a></li>
              <li><a href="index.php?pg=connect">Liên Hệ</a></li>
              <li><a href="index.php?pg=about">Về chúng tôi</a></li>
              <li class="active">Góp ý</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->

<div class="container">
  <div class="row">
    <div class="column">
	<img src="layout/images/logoGalaxyBook.png" alt="Image" style="width:100%">
    </div>
    <div class="column">
      <form action="" method="post">
        <label for="fname">Tên</label>
        <input type="text" id="fname" name="ten" placeholder="Tên người dùng..">
        <label for="lname">Họ</label>
        <input type="text" id="lname" name="ho" placeholder="Họ người dùng..">
		<label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="Email người dùng..">
        <label for="subject">Phản hồi</label>
        <textarea id="subject" name="noidung" placeholder="Nội dung.." style="height:170px"></textarea>
        <input type="submit" value="Gửi Liên Hệ" name="btnguilienhe" >
      </form>
    </div>
  </div>
</div>				
