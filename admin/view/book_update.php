<?php
// SÁCH ----------------------------------------------------
$bookId = $_GET['bookId'];
$book = sach_detail($bookId);
$listImg = getImageByBookId($bookId);

// THỂ LOẠI ----------------------------------------------------
$listCategoriesByBookId = getCategoriesByBookId($bookId);
$listCatelogry = catelogry_get();

// TÁC GIẢ ----------------------------------------------------
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
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Cập nhật sách</a>
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
                <h3>Mã sách
                    <?= $book['Id'] ?>
                    <span style="font-size: 0.7rem; color:var(--dark)">(Ngày nhập
                        <?= $book['NgayNhap'] ?>)
                    </span>
                </h3>
                <!-- <i class='bx bx-search'></i> -->
                <!-- <i class='bx bx-filter'></i> -->
            </div>
            <form action="index.php?pg=ad&active=book_update&bookId=<?= $book['Id'] ?>" method="post" class="row">
                <div class="col-lg-8 d-flex flex-column gap-2">
                    <div class="mb-3">
                        <label for="tensach" class="form-label">Tên sách</label>
                        <input type="text" class="form-control" id="tensach" name="tensach"
                            value="<?= $book['TenSach'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="theloai" class="form-label">Thể loại</label>
                        <input type="text" class="form-control" id="theloai" name="theloai"
                            value="<?= $book['TheLoai'] ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tacgia" class="form-label">Tác giả</label>
                        <input type="text" class="form-control" id="tacgia" name="tacgia"
                            value="<?= $book['TacGia'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="dongia" class="form-label">Đơn giá</label>
                            <input type="number" class="form-control" name="dongia" id="dongia"
                                value="<?= $book['DonGia'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="giamgia" class="form-label">Giảm giá (%)</label>
                            <input type="number" class="form-control" name="giamgia" id="giamgia"
                                value="<?= $book['GiamGia'] ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="namxuatban" class="form-label">Năm xuất Bảng</label>
                            <input type="number" class="form-control" name="namxuatban" id="namxuatban"
                                value="<?= $book['NamXuatBan'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="nhaxuatban" class="form-label">Nhà xuất Bảng</label>
                            <input type="text" class="form-control" name="nhaxuatban" id="nhaxuatban"
                                value="<?= $book['NhaXuatBan'] ?>">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="tonkho" class="form-label">Tồn kho</label>
                        <input type="number" class="form-control" name="tonkho" id="tonkho"
                            value="<?= $book['SoLuongConHang'] ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="luotbinhluan" class="form-label">Lượt bình luận</label>
                            <input type="text" class="form-control" name="luotbinhluan" id="luotbinhluan"
                                value="<?= $book['LuotBinhLuan'] ?>" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="luotxem" class="form-label">Lượt xem</label>
                            <input type="text" class="form-control" name="luotxem" id="luotxem"
                                value="<?= $book['LuotXem'] ?>" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="luotmua" class="form-label">Lượt mua</label>
                            <input type="text" class="form-control" name="luotmua" id="luotmua"
                                value="<?= $book['LuotMua'] ?>" disabled>
                        </div>
                        <div class="col-md-3">
                            <label for="danhgia" class="form-label">Đánh Giá</label>
                            <input type="text" class="form-control" name="danhgia" id="danhgia"
                                value="<?= $book['DanhGia'] ?>" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-floating">
                            <textarea class="form-control" name="mota" id="mota" style="height: 100px"
                                cols="3"><?= $book['MoTa'] ?></textarea>
                            <label for="mota">Mô tả</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-floating">
                            <textarea class="form-control" name="motachitiet" id="motachitiet"
                                style="height: 200px"><?= $book['MoTaChiTiet'] ?></textarea>
                            <label for="motachitiet">Mô tả chi tiết</label>
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Trạng thái</legend>
                        <div class="col-sm-10">
                            <?php
                            if ($book['TrangThai'] == 0) {
                                echo '
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trangthai" id="an" value="0" checked>
                                    <label class="form-check-label" for="an">
                                        Ẩn
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trangthai" id="hien" value="1">
                                    <label class="form-check-label" for="hien">
                                        Hiện
                                    </label>
                                </div>
                                    ';
                            } else {
                                echo '
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trangthai" id="an" value="0">
                                    <label class="form-check-label" for="an">
                                        Ẩn
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trangthai" id="hien" value="1" checked>
                                    <label class="form-check-label" for="hien">
                                        Hiện
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
                    <?php
                    foreach ($listImg as $img):
                        $src = 'upload/sach/' . $img['DuongDan'];
                        $alt = $img['TenAnh'];
                        ?>
                        <div class="card mb-3" style="width: 100%;">
                            <img src="<?= $src ?>" class="hover-trigger" alt="<?= $alt ?>" width="100%">
                            <div class="card-body  d-none">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Id ảnh:
                                        <?= $img['Id'] ?>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="form-floating">
                                                Tên ảnh:
                                                <textarea class="form-control" name="tenanh" style="height: 100px"
                                                    cols="3"><?= $img['TenAnh'] ?></textarea>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">Đường dẫn:
                                        <?= $src ?>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="mb-3">
                                            <label for="formFile" class="form-label">Chọn Ảnh</label>
                                            <input class="form-control" type="file" id="formFile" onchange="validateFile()">
                                            <input type="submit" class="btn btn-primary mt-1" name="saveImg"
                                                value="Lưu Ảnh">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Bắt sự kiện hover vào card
            $('.card').hover(
                function () {
                    // Khi hover vào, thêm class 'expanded' và loại bỏ class 'hidden'
                    $(this).find('.card-body').addClass('d-block').removeClass('d-none');
                },
                function () {
                    // Khi rời khỏi, thêm class 'hidden' và loại bỏ class 'expanded'
                    $(this).find('.card-body').addClass('d-none').removeClass('d-block');
                }
            );
        });

        function validateFile() {
            var fileInput = document.getElementById('formFile');
            var filePath = fileInput.value;
            var allowedExtensions = /(\.jpg|\.jpeg|\.png)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Chọn chưa đúng file hình định dạng (chỉ nhận (jpg, jpeg, png)');
                fileInput.value = ''; // Reset the input to clear the invalid file
                return false;
            }
        }
    </script>
</main>
<!-- MAIN -->