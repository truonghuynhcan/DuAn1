<?php
$cart = $_SESSION['cart'] ?? null;

?>

<body style="font-family:Arial, Helvetica, sans-serif;">


    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Giỏ hàng của bạn</h2>
        </div>
        <table class="cartTable table">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Sản phẩm</th>
                    <th scope="col" style="text-align:end">Đơn giá</th>
                    <th scope="col" style="text-align:end">Giảm giá</th>
                    <th scope="col" style="text-align:end">Số lượng</th>
                    <th scope="col" style="text-align:end">Thành Tiền</th>
                    <th scope="col" style="text-align:center"></th>
                </tr>
            </thead>
            <tbody id="cartTableBody">
                <!-- Nội dung giỏ hàng sẽ được thêm vào đây bằng JavaScript -->
                <?php
                if (!empty($cart)) {
                    foreach ($cart as $key => $book):
                        ?>
                        <tr>
                            <td scope="col">
                                <?= ($key + 1) ?>
                            </td>
                            <td scope="col">
                                <?= $book['TenSach'] ?>
                            </td>
                            <td scope="col" style="text-align:end">
                                <?= number_format($book['DonGia'], 0, ',', '.') ?>
                            </td>
                            <td scope="col" style="text-align:end">
                                <?= $book['GiamGia'] ?> %
                            </td>
                            <td scope="col" style="text-align:end">
                                <?= number_format($book['SoLuong'], 0, ',', '.') ?>
                            </td>
                            <td scope="col" style="text-align:end">
                                <?= number_format(($book['DonGia'] * $book['SoLuong'] * (1 - $book['GiamGia'] / 100)), 0, ',', '.') ?>
                            </td>
                            <td scope="col" style="text-align:center">
                        <a href="index.php?pg=cart&deleteBookId=<?= $book['Id_Sach'] ?>">Xóa</a></td>
                        </tr>
                        <?php
                    endforeach;
                } else {
                    echo '<tr><td colspan="6">Giỏ hàng trống</td></tr>';
                }
                ?>

            </tbody>
        </table>
        <!-- <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Giả định giỏ hàng được lưu trữ trong biến 'cart'
                var cart = <?php echo $cart; ?>;
                alert(cart);
                // Hiển thị giỏ hàng ban đầu
                displayCart();

                function displayCart() {
                    var cartTable = document.getElementById("cartTable");
                    var tbody = cartTable.getElementsByTagName("tbody")[0];
                    tbody.innerHTML = "";

                    for (var i = 0; i < cart.length; i++) {
                        var row = tbody.insertRow(i);
                        var cellSTT = row.insertCell(0);
                        var cellTenSach = row.insertCell(1);
                        var cellDonGia = row.insertCell(2);
                        var cellSoLuong = row.insertCell(3);
                        var cellTongTien = row.insertCell(4);
                        var cellXoa = row.insertCell(5);

                        cellSTT.innerHTML = i + 1;
                        cellTenSach.innerHTML = cart[i].TenSach;
                        cellDonGia.innerHTML = numberFormat(cart[i].DonGia);
                        cellSoLuong.innerHTML = "<input type='number' min='1' value='" + cart[i].SoLuong + "' onchange='updateQuantity(" + i + ", this.value)'>";
                        cellTongTien.innerHTML = numberFormat(getTotalPrice(cart[i]));
                        cellXoa.innerHTML = "<button onclick='removeProduct(" + i + ")'>Xóa</button>";
                    }
                }

                function updateQuantity(index, newQuantity) {
                    if (newQuantity >= 1) {
                        cart[index].SoLuong = parseInt(newQuantity);
                        displayCart();
                    }
                }

                function removeProduct(index) {
                    cart.splice(index, 1);
                    displayCart();
                }

                function numberFormat(number) {
                    return new Intl.NumberFormat().format(number);
                }

                function getTotalPrice(product) {
                    return product.DonGia * product.SoLuong * (1 - product.GiamGia / 100);
                }
            });
        </script> -->
        <form id="frmcart" method="post"
            style=" margin-left:50%; margin-bottom:5%; width: 50%; border: 1px solid darkcyan; padding: 20px">
            <div class="d-flex justify-content-end">
                <p class="fw-bold">Tổng số lượng: <span id="totalQuantity">0</span></p>
                <p class="fw-bold mx-4">Tổng tiền: <span id="totalAmount">VNĐ</span></p>
            </div>
            <div>
                <a href="index.php?pg=checkout" class="nuthanhtoan" style=" border:1px solid #000; ">Thanh Toán</a>
            </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/dist/svg/bootstrap-icons.svg"></script>

    <script>
        updateCart();
    </script>

</body>