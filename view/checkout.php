
<?php
require_once "model/m_cart.php";

if (isset($_POST['btn'])) { 
    $TenNguoiNhan = $_POST['TenNguoiNhan'];
    $SDTNguoiNhan = $_POST['SDTNguoiNhan'];
    $idNguoidung = $_SESSION['user']['Id'];
    $DiaChiNguoiNhan = $_POST['DiaChiNguoiNhan'];
    // $Id = $_SESSION['cart']['id'];
    // $Id_HoaDon = $_SESSION['cart']['Id_HoaDon'];
    // $Id_Sach = $_SESSION['cart']['Id_Sach'];
    // $Gia = $_SESSION['cart']['Gia'];
    // $SoLuong = $_SESSION['cart']['SoLuong'];

    chenHoaDon($idNguoidung,$TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan);
    // chitiethoadon($Id,$Id_HoaDon,$Id_Sach,$Gia,$SoLuong);
    echo "<script>
            sessionStorage.removeItem('cart');
            document.location='index.php?pg=thank';
          </script>";
}

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
</form>
