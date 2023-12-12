<?php
// THỂ LOẠI ----------------------------------------------------
$genreId = $_GET['genreId'];
$genre = getGenreById($genreId);
$listbook =  getBookByGenre($genreId);
?>

<!-- MAIN -->
<main>
    <div class="head-title">
        <div class="left">
            <h1>Cập nhật thể loại</h1>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php?pg=ad&active=book_management" class="active">Quản lý sách</a>
                </li>
                <li><i class='bx bx-chevron-right'></i></li>
                <li>
                    <a class="" href="#">Cập nhật thể loại</a>
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
            <form action="index.php?pg=ad&active=book_genreUpdate&genreId=<?= $genre['Id'] ?>" method="post"
                class="row">
                <div class="col-lg-4 d-flex flex-column gap-2">
                    <div class="head">
                        <h3>Mã thể loại:
                            <?= $genre['Id'] ?>
                        </h3>
                        <!-- <i class='bx bx-search'></i> -->
                        <!-- <i class='bx bx-filter'></i> -->
                    </div>
                    <div class="mb-3">
                        <label for="tentheloai" class="form-label">Tên thể loại</label>
                        <input type="text" class="form-control" id="tentheloai" name="tentheloai"
                            value="<?= $genre['TenTheLoai'] ?>">
                    </div>

                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary" name="save" value="Cập nhật">
                    </div>
                </div>
                <div class="col-lg-8 d-flex flex-column gap-2">
                    <div class="head">
                        <h3>Các sách liên quan: (<?= $genre['bookCount'] ?>)</h3>
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
                                    <h6 class="card-subtitle mb-2 text-body-secondary"><?= $book['TheLoai'] ?></h6>
                                    <a href="index.php?pg=ad&active=book_update&bookId=<?= $book['Id'] ?>"
                                        class="btn-update">
                                        <i class="fa-regular fa-pen-to-square fa-xl" style="color: var(--blue);"></i>
                                    </a>
                                    <a href="index.php?pg=ad&active=book_genreUpdate&bookDeleteId=<?= $book['Id']?>&genreId=<?=$genre['Id']?>"
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
</main>
<!-- MAIN -->