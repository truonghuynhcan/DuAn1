<?php
session_start();
include("model/pdo.php");
include("model/user.php");
include("model/m_book.php");
include("model/m_cart.php");

if (isset($_GET['pg'])) {
    switch ($_GET['pg']) {

        // admin ----------------------------------
        case 'ad':
            $content = "index";
            break;


        // book ----------------------------------
        case 'product':
            $content = "product";
            break;
        case 'detail':
            $content = "detail";
            break;


        // web ----------------------------------
        case 'gop-y':
            $content = "gop-y";
            break;
        case 'timkiem':
            $content = 'timkiem';
            break;
        case 'checkout':
            $content = "checkout";

            break;
        case 'thank':
            $content = "thank";
            break;
        case 'cart':
            if (isset($_SESSION['user'])) {
                // hàm thêm sản phẩm
                if (isset($_GET['addItemId'])) {
                    $userId = $_SESSION['user']['Id'];
                    $newBookId = $_GET['addItemId'];
                    // Mảng hiện tại trong session
                    $cart = getCartByUserId($userId);
                    if ( $cart !== null) {
                        $exit = false;
                        foreach ($cart as $item) {
                            if ($item['Id_Sach'] == $newBookId) {
                                $newSoLuong = $item['SoLuong'] + 1;
                                updateSoLuongInGioHang($newBookId, $newSoLuong, $userId);
                                $exit = true;
                                break;
                            } 
                        }
                        if (!$exit) {
                            insertIntoGioHang($newBookId, $userId);
                        }
                    }else{
                        insertIntoGioHang($newBookId, $userId); 
                    }
                    loadCart();
                    header('LOCATION: index.php?pg=cart');
                    exit();
                }
                //hàm xóa sản phẩm
                if (isset($_GET['deleteBookId'])) {
                    $deleteCartItem = deleteCartItem($_SESSION['user']['Id'], $_GET['deleteBookId']);
                    if ($deleteCartItem) {
                        loadCart();
                        echo '<script>';
                        echo 'alert("Đã xóa thành công");';
                        echo 'window.location.href ="index.php?pg=cart";';
                        echo '</script>';
                    } else {
                        echo '<script>';
                        echo 'alert("Chưa xóa được sản phẩm!");';
                        echo 'window.location.href ="index.php?pg=cart";';
                        echo '</script>';
                    }
                }
                $content = "cart";
            } else {
                echo '<script>';
                echo 'alert("Bạn cần đăng nhập để thực hiện chức năng");';
                echo 'window.location.href ="index.php?pg=login";';
                echo '</script>';
            }

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
            if (isset($_FILES['avatar'])) {
                $newAvatar = $_FILES['avatar']['name'];
                update_avatar($_SESSION['user']['Id'], $newAvatar);
                $_SESSION['user']['Avatar'] = $newAvatar;
            }
            if (isset($_POST['update--info'])) {
                $newName = $_POST['name'];

                update_user_name($_SESSION['user']['TaiKhoan'], $newName);

                // Cập nhật thông tin trong SESSION
                $_SESSION['user']['HoVaTen'] = $newName;
            }
            $content = "my-profile";
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
                    loadCart();
                  
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
                header('location: index.php?pg=login');
            }

            $content = "forgotpassword";
            break;
        case 'logout':
            session_destroy();

            header('location: index.php?pg=login');
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

        default:
            $content = "home";
    }
} else {
    $content = "home";
}
if (isset($_GET['pg']) && $_GET['pg'] == 'ad') {
    include_once("admin/view/" . $content . ".php");
} else {
    include("view/header.php");
    include("view/" . $content . ".php");
    include("view/footer.php");
}

?>