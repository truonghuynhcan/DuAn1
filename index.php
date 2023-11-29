<?php
session_start();
include("model/pdo.php");
include("model/user.php");
include("model/m_book.php");

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {
        case 'my-profile':
            if(isset($_FILES['avatar'])){
                $newAvatar = $_FILES['avatar']['name'];
                update_avatar($_SESSION['user']['Id'], $newAvatar);
                $_SESSION['user']['Avatar'] = $newAvatar;
            }
            if(isset($_POST['update--info'])){
                $newName = $_POST['name'];

                update_user_name($_SESSION['user']['TaiKhoan'], $newName);

                // Cập nhật thông tin trong SESSION
                $_SESSION['user']['HoVaTen'] = $newName;
            }
            $content = "my-profile";    
            break;
        case 'connect':
            $content = "connect";
            break;
        case 'about':
            $content = "about";
            break;
        case 'home':
            $content = "home";
            break;
        case 'login':
            if (isset($_POST['wp-submit'])) {
                // xác định giá trị đầu vào
                $username = $_POST['user'];
                $password = $_POST['pass'];
                // xử lý
                // so sánh với db
                $user_info = checkuser($username, $password);
                if (is_array($user_info) && $user_info != " ") {
                    $_SESSION['user'] = $user_info;
                    header('location: index.php?pg=home');
                    exit();
                } else {
                    $tb = "Tài khoản không tồn tại";
                }
                //trả kết quả
            }
            $content = "login";
            break;
        case 'forgotpassword':
            if (isset($_POST["forgotpassword-submit"]) == true) {
                $taikhoan = $_POST['taikhoan'];
                $email = $_POST['email'];
                $check = checkforgotpassword($taikhoan, $email);
            }

            $content = "forgotpassword";
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('location: index.php');
            break;
        case 'register':
            if (isset($_POST['signup-form-submit'])) {
                // xác định giá trị đầu vào
                $hovaten = $_POST['hovaten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $matkhau2 = $_POST['matkhau2'];

                if ($matkhau !== $matkhau2) {
                    $tb = 'Mật khẩu xác minh không đúng';
                } else {
                    // Thực hiện đăng ký người dùng
                    $result = registerUser($hovaten, $diachi, $email, $sdt, $taikhoan, $matkhau);

                    if ($result) {
                        // Đăng ký thành công, có thể chuyển hướng hoặc hiển thị thông báo
                        $tb = '';
                        header('location: index.php?pg=login');
                        exit();
                    } else {
                        $tb = "Đăng ký không thành công. Vui lòng thử lại.";
                    }
                }
            }
            $content = "register";
            break;
            case 'detail':
                $content ='detail';
                break;
        default:
            $content = "home";
    }
} else {
    $content = "home";
}

include("view/header.php");
include("view/" . $content . ".php");
include("view/footer.php");
?>