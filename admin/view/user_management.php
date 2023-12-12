<?php
// user ----------------------------------------------
$listUser = getAllUsers();
$userCount = getUserCount();
// đơn hàng ----------------------------------------------
?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản lý người dùng</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?pg=ad&active=book_management" class="">Quản lý người dùng</a>
                </li>
                <!-- <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="active" href="#">Trang chủ</a>
                </li> -->
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
                <h3>Người dùng (<?=$userCount?>)</h3>
                <!-- <i class='bx bx-search'></i> -->
                <!-- <i class='bx bx-filter'></i> -->
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Họ và Tên</th>
                        <th>Avatar</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Ngày tạo</th>
                        <th style="text-align: center;">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listUser as $user):
                        $src='upload/avatar/'.$user['Avatar'];
                        ?>
                        <tr>
                            <td><?= $user['Id'] ?></td>
                            <td><?= $user['HoVaTen'] ?></td>
                            <td>
                                <img src="<?= $src ?>" alt="<?= $user['HoVaTen'] ?>" width="1rem" height="1rem">    
                            </td>
                            <td><?= $user['Email'] ?></td>
                            <td><?= $user['SDT'] ?></td>
                            <td><?= $user['NgayTao'] ?></td>
                            <td style="text-align: center;">
                                <a href="index.php?pg=ad&active=user_update&userId=<?= $user['Id'] ?>" class="btn-update">
                                    <i class="fa-regular fa-pen-to-square fa-xl" style="color: var(--blue);"></i>
                                </a>
                                <a href="index.php?pg=ad&active=user_management&deleteUserId=<?= $user['Id'] ?>"
                                    class="btn-del">
                                    <i class="fa-solid fa-trash fa-xl" style="color: var(--red); margin-left: 1rem;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<!-- MAIN -->