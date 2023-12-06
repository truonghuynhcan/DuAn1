<?php
require_once "model/m_cart.php";

if (isset($_POST['btn'])) {
    // Lấy thông tin người nhận từ form
    $TenNguoiNhan = $_POST['TenNguoiNhan'];
    $SDTNguoiNhan = $_POST['SDTNguoiNhan'];
    $DiaChiNguoiNhan = $_POST['DiaChiNguoiNhan'];

    // Lấy thông tin người đặt hàng từ phiên đăng nhập (giả sử sử dụng $_SESSION)
    $Id_NguoiDung = $_SESSION['user']['Id'];

    // Lấy thông tin giỏ hàng từ session
    $cart = $_SESSION['cart'];

    // Tính tổng số tiền đơn hàng từ giỏ hàng
    $TongDon = tinhTongDonHang($cart);

    // Trạng thái đơn hàng (có thể là 'Chờ xác nhận', 'Đang giao',...)
    $TrangThai = 'Chờ xác nhận';

    // Gọi hàm chèn hóa đơn từ model
    $idHoaDon = chenHoaDon($Id_NguoiDung, $TongDon, $TrangThai, $TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan);

    // Kiểm tra nếu hóa đơn được chèn thành công thì xóa giỏ hàng
    if ($idHoaDon) {
        unset($_SESSION['cart']);
        echo "<script>
                document.location='index.php?pg=thank&id=$idHoaDon';
              </script>";
    } else {
        // Xử lý lỗi nếu cần
        echo "Có lỗi xảy ra khi lưu đơn hàng";
    }
}

// if (isset($_POST['btn'])) { 
//     // Lấy thông tin người nhận từ form
//     $TenNguoiNhan = $_POST['TenNguoiNhan'];
//     $SDTNguoiNhan = $_POST['SDTNguoiNhan'];
//     $DiaChiNguoiNhan = $_POST['DiaChiNguoiNhan'];

//     // Lấy thông tin người đặt hàng từ phiên đăng nhập (giả sử sử dụng $_SESSION)
//     $Id_NguoiDung = $_SESSION['user']['Id'];

//     // Tính tổng số tiền đơn hàng từ giỏ hàng (giả sử bạn có một hàm tính tổng trong m_cart.php)
//     $TongDon = tinhTongDonHang();

//     // Trạng thái đơn hàng (có thể là 'Chờ xác nhận', 'Đang giao',...)
//     $TrangThai = 'Chờ xác nhận';

//     // Gọi hàm chèn hóa đơn từ model
//     $idHoaDon = chenHoaDon($Id_NguoiDung, $TongDon, $TrangThai, $TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan);

//     // Kiểm tra nếu hóa đơn được chèn thành công thì xóa giỏ hàng
//     if ($idHoaDon) {
//         unset($_SESSION['cart']);
//         echo "<script>
//                 document.location='index.php?pg=thank&id=$idHoaDon';
//               </script>";
//     } else {
//         // Xử lý lỗi nếu cần
//         echo "Có lỗi xảy ra khi lưu đơn hàng";
//     }
// }
?>

<style>
    #frmdonhang { margin:auto; width: 70%; border: 1px solid darkcyan; padding: 10px; background: #e0d2a2;}
    #frmdonhang label { display:inline-block; width: 150px; color: #000; } 
    #frmdonhang p { margin: 15px; color: #000; font-size: 18px; }
    #frmdonhang .txt { width: 600px; padding: 8px; }
    #frmdonhang .nut { width: 150px; height: 40px; }
</style>

<form id="frmdonhang" method="post" action="">
    <p>LƯU ĐƠN HÀNG</p>
    <p>
        <label>Tên người nhận </label>
        <input type="text" class="txt" name="TenNguoiNhan">
    </p>
    <p>
        <label>Số điện thoại</label>
        <input type="text" class="txt" name="SDTNguoiNhan">
    </p>
    <p>
        <label>Địa chỉ giao hàng </label>
        <input type="text" class="txt" name="DiaChiNguoiNhan">
    </p>
    <p>
        <label></label>
        <button type="submit" class="nut" name="btn">Lưu đơn hàng</button>
    </p>
</form>


<!-- 
<?php
// require_once "model/m_cart.php";

// if (isset($_POST['btn'])) { 
//     $TenNguoiNhan = $_POST['TenNguoiNhan'];
//     $SDTNguoiNhan = $_POST['SDTNguoiNhan'];
//     $DiaChiNguoiNhan = $_POST['DiaChiNguoiNhan'];
//     chenHoaDon($TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan);

//     echo "<script>
//             sessionStorage.removeItem('cart');
//             document.location='index.php?pg=thank';
//           </script>";
// }

?>
<style>
    #frmdonhang { margin:auto; width: 70%; border: 1px solid darkcyan; padding: 10px; background: #e0d2a2;;}
    #frmdonhang label {
         display:inline-block ; width: 150px; color:#000;
    } 
    #frmdonhang p { margin: 15px;color:#000 ; font-size:18px;}
    #frmdonhang .txt{
        width: 600px; padding: 8px;
    }
    #frmdonhang  .nut {
        width: 150px; height: 40px; 
    }
</style>
<form id="frmdonhang" method="post" action="">
<p>LƯU ĐƠN HÀNG</p>
<p>
    <label> Tên người dùng </label>
        <input type="text"class="txt" name="name" value="<?php echo $_SESSION['user']['HoVaTen']; ?>" required><br>
</p>
<p>
    <label>Email: </label>
        <input type="email"class="txt" name="email" value="<?php echo $_SESSION['user']['Email']; ?>" required><br>
</p>
<p>
    <label>Tên người nhận </label>
    <input type="text" class="txt" name="TenNguoiNhan">
</p>
<p>
    <label>Số điện thoại</label>
    <input type="text" class="txt" name="SDTNguoiNhan">
</p>
<p>
    <label>Địa chỉ giao hàng </label>
    <input type="text" class="txt" name="DiaChiNguoiNhan">
</p>
<p>
    <label></label>
    <button type="submit" class="nut" name="btn">Lưu đơn hàng</button>
</p>
</form> -->
