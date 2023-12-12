<?php
// tính số lượng người dùng
$userCount = getUserCount();
if ($userCount == null) {
    echo "Không thể lấy số lượng người dùng.";
}

// tính số lượng sách
$bookCount = getBookCount();
if ($bookCount == null) {
    echo "Không thể lấy số lượng sách.";
} 

// tính số tổng doanh thu
$totalRevenue = getTotalRevenue();
if ($totalRevenue == null) {
    $totalRevenue = 0;
    echo "Không thể lấy tổng doanh thu.";
}

$listUser = getNewlyRegisteredUsers();
?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Bảng điều kiển</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?pg=ad&active=home" class="active">Bảng điều kiển</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="index.php?pg=ad&active=home">Trang chủ</a>
                </li>
            </ul>
        </div>
        <!-- <a href="#" class="btn-download">
            <i class='bx bxs-cloud-download'></i>
            <span class="text">Download PDF</span>
        </a> -->
    </div>

    <ul class="box-info">
        <li>
            <i class='bx bxs-calendar-check'></i>
            <span class="text">
                <h3><?=$bookCount?></h3>
                <p>Sách</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-group'></i>
            <span class="text">
                <h3><?=$userCount?></h3>
                <p>Người dùng</p>
            </span>
        </li>
        <li>
            <i class='bx bxs-dollar-circle'></i>
            <span class="text">
                <h3><?=number_format($totalRevenue,0,',','.')?> VND</h3>
                <p>Doanh thu</p>
            </span>
        </li>
    </ul>


    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Người dùng mới</h3>
                <!-- <i class='bx bx-search'></i> -->
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Họ và tên</th>
                        <th>Ngày tạo</th>
                        <th>Tài khoản</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listUser as $user):
                        ?>
                        <tr>
                            <td>
                                <img src="upload/avatar/<?= $user['Avatar'] ?>">
                                <p>
                                    <?= $user['HoVaTen'] ?>
                                </p>
                            </td>
                            <td>
                                <?= $user['NgayTao'] ?>
                            </td>
                            <td><span class="status completed">
                                    <?= $user['TaiKhoan'] ?>
                                </span></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="todo">
            <div class="head">
                <h3>Thể loại</h3>
                <i class='bx bx-plus'></i>
                <i class='bx bx-filter'></i>
            </div>
            <ul class="todo-list">
                <?php
                $dstheloai = catelogry_get();
                foreach ($dstheloai as $theloai): ?>
                    <li class="not-completed">
                        <!-- <a href="index.php?pg=product&Id_TheLoai=<?= $theloai['Id'] ?>" style="text-transform:capitalize;">
                            <?= $theloai['TenTheLoai'] ?>
                        </a> -->
                        <p><?= $theloai['TenTheLoai'] ?></p>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                <?php endforeach; ?>
                <!-- <li class="completed">
                    <p>Công nghệ thông tin</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li>
                <li class="not-completed">
                    <p>Todo List</p>
                    <i class='bx bx-dots-vertical-rounded'></i>
                </li> -->
            </ul>
        </div>
    </div>
</main>
<!-- MAIN -->