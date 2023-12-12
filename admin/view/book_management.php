<?php
// SÁCH ----------------------------------------------------
$listbook = getBookAll(10);
if ($listbook == null) {
    echo 'Không có sách';
}

// tính số lượng sách
$bookCount = getBookCount();
if ($bookCount == null) {
    echo "Không thể lấy số lượng sách.";
}


// THỂ LOẠI ----------------------------------------------------
// truy xuất id.tl, tên.tl, và số lượng sách trong tl (bookCount)
$listGenres = getCategoriesWithBookCount(5, null);
if ($listGenres == null) {
    echo "Không thể truy xuất getCategoriesWithBookCount";
}

// tính số lượng Thể loại
$categoryCount = getCategoryCount();
if ($bookCount == null) {
    echo "Không thể lấy số lượng Thể loại.";
}


// TÁC GIẢ ----------------------------------------------------
// truy xuất tác giả
$listAuthors = getAuthorsWithBookCount(5, null);
if ($listAuthors == null) {
    echo "Đã xảy ra lỗi khi truy vấn thông tin tác giả.";
}


$authorCount = getAuthorCount();
if ($authorCount == null) {
    echo "Không thể lấy số lượng tác giả.";
}
?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Quản lý sách</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?pg=ad&active=book_management" class="active">Quản lý sách</a>
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
                <h3>Kho Sách (
                    <?= number_format($bookCount, 0, ',', '.') ?> quyển)
                </h3>
                <!-- <i class='bx bx-search'></i> -->
                <!-- <i class='bx bx-filter'></i> -->
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Tên sách</th>
                        <th style="text-align: end;">Giá</th>
                        <th style="text-align: end;">Tồn kho</th>
                        <th style="text-align: end;">Lượt mua</th>
                        <th style="text-align: end;">Đánh giá</th>
                        <th style="text-align: center;">Chỉnh sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listbook as $book):
                        ?>
                        <tr>
                            <td>
                                <?= $book['Id'] ?>
                            </td>
                            <td style="max-width:150px;">
                                <?= $book['TenSach'] ?>
                            </td>
                            <td style="text-align: end;">
                                <?= number_format($book['DonGia'], 0, ',', '.') ?> VND
                            </td>
                            <td style="text-align: end;">
                                <?= number_format($book['SoLuongConHang'], 0, ',', '.') ?>
                            </td>
                            <td style="text-align: end;">
                                <?= number_format($book['LuotMua'], 0, ',', '.') ?>
                            </td>
                            <td style="text-align: end;">
                                <?= number_format($book['DanhGia'], 1, ',', '.') ?>
                            </td>
                            <td style="text-align: center;">
                                <a href="index.php?pg=ad&active=book_update&bookId=<?= $book['Id'] ?>" class="btn-update">
                                    <i class="fa-regular fa-pen-to-square fa-xl" style="color: var(--blue);"></i>
                                </a>
                                <a href="index.php?pg=ad&active=book_management&bookDeleteId=<?= $book['Id'] ?>" class="btn-del">
                                    <i class="fa-solid fa-trash fa-xl" style="color: var(--red); margin-left: 1rem;;"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>


                </tbody>
            </table>
        </div>
        <div class="table-data" style="flex-direction: row; gap:20px; padding: 0; background-color: var(--grey)">
            <div class="order">
                <div class="head">
                    <h3>Thể loại (<?=$categoryCount ?>)</h3>
                    <a href="#" style="color: var(--blue);">Thêm thể loại mới</a>
                    <!-- <i class='bx bx-search'></i> -->
                    <!-- <i class='bx bx-filter'></i> -->
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên thể loại</th>
                            <th style="text-align: center;">Số lượng sách</th>
                            <th style="text-align: center;">Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listGenres as $genres):
                            ?>
                            <tr>
                                <td>
                                    <?= $genres['Id'] ?>
                                </td>
                                <td>
                                    <?= $genres['TenTheLoai'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <?= $genres['bookCount'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <a href="index.php?pg=ad&active=book_genreUpdate&genreId=<?= $genres['Id'] ?>" class="btn-update">
                                        <i class="fa-regular fa-pen-to-square fa-xl" style="color: var(--blue);"></i>
                                    </a>
                                    <a href="index.php?pg=ad&active=book_management&deleteCategoryId=<?= $genres['Id'] ?>" class="btn-del">
                                        <i class="fa-solid fa-trash fa-xl"
                                            style="color: var(--red); margin-left: 1rem;"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="order">
                <div class="head">
                    <h3>Tác giả (
                        <?= $authorCount ?>)
                    </h3>
                    <!-- <i class='bx bx-search'></i> -->
                    <!-- <i class='bx bx-filter'></i> -->
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Tên tác giả</th>
                            <th style="text-align: center;">Số lượng sách</th>
                            <th style="text-align: center;">Chỉnh sửa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        foreach ($listAuthors as $authors):
                            ?>
                            <tr>
                                <td>
                                    <?= $authors['Id'] ?>
                                </td>
                                <td>
                                    <?= $authors['HoVaTen'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <?= $authors['bookCount'] ?>
                                </td>
                                <td style="text-align: center;">
                                    <a href="index.php?pg=ad&active=book_authorUpdate&authorId=<?= $authors['Id'] ?>" class="btn-update">
                                        <i class="fa-regular fa-pen-to-square fa-xl" style="color: var(--blue);"></i>
                                    </a>
                                    <a href="index.php?pg=ad&active=book_management&deleteAuthorById=<?= $authors['Id'] ?>" class="btn-del">
                                        <i class="fa-solid fa-trash fa-xl"
                                            style="color: var(--red); margin-left: 1rem;;"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
<!-- MAIN -->