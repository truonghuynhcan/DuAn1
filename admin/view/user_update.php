<?php
// SÁCH ----------------------------------------------------
$userId = $_GET['userId'];
$user = getUserById($userId);
?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
                <h1>Quản lý người dùng</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.php?pg=ad&active=user_management" class="active">Quản lý người dùng</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="" href="#">Cập nhật người dùng</a>
                    </li>
                </ul>
        </div>
        <!-- <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a> -->
    </div>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Mã người dùng:
                    <?= $user['Id'] ?>
                    <span style="font-size: 0.7rem; color:var(--dark)">(Ngày tạo
                        <?= $user['NgayTao'] ?>)
                    </span>
                </h3>
                <!-- <i class='bx bx-search'></i> -->
                <!-- <i class='bx bx-filter'></i> -->
            </div>
            <form action="index.php?pg=ad&active=user_update&userId=<?= $user['Id'] ?>" method="post" class="row">
                <div class="col-lg-8 d-flex flex-column gap-2">
                    <div class="mb-3">
                        <label for="tennguoidung" class="form-label">Họ và Tên</label>
                        <input type="text" class="form-control" id="tennguoidung" name="tennguoidung"
                            value="<?= $user['HoVaTen'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?= $user['Email'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">Số điện thoại</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" value="<?= $user['SDT'] ?>">
                    </div>
                    <div class="mb-3 row">
                        <div class="col-md-6">
                            <label for="taikhoan" class="form-label">Tài khoản</label>
                            <input type="text" class="form-control" id="taikhoan" name="taikhoan"
                                value="<?= $user['TaiKhoan'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="matkhau" class="form-label">Mật khẩu</label>
                            <br>
                            <a href="form-control">Thay đổi mật khẩu</a>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="diachi" class="form-label">Địa chỉ</label>
                        <input type="text" class="form-control" id="diachi" name="diachi"
                            value="<?= $user['DiaChi'] ?>">
                    </div>

                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Vai Trò</legend>
                        <div class="col-sm-10">
                            <?php
                            if ($user['VaiTro'] == 0) {
                                echo '
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vaitro" id="site" value="0" checked>
                                    <label class="form-check-label" for="site">
                                        Người dùng
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vaitro" id="admin" value="1">
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                                    ';
                            } else {
                                echo '
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vaitro" id="site" value="0">
                                    <label class="form-check-label" for="site">
                                        Người dùng
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="vaitro" id="admin" value="1" checked>
                                    <label class="form-check-label" for="admin">
                                        Admin
                                    </label>
                                </div>
                                    ';
                            }
                            ?>
                        </div>
                    </fieldset>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" name="save" value="Cập nhật">
                    </div>
                </div>
                <div class="col-lg-3 d-flex flex-column gap-2">
                    <img src="upload/avatar/<?= $user['Avatar'] ?>" alt="<?= $user['HoVaTen'] ?>">
                </div>
            </form>
        </div>
</main>
<!-- MAIN -->