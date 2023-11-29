<?php
require_once 'pdo.php';

function update_avatar($Id, $newAvatar){
    $sql = "UPDATE nguoidung SET Avatar = ? WHERE Id = ?";
    pdo_execute($sql, $newAvatar, $Id);
    return true;
}

function update_user_name($taikhoan, $newName){
    $sql = "UPDATE nguoidung SET HoVaTen = ? WHERE TaiKhoan = ?";
    pdo_execute($sql, $newName, $taikhoan);
    return true;
}


// function user_insert($username, $password, $email){
//     $sql = "INSERT INTO user(username, password, email) VALUES (?, ?, ?)";
//     return pdo_execute_returnid($sql, $username, $password, $email);
// }
function registerUser($hovaten, $diachi, $email, $sdt, $taikhoan, $matkhau) {
    global $global_conn;

    // chuyển sang dạng md5
    $hashedPassword = md5($matkhau);

    // Thực hiện thêm dữ liệu vào bảng nguoidung
    $sql = "INSERT INTO nguoidung (HoVaTen, DiaChi, Email, SDT, TaiKhoan, MatKhau, NgayTao) VALUES (?, ?, ?, ?, ?, ?, NOW())";

    try {
        pdo_execute($sql, $hovaten, $diachi, $email, $sdt, $taikhoan, $hashedPassword);
        return true;
    } catch (PDOException $e) {
        // Xử lý lỗi nếu cần
        return false;
    }
}

function user_update($username,$password,$email,$diachi,$dienthoai,$role,$id){
    $sql = "UPDATE user SET username=?,password=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql,$username,$password,$email,$diachi,$dienthoai,$role,$id);    
}

// function checkuser($username,$password){
//     $sql="Select * from nguoidung where TaiKhoan=? and MatKhau=?";
//     return pdo_query_one($sql, $username,$password);
//     // if(is_array($kq)&&(count($kq))){
//     //     return $kq["id"];
//     // }else{
//     //     return 0;
//     // }
// }
function checkuser($username, $password) {
    // HasDh mật khẩu trước khi so sánh với CSL
    $hashed_password = md5($password);

    $sql = "SELECT * FROM nguoidung WHERE TaiKhoan = ? AND MatKhau = ?";
    $user_info = pdo_query_one($sql, $username, $hashed_password);

    return $user_info;
}

function checkforgotpassword($taikhoan, $email){
    global $global_conn;
    
    $sql = "SELECT * FROM nguoidung WHERE TaiKhoan=? AND Email=?";
    $stmt = $global_conn->prepare($sql); // tạo 1 prepare statement
    $stmt->execute([$taikhoan, $email]);

    // Kiểm tra lỗi ở đây
    if ($stmt->rowCount() > 0) {
        $matkhaumoi =  rand(100000,999999);
        $hashed_password = md5($matkhaumoi);

        $update_sql = "UPDATE nguoidung SET MatKhau=? WHERE TaiKhoan=? AND Email=?";
        $update_stmt = $global_conn->prepare($update_sql); // tạo 1 prepare statement
        $update_stmt->execute([$hashed_password, $taikhoan, $email]);

        //gửi mail, mật khẩu mới
        guimatkhaumoi($taikhoan, $email, $matkhaumoi);

        // Chuyển hướng người dùng về trang login
        header("Location: index.php?pg=login");
        exit();
    } else {
        // Lưu thông báo lỗi vào session
        $_SESSION['forgotpassword_error'] = "Lỗi: Tài khoản hoặc email không hợp lệ";

        // Chuyển hướng người dùng về trang forgotpassword
        header("Location: index.php?pg=forgotpassword");
        exit();
    }
}


function guimatkhaumoi($taikhoan ,$email, $matkhaumoi){
    require "PHPMailer-master/src/PHPMailer.php"; 
    require "PHPMailer-master/src/SMTP.php"; 
    require 'PHPMailer-master/src/Exception.php'; 
    $mail = new PHPMailer\PHPMailer\PHPMailer(true);//true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug
        $mail->isSMTP();  
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'canthps36499@fpt.edu.vn'; // SMTP username
        $mail->Password = 'kwwu utyg xmoo czep';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 587;  // port to connect to                
        $mail->setFrom('canthps36499@fpt.edu.vn', 'GalaxyBook' ); 
        $mail->addAddress($email, $taikhoan); 
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Thư gửi lại mật khẩu'; //tiêu đề thư
        $noidungthu = '
            <p>Bạn nhận được thư này, do bạn hoặc ai đó yêu cầu cập nhật mật khẩu mới từ Website galaxybook.shop</p>
            Mật khẩu mới của bạn là '.$matkhaumoi
        ; 
        $mail->Body = $noidungthu;
        $mail->smtpConnect( array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
        echo 'Đã gửi mail xong';
    } catch (Exception $e) {
        echo 'Error: ', $mail->ErrorInfo;
    }
}
// function get_user($id){
//     $sql="Select * from user where id=? ";
//     return pdo_query_one($sql, $id);
// }

// function user_update($ma_kh, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat, $vai_tro){
//     $sql = "UPDATE user SET mat_khau=?,ho_ten=?,email=?,hinh=?,kich_hoat=?,vai_tro=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau, $ho_ten, $email, $hinh, $kich_hoat==1, $vai_tro==1, $ma_kh);
// }

// function user_delete($ma_kh){
//     $sql = "DELETE FROM user  WHERE ma_kh=?";
//     if(is_array($ma_kh)){
//         foreach ($ma_kh as $ma) {
//             pdo_execute($sql, $ma);
//         }
//     }
//     else{
//         pdo_execute($sql, $ma_kh);
//     }
// }

// function user_select_all(){
//     $sql = "SELECT * FROM user";
//     return pdo_query($sql);
// }

// function user_select_by_id($ma_kh){
//     $sql = "SELECT * FROM user WHERE ma_kh=?";
//     return pdo_query_one($sql, $ma_kh);
// }

// function user_exist($ma_kh){
//     $sql = "SELECT count(*) FROM user WHERE $ma_kh=?";
//     return pdo_query_value($sql, $ma_kh) > 0;
// }

// function user_select_by_role($vai_tro){
//     $sql = "SELECT * FROM user WHERE vai_tro=?";
//     return pdo_query($sql, $vai_tro);
// }

// function user_change_password($ma_kh, $mat_khau_moi){
//     $sql = "UPDATE user SET mat_khau=? WHERE ma_kh=?";
//     pdo_execute($sql, $mat_khau_moi, $ma_kh);
// }