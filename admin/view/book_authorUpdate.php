<?php
// THỂ LOẠI ----------------------------------------------------
$authorId = $_GET['authorId'];
$author = getAuthorById($authorId);
$listbook =  getBookByAuthor($authorId);
?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Cập nhật Tác giả</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?pg=ad&active=book_management" class="active">Quản lý sách</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Cập nhật tác giả</a>
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
            <form action="index.php?pg=ad&active=book_authorUpdate&authorId=<?= $author['Id'] ?>" method="post"
                class="row">
                <div class="col-lg-4 d-flex flex-column gap-2">
                    <div class="head">
                        <h3>Mã tác giả:
                            <?= $author['Id'] ?>
                        </h3>
                        <!-- <i class='bx bx-search'></i> -->
                        <!-- <i class='bx bx-filter'></i> -->
                    </div>
                    <div class="mb-3">
                        <label for="tentheloai" class="form-label">Tên tác giả</label>
                        <input type="text" class="form-control" id="tentheloai" name="tensach"
                            value="<?= $author['HoVaTen'] ?>">
                    </div>

                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" name="save" value="Cập nhật">
                    </div>
                </div>
                <div class="col-lg-8 d-flex flex-column gap-2">
                    <div class="head">
                        <h3>Các sách liên quan: (<?= $author['bookCount'] ?>)</h3>
                    </div>
                    <div class="row row-gap-4">
                        <?php
                            foreach ($listbook as $book):
                                $src='upload/sach/'.$book['DuongDan'];
                                $alt=$book['TenHinhAnh'];
                        ?>
                        <div class="col-lg-4 ">
                            <div class="card container" style="width: 100%;">
                                <img src="<?=$src?>" class="card-img-top object-fit-contain" alt="<?=$alt?>" style="height: 200px; width:auto;">
                                <div class="card-body">
                                    <h5 class="card-title d-inline-block text-truncate" style="max-width: 100%;"><?= $book['TenSach'] ?></h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $book['TacGia'] ?></h6>
                                    <a href="index.php?pg=ad&active=book_update&bookId=<?= $book['Id'] ?>"
                                        class="btn-update">
                                        <i class="fa-regular fa-pen-to-square fa-xl" style="color: var(--blue);"></i>
                                    </a>
                                    <a href="index.php?pg=ad&active=book_authorUpdate&bookDeleteId=<?= $book['Id']?>&authorId=<?=$author['Id']?>"
                                        class="btn-del">
                                        <i class="fa-solid fa-trash fa-xl"
                                            style="color: var(--red); margin-left: 1rem;;"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    </script> -->
</main>
<!-- MAIN -->