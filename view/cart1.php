
<body>
   
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Giỏ hàng cua ban</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Ten </th>
                    <th scope="col">Gia</th>
                    <th scope="col">So luong</th>
                    <th scope="col">Tien</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody id="cartTableBody">
                <!-- Nội dung giỏ hàng sẽ được thêm vào đây bằng JavaScript -->
            </tbody>
        </table>
        <form id="frmcart" method="post" style=" margin-left:50%; margin-bottom:5%; width: 50%; border: 1px solid darkcyan; padding: 20px">
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
   updateCart() ;
    </script>

</body>

