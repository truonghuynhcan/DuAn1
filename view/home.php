<section class="banner banner-11 text-left background-bg" data-image-src="layout/images/home11/banner.jpg">
    <div class="container">
        <div class="row">
            <div class="banner-top">

                <div class="col-sm-3">
                    <h3 class="banner-title">Thể loại</h3>
                    <div class="shop-category">
                        <ul class="category-menu">
                            <?php
                            $dstheloai = catelogry_get();
                            foreach ($dstheloai as $theloai): ?>
                                <li class="menu-item ">
                                    <a href="index.php?pg=product&Id_TheLoai=<?= $theloai['Id'] ?>"
                                        style="text-transform:capitalize;">
                                        <?= $theloai['TenTheLoai'] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div><!-- /.shop-category -->
                </div>

                <div class="col-sm-6">
                    <div id="banner-slider" class="banner-slider carousel slide background-bg"
                        data-image-src="images/home11/slider/1.jpg" style="background-color:gray;height: 610px;">

                        <ol class="carousel-indicators">
                            <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#banner-slider" data-slide-to="1"></li>
                            <li data-target="#banner-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <?php
                            $listbanner = ds_getNew(3);
                            $firstItem = true;
                            foreach ($listbanner as $banner): ?>
                                <?php
                                $anh = anh_getHot($banner['Id']);
                                $src = 'upload/sach/' . $anh['DuongDan'];
                                $alt = $anh['TenAnh'];
                                ?>
                                <div class="item<?= $firstItem ? ' active' : '' ?>">
                                    <div class="col-sm-6">
                                        <div class="slider-content">
                                            <h4 class="top-title">Sách Mới</h4>
                                            <h2 class="main-title">
                                                <?= $banner['TenSach'] ?>
                                            </h2><!-- /.banner-title -->
                                            <h3 class="sub-title">
                                                <?= number_format($banner['DonGia'], 0, ',', '.') ?> VND
                                            </h3><!-- /.banner-sub-title -->
                                            <a href="index.php?pg=detail&id_sach=<?= $banner['Id'] ?>" class="btn">Xem
                                                ngay</a><!-- /.btn -->
                                        </div><!-- /.slider-content -->
                                    </div>
                                    <div class="col-sm-6">
                                        <img class="banner-image" src="<?= $src ?>" alt="<?= $alt ?>">
                                    </div>
                                </div><!-- /.item -->
                                <?php
                                $firstItem = false;
                                ?>
                            <?php endforeach; ?>

                        </div>
                    </div><!-- /#banner-slider -->



                    <div id="banner-slider" class="banner-slider carousel slide background-bg"
                        style="background-color:white;height: 610px; display:none">

                        <ol class="carousel-indicators">
                            <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#banner-slider" data-slide-to="1"></li>
                            <li data-target="#banner-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <div class="slider-content" style="display:none">
                                        <a href="#" class="btn">Shop now</a><!-- /.btn -->
                                    </div><!-- /.slider-content -->
                                </div>

                                <div class="col-sm-6">
                                    <img class="banner-image" src="upload/web/banner/banner1.jpg" alt="Slider Image">
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="col-sm-6">
                                    <img class="banner-image" src="upload/web/banner/banner2.jpg" alt="Slider Image">
                                </div>

                                <div class="col-sm-6">
                                    <div class="slider-content" style="display:none">
                                        <a href="#" class="btn">Shop now</a><!-- /.btn -->
                                    </div><!-- /.slider-content -->
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="col-sm-6">
                                    <div class="slider-content" style="display:none">
                                        <a href="#" class="btn">Shop now</a><!-- /.btn -->
                                    </div><!-- /.slider-content -->
                                </div>

                                <div class="col-sm-6">
                                    <img class="banner-image" src="upload/web/banner/banner3.jpg" alt="Slider Image">
                                </div>
                            </div><!-- /.item -->
                        </div>
                    </div><!-- /#banner-slider -->
                </div>

                <div class="col-sm-3">
                    <h3 class="banner-title">Bán chạy nhất</h3><!-- /.banner-title -->
                    <div id="top-sell-slider" class="top-sell-slider carousel slide text-center">
                        <ol class="carousel-indicators">
                            <?php
                            $listbestsell = ds_getBestSell(6);
                            for ($i = 0; $i < count($listbestsell); $i += 2) {
                                $activeClass = ($i === 0) ? 'active' : '';
                                ?>
                                <li data-target="#top-sell-slider" data-slide-to="<?= $i / 2 ?>"
                                    class="<?= $activeClass ?>"></li>
                            <?php } ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php
                            for ($i = 0; $i < count($listbestsell); $i += 2):
                                $activeClass = ($i === 0) ? 'active' : '';
                                ?>
                                <div class="item <?= $activeClass ?>">
                                    <div class="row">
                                        <?php for ($j = $i; $j < min($i + 2, count($listbestsell)); $j++):
                                            $bestSell = $listbestsell[$j];
                                            ?>
                                            <div class="col-sm-12">
                                                <div class="product-item">
                                                    <div class="item-thumbnail">
                                                        <?php
                                                        $anh = anh_getHot($bestSell['Id']);
                                                        $src = 'upload/sach/' . $anh['DuongDan'];
                                                        $alt = $anh['TenAnh'];
                                                        ?>
                                                        <img src="<?= $src ?>" alt="<?= $alt ?>" style="height:9.2rem">
                                                        <div class="add-cart"><a
                                                                href="index.php?pg=detail&id_sach=<?= $bestSell['Id'] ?>"
                                                                class="btn">Xem ngay</a></div>
                                                        <!-- /.add-cart -->
                                                    </div><!-- /.item-thumbnail -->

                                                    <div class="item-details">
                                                        <h3 class="item-title">
                                                            <?= $bestSell['TenSach'] ?>
                                                        </h3><!-- /.item-title -->
                                                        <div class="item-price"><span class="currency">$</span><span
                                                                class="price">
                                                                <?= $bestSell['DonGia'] ?>
                                                            </span></div><!-- /.item-price -->
                                                    </div><!-- /.item-details -->
                                                </div><!-- /.product-item -->
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div><!-- /.item -->
                            <?php endfor; ?>
                        </div>
                    </div><!-- /#top-sell-slider -->
                </div>


                <div class="col-sm-3" style="display:none">

                    <h3 class="banner-title">Bán chạy nhất</h3><!-- /.banner-title -->
                    <div id="top-sell-slider" class="top-sell-slider carousel slide text-center">

                        <ol class="carousel-indicators">
                            <li data-target="#top-sell-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#top-sell-slider" data-slide-to="1"></li>
                            <li data-target="#top-sell-slider" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <?php
                                $listbestsell = ds_getBestSell(6);

                                ?>
                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/2.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Thêm vào giỏ</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->

                                    <div class="item-details">
                                        <h3 class="item-title">Product name here</h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price">99.00</span></div><!-- /.item-price -->
                                    </div><!-- /.item-details -->
                                </div><!-- /.product-item -->

                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/3.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Add to cart</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->

                                    <div class="item-details">
                                        <h3 class="item-title">Product name here</h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price">99.00</span></div><!-- /.item-price -->
                                    </div><!-- /.item-details -->
                                </div><!-- /.product-item -->
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/4.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Add to cart</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->

                                    <div class="item-details">
                                        <h3 class="item-title">Product name here</h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price">99.00</span></div><!-- /.item-price -->
                                    </div><!-- /.item-details -->
                                </div><!-- /.product-item -->

                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/5.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Add to cart</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->

                                    <div class="item-details">
                                        <h3 class="item-title">Product name here</h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price">99.00</span></div><!-- /.item-price -->
                                    </div><!-- /.item-details -->
                                </div><!-- /.product-item -->
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/6.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Add to cart</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->

                                    <div class="item-details">
                                        <h3 class="item-title">Product name here</h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price">99.00</span></div><!-- /.item-price -->
                                    </div><!-- /.item-details -->
                                </div><!-- /.product-item -->

                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/7.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Add to cart</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->

                                    <div class="item-details">
                                        <h3 class="item-title">Product name here</h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price">99.00</span></div><!-- /.item-price -->
                                    </div><!-- /.item-details -->
                                </div><!-- /.product-item -->
                            </div><!-- /.item -->
                        </div>
                    </div><!-- /#top-sell-slider -->
                </div>

            </div><!-- /.banner-top -->

            <div class="banner-bottom text-center">
                <div class="features">
                    <div class="col-sm-4">
                        <div class="item megento-blue">
                            <div class="item-details">
                                <span class="icon icon-hotairballoon"></span><!-- /.icon -->
                                <h3 class="item-title">Free Shipping</h3><!-- /.item-title -->
                                <p class="description">
                                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec
                                </p><!-- /.description -->
                            </div><!-- /.item-details -->
                        </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                        <div class="item megento-light-blue">
                            <div class="item-details">
                                <span class="icon icon-recycle"></span><!-- /.icon -->
                                <h3 class="item-title">Refund Option</h3><!-- /.item-title -->
                                <p class="description">
                                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec
                                </p><!-- /.description -->
                            </div><!-- /.item-details -->
                        </div><!-- /.item -->
                    </div>

                    <div class="col-sm-4">
                        <div class="item megento-ash">
                            <div class="item-details">
                                <span class="icon icon-lifesaver"></span><!-- /.icon -->
                                <h3 class="item-title">Excellent Support</h3><!-- /.item-title -->
                                <p class="description">
                                    Aenean sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec
                                </p><!-- /.description -->
                            </div><!-- /.item-details -->
                        </div><!-- /.item -->
                    </div>
                </div>

            </div><!-- /.banner-bottom -->
        </div>
    </div><!-- /.container -->
</section><!-- /.banner -->




<section class="featured featured-11 text-center">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="section-top">
                    <h2 class="section-title">Sách Nổi Bật<span></span></h2>
                </div><!-- /.section-top -->

                <div class="featured-sorting">
                    <?php
                    $dsnoibat = ds_getNew(8);
                    foreach ($dsnoibat as $noibat): ?>
                        <div class="item col-md-3 col-sm-4 cat-1 cat-2">
                            <?php
                            $anh = anh_getHot($noibat['Id']);
                            $src = 'upload/sach/' . $anh['DuongDan'];
                            $alt = $anh['TenAnh'];
                            ?>
                            <div class="item-thumbnail" style="width: 16.4rem; height:17.6rem; overflow: hidden;">
                                <a class="fancybox" href="<?= $src ?>">
                                    <img src="<?= $src ?>" alt="<?= $alt ?>" height="100%">
                                </a>
                            </div><!-- /.item-thumbnail -->

                            <div class="item-content">

                                <div class="buttons">
                                    <button class="add-to-cart" onclick="addToCart(<?=$noibat['Id']?> ,' <?=$noibat['TenSach']?>' , <?=$noibat['DonGia']?>, 1)">Thêm vào giỏ<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->

                                <h3 class="item-title"><a href="index.php?pg=detail&id_sach=<?= $noibat['Id'] ?>">
                                        <?= $noibat['TenSach'] ?>
                                    </a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency"></span>
                                    <span class="price">
                                        <?= $noibat['DonGia'] ?>
                                    </span>
                                </div><!-- /.item-price -->

                                <div class="rating">
                                    <input type="hidden" class="rating-tooltip-manual" id="danhgia_<?= $noibat['Id'] ?>"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5"
                                        value="<?= number_format($noibat['DanhGia'], 2) ?>" />
                                </div>
                                <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                <script src="link_den_bootstrap_rating"></script>
                                <script>
                                    $(document).ready(function () {
                                        // var danhgia = <?= number_format($noibat['DanhGia'],2,'.',',') ?>;
                                        var danhgia = <?=$noibat['DanhGia']?>;
                                        $('#danhgia_<?= $noibat['Id'] ?>').rating('rate', danhgia);
                                    });
                                </script>

                                <!-- /.rating -->

                            </div><!-- /.item-content -->

                        </div><!-- /.item -->
                    <?php endforeach; ?>



                </div><!-- /.featured-sorting -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.featured -->


<section class="trending-03">
    <div class="section-padding">
        <div class="container">
            <h2 class="section-title" style="text-align:center">Sách bán chạy <span></span></h2><!-- /.section-title -->

            <div class="section-details">
                <div class="row">
                    <div class="trending-slider-03 text-center">
                        <?php
                        $dsbanchay = ds_getHots(6);
                        foreach ($dsbanchay as $banchay): ?>
                            <?php
                            $anh = anh_getHot($banchay['Id']);
                            $src = 'upload/sach/' . $anh['DuongDan'];
                            $alt = $anh['TenAnh'];
                            ?>
                            <div class="item">
                                <div class="item-thumbnail" style="width: 16.4rem; height:17.6rem; overflow: hidden;">
                                    <a class="fancybox" href="<?= $src ?>">
                                        <img src="<?= $src ?>" alt="<?= $alt ?>" height:100%></a>
                                </div>
                                <!-- /.item-thumbnail -->
                                <div class="item-content">
                                    <div class="buttons">
                                        <button class="add-to-cart">Thêm vào giỏ<i class="fa fa-shopping-cart"></i></button>
                                        <button class="wish-list"><i class="fa fa-heart"></i></button>
                                    </div><!-- /.buttons -->
                                    <h3 class="item-title"><a href="index.php?pg=detail&id_sach=<?= $banchay['Id'] ?>">
                                            <?= $banchay['TenSach'] ?>
                                        </a></h3><!-- /.item-title -->
                                    <div class="item-price">
                                        <span class="currency">$</span>
                                        <span class="price">
                                            <?= $banchay['DonGia'] ?>
                                        </span>
                                    </div><!-- /.item-price -->

                                    <div class="rating">
                                        <input type="hidden" class="rating-tooltip-manual"
                                            id="danhgia_<?= $banchay['Id'] ?>" data-filled="fa fa-star"
                                            data-empty="fa fa-star-o" data-fractions="5"
                                            value="<?= number_format($banchay['DanhGia'], 2) ?>" />
                                    </div>
                                    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
                                    <script src="link_den_bootstrap_rating"></script>
                                    <script>
                                        $(document).ready(function () {
                                            var danhgia = <?= number_format($banchay['DanhGia'], 2) ?>;
                                            $('#danhgia_<?= $banchay['Id'] ?>').rating('rate', danhgia);
                                        });
                                    </script>

                                    <!-- /.rating -->
                                </div><!-- /.item-content -->
                            </div><!-- /.item -->
                        <?php endforeach; ?>

                    </div><!-- /.trending-slider -->
                </div><!-- /.row -->
            </div><!-- /.section-details -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.trending -->