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

    chenHoaDon($idNguoidung, $TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan);
    // chitiethoadon($Id,$Id_HoaDon,$Id_Sach,$Gia,$SoLuong);
    echo "<script>
            sessionStorage.removeItem('cart');
            document.location='index.php?pg=thank';
          </script>";
}

?>
<style>
    #frmdonhang {
        width: 60%;
        border: 1px solid darkcyan;
        border-radius: 10px;
        padding: 10px;
        background: white;
    }

    #frmdonhang label {
        display: inline-block;
        width: auto;
        color: #000;
    }
    
    #frmdonhang p {
        margin: 15px;
        color: #000;
        font-size: 18px;
    }

    #frmdonhang .txt {
        width: 100%;
        padding: 8px;
    }

    #frmdonhang .nut {
        width: 150px;
        height: 40px;
    }

    .layout {
        display: flex;
        gap: 10px;
        padding: 1rem 0;
    }

    .cart{
        border: 1px solid darkcyan;
        border-radius: 10px;
        width: 40%;
        padding: 1rem;
        background-color: white;
    }

    .cart table tr:first-child{
        border: none;
    }
    .cart table tr:last-child{
        border-bottom: none;
        font-weight: bold;
    }
    .cart table tr{
        border-top: 1px solid gray ;
        border-bottom: 1px solid gray ;
        padding: 10px;
    }

    .cart table th,
    .cart table td{
        padding: 10px;
        text-align: center;
    }

    .cart table th:last-child,
    .cart table td:last-child{
        text-align: end;
    }
    .cart table th:first-child,
    .cart table td:first-child{
        width: 50%;
        height: auto;
        word-wrap: break-word;
        text-align: start;
    }


</style>
<section  style="background-color: #ededed">

    <div class="container">
        <div class="layout">
    
            <form id="frmdonhang" method="post" action="index.php?pg=checkout">
                <p>LƯU ĐƠN HÀNG</p>
                <p>
                    <label> Tên người dùng </label>
                    <input type="text" class="txt" name="name" value="<?php echo $_SESSION['user']['HoVaTen']; ?>"
                        required disabled><br>
                </p>
                <p>
                    <label>Email: </label>
                    <input type="email" class="txt" name="email" value="<?php echo $_SESSION['user']['Email']; ?>"
                        required disabled><br>
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
                <input type="text" class="txt" name="TrangThai" value="Đã thanh toán" hidden>
                <p>
                    <label></label>
                    <button type="submit" class="nut" name="btn-checkout">Lưu đơn hàng</button>
                </p>
            </form>
            <div class="cart">
                <table style="width: 100%;">
                    <tr>
                        <th>Sách</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                $_SESSION['totalAmount'] = 0;
                if (!empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $key => $book):
                        $_SESSION['totalAmount'] = $_SESSION['totalAmount'] + ($book['DonGia'] * $book['SoLuong'] * (1 - $book['GiamGia'] / 100));

                        ?>
                        <tr>
                            <td scope="col">
                                <?= $book['TenSach'] ?>
                            </td>
                            <td scope="col">
                                <?= number_format($book['SoLuong'], 0, ',', '.') ?>
                            </td>
                            <td scope="col">
                                <?= number_format(($book['DonGia'] * $book['SoLuong'] * (1 - $book['GiamGia'] / 100)), 0, ',', '.') ?> VND
                            </td>
                        </tr>
                        <?php
                    endforeach;
                } else {
                    echo '<tr><td colspan="6">Giỏ hàng trống</td></tr>';
                }
                ?>
                <tr>
                    <td></td>
                    <td>Tổng tiền</td>
                    <td><?=number_format($_SESSION['totalAmount'],0, ',', '.')?> VND</td>
                </tr>
                </table>
                <div class="" style="display:flex; flex-direction:column; gap:10px">
                    <div class="item">
                        <img src="" alt="">
                        <div class="item-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</section>