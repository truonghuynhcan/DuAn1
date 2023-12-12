<?php
session_start();
require_once "functions.php";
if (checklogin()==false){  header('Location: login.php'); exit(); }
$page = $_GET['page'] ?? "theloai";
?>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link rel="stylesheet" href="./main.css">
   <title>Quản trị web tổng hợp</title>
   <style>
      .error-msg {
         width: 100%;
         text-align: center;
         color: rgb(92, 2, 2);
         background: rgba(218, 77, 77, 0.729);
         border-radius: 5px;
         margin: 5px 0;
         font-weight: 600;
      }
   </style>
</head>
<body>
   <!-- Nav tabs -->
   <div class="container">
   <?php require_once "menu.php";?>
   <!-- Tab panes -->
   <div class="tab-content">
      <div class="tab-pane active" id="">
      <?php
      // lấy ra danh mục thể loại hiên thị trong select
      $sql="SELECT * FROM theloai";
      $listTL=executeResult($sql);
      $msg="";
      $h2="THÊM NGƯỜI DÙNG MỚI ";
      $idLT=$_GET['idLT']??"";
      if($idLT!=""){
         $h2="CHỈNH SỬA LOẠI TIN";
         $sql="SELECT * FROM loaitin WHERE idLT =$idLT";
         $result=executeResult($sql);
      }      
      if(isset($_POST['submit'])){
         $name=$_POST['name']??"";
         $thutu=$_POST['thutu']??"";
         $anHien=$_POST['anHien']??0;
         $lang=$_POST['lang']??"vi";
         $idTL=$_POST['TL'];
         $MoTa=$_POST['MoTa'];
         if($name!="" && $thutu!=""){
            if($idLT!=""){
                  $sql="UPDATE loaitin set Ten='$name',
                     ThuTu=$thutu, AnHien=$anHien, lang  ='$lang', idTL =$idTL,
                     MoTa='$MoTa'
                     WHERE idLT =$idLT";
                  $kq=execute($sql);
                  header('Location: index.php?page=loaitin'); 
                  exit();
            }
            else{
                  $sql="INSERT INTO loaitin(Ten,ThuTu,AnHien,lang,idTL,MoTa)
                  VALUES ('$name',$thutu,$anHien,'$lang',$idTL,'$MoTa')";
                  $kq=execute($sql); 
                  header('Location: index.php?page=loaitin'); die();
            }
         }
         else $msg="Vui lòng nhập đầy đủ thông tin";         
      }
      ?>
      <div class="container col-8 m-auto">
      <h2 class="py-2 text-center h4 "><?= $h2 ?></h2>
      <form action="" method="post">
         <div class="mb-3">
               <label for="">Tài Khoản</label>
               <input type="text" name="name" value="<?= $result[0]['Ten']??"" ?>" class="form-control bg-light" >
         </div>
         <div class="mb-3">
               <label for="">Email</label>
               <input type="text" name="name" value="<?= $result[0]['Ten']??"" ?>" class="form-control bg-light" >
         </div>
         <div class="mb-3">
               <label for="">Mật Khẩu</label>
               <input type="text" name="name" value="<?= $result[0]['Ten']??"" ?>" class="form-control bg-light" >
         </div>
         <div class="mb-3">
               <label for="">Họ và Tên</label>
               <input type="text" name="name" value="<?= $result[0]['Ten']??"" ?>" class="form-control bg-light" >
         </div>
         <div class="mb-3">
               <label for="">Địa Chỉ</label>
               <input type="text" name="name" value="<?= $result[0]['Ten']??"" ?>" class="form-control bg-light" >
         </div>
         <div class="mb-3">
               <label for="">SDT</label>
               <input type="text" name="name" value="<?= $result[0]['Ten']??"" ?>" class="form-control bg-light" >
         </div>
         <button class="btn btn-success px-4" name="submit">Lưu</button>
         <div class="error-msg"><?= $msg ?></div>
      </form>
      </div>
      </div> <!-- tab-pane -->
   </div>
   </div>
</body>
</html>