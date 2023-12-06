<?php
session_start();
include("model/pdo.php");
include("model/user.php");
include("model/m_book.php");

if(isset($_GET['pg'])) {
    switch($_GET['pg']) {
        // admin ----------------------------------
        case 'ad':
            switch($_GET['active']) {
                case 'home':
                    $content = "ad-home";
                    break;
                default:
                    $content = "ad-home";
            }
            break;
        // book ----------------------------------
        case 'product':
            $content = "product";
            break;
        case 'detail':
            $content = "detail";
            break;

        // web ----------------------------------
        case 'checkout':
            $content = "checkout";

            break;
        case 'thank':
            $content = "thank";
            break;
        case 'cart':
            $content = "cart";
            break;
        // case 'addcart':
        //     if(isset($_POST['submit'])&&($_POST['submit'])){
        //         $hinhanh =$_POST['hinhanh'];
        //         $ten = $_POST['TenSach'];
        //         $gia = $_POST['Gia'];
        //         $id = $_POST['Id'];
        //         $sl =1;
        //         $sp = [$id,$hinhanh,$ten,$gia,$sl];
        //         //thêm sp vào mảng cart
        //         //$_SESSION['cart'][]=$sp;
        //         array_push($_SESSION['cart'],$sp);
        //         //chuyển trang
        //         header('location: cart.php');
        //         }
        // break;
        case 'connect':
            $content = "connect";
            break;
        case 'about':
            $content = "about";
            break;
        case 'home':
            $content = "home";
            break;
        case 'detail':
            $content = 'detail';
            break;

        // user ----------------------------------
        case 'my-profile':
            if(isset($_FILES['avatar'])) {
                $newAvatar = $_FILES['avatar']['name'];
                update_avatar($_SESSION['user']['Id'], $newAvatar);
                $_SESSION['user']['Avatar'] = $newAvatar;
            }
            if(isset($_POST['update--info'])) {
                $newName = $_POST['name'];

                update_user_name($_SESSION['user']['TaiKhoan'], $newName);

                // Cập nhật thông tin trong SESSION
                $_SESSION['user']['HoVaTen'] = $newName;
            }
            $content = "my-profile";
            break;

        case 'login':
            if(isset($_POST['wp-submit'])) {
                // xác định giá trị đầu vào
                $username = $_POST['user'];
                $password = $_POST['pass'];
                // xử lý
                // so sánh với db
                $user_info = checkuser($username, $password);
                if(is_array($user_info) && $user_info != " ") {
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
            if(isset($_POST["forgotpassword-submit"]) == true) {
                $taikhoan = $_POST['taikhoan'];
                $email = $_POST['email'];
                $check = checkforgotpassword($taikhoan, $email);
                header('location: index.php?pg=login');

            }

            $content = "forgotpassword";
            break;
        case 'logout':
            unset($_SESSION['user']);
            header('location: index.php');
            break;
        case 'register':
            if(isset($_POST['signup-form-submit'])) {
                // xác định giá trị đầu vào
                $hovaten = $_POST['hovaten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $taikhoan = $_POST['taikhoan'];
                $matkhau = $_POST['matkhau'];
                $matkhau2 = $_POST['matkhau2'];

                if($matkhau !== $matkhau2) {
                    $tb = 'Mật khẩu xác minh không đúng';
                } else {
                    // Thực hiện đăng ký người dùng
                    $result = registerUser($hovaten, $diachi, $email, $sdt, $taikhoan, $matkhau);

                    if($result) {
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

        default:
            $content = "home";
    }
} else {
    $content = "home";
}
if(isset($_GET['pg']) && $_GET['pg'] == 'ad') {
    include("view/ad-header.php");
    include("view/".$content.".php");
    include("view/ad-footer.php");
} else {
    include("view/header.php");
    include("view/".$content.".php");
    include("view/footer.php");

}

?>