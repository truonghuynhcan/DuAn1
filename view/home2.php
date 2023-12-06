<script src="layout/assets/js/cutdown.js"></script>
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
                                    <a href="index.php?pg=product" style="text-transform:capitalize;"><?=$theloai['TenTheLoai']?></a>
                                </li>
                            <?php endforeach;?>
   
                        </ul>
                    </div><!-- /.shop-category -->
                </div>
                
                <div class="col-sm-6">
                    <div id="banner-slider" class="banner-slider carousel slide background-bg"
                        data-image-src="layout/images/home11/slider/1.jpg">

                        <ol class="carousel-indicators">
                            <li data-target="#banner-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#banner-slider" data-slide-to="1"></li>
                            <li data-target="#banner-slider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <div class="slider-content">
                                        <h4 class="top-title">Brand New</h4>
                                        <h2 class="main-title">Iphone 6s plus</h2><!-- /.banner-title -->
                                        <h3 class="sub-title">Rose Gold</h3><!-- /.banner-sub-title -->
                                        <a href="#" class="btn">Shop now</a><!-- /.btn -->
                                    </div><!-- /.slider-content -->
                                </div>

                                <div class="col-sm-6">
                                    <img class="banner-image" src="layout/images/home11/slider/phones.png" alt="Slider Image">
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="col-sm-6">
                                    <img class="banner-image" src="layout/images/home11/slider/phone2.png" alt="Slider Image">
                                </div>

                                <div class="col-sm-6">
                                    <div class="slider-content">
                                        <h4 class="top-title">Brand New</h4>
                                        <h2 class="main-title">Iphone 6s plus</h2><!-- /.banner-title -->
                                        <h3 class="sub-title">Rose Gold</h3><!-- /.banner-sub-title -->
                                        <a href="#" class="btn">Shop now</a><!-- /.btn -->
                                    </div><!-- /.slider-content -->
                                </div>
                            </div><!-- /.item -->

                            <div class="item">
                                <div class="col-sm-6">
                                    <div class="slider-content">
                                        <h4 class="top-title">Brand New</h4>
                                        <h2 class="main-title">Iphone 6s plus</h2><!-- /.banner-title -->
                                        <h3 class="sub-title">Rose Gold</h3><!-- /.banner-sub-title -->
                                        <a href="#" class="btn">Shop now</a><!-- /.btn -->
                                    </div><!-- /.slider-content -->
                                </div>

                                <div class="col-sm-6">
                                    <img class="banner-image" src="layout/images/home11/slider/phone3.png" alt="Slider Image">
                                </div>
                            </div><!-- /.item -->
                        </div>
                    </div><!-- /#banner-slider -->
                </div>
                
                <div class="col-sm-3">
                    <h3 class="banner-title">Top Seller</h3><!-- /.banner-title -->
                    <div id="top-sell-slider" class="top-sell-slider carousel slide text-center">

                        <ol class="carousel-indicators">
                            <li data-target="#top-sell-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#top-sell-slider" data-slide-to="1"></li>
                            <li data-target="#top-sell-slider" data-slide-to="2"></li>
                        </ol>
                    
                        <div class="carousel-inner">
                            <div class="item active">                     
                                <div class="product-item">
                                    <div class="item-thumbnail">
                                        <img src="layout/images/home11/slider/2.jpg" alt="Item Thumbnail">
                                        <div class="add-cart"><a href="#" class="btn">Add to cart</a></div>
                                        <!-- /.add-cart -->
                                    </div><!-- /.item-thumbnail -->
                        
                                    <div class="item-details">
                                        <h3 class="item-title"></h3><!-- /.item-title -->
                                        <div class="item-price"><span class="currency">$</span><span
                                                class="price"></span></div><!-- /.item-price -->
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

                <ul class="filter">
                    <!-- đổ dữ liệu thể loại -->
                    <li><a class="active" href="#" data-filter="*">Tất cả</a></li>
                    <li><a href="#" data-filter=".cat-1">Công nghệ thông tin</a></li>
                    <li><a href="#" data-filter=".cat-2">Trinh thám</a></li>
                    <li><a href="#" data-filter=".cat-3">Kĩ năng</a></li>
                </ul>

                <div class="featured-sorting">
                <?php
                    $dsnoibat = ds_getNew(8);
                    foreach ($dsnoibat as $sp): ?>
                    <div class="item col-md-3 col-sm-4 cat-1 cat-2">
                        <?php 
                        $anh = anh_getHot($sp['Id']);
                        ?>
                        <div class="item-thumbnail" style="width: 16.4rem; height:17.6rem; overflow: hidden;">
                            <a class="fancybox" href="images/home08/featured/1.jpg">
                                <img src="upload/sach/<?=$anh['DuongDan']?>" alt="" height="100%">
                            </a>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                        
                            <div class="buttons">
                               <button class="add-to-cart" onclick="addToCart(<?=$sp['Id']?> ,' <?=$sp['TenSach']?>' , <?=$sp['DonGia']?>, 1)">Thêm vào giỏ<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="index.php?pg=detail&Id=<?php echo $sp['Id'];?>"><?=$sp['TenSach']?></a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency"></span>
                                <span class="price"><?php echo number_format($sp['DonGia'],0,",",".")?> VNĐ</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                            
                        </div><!-- /.item-content -->
                      
                    </div><!-- /.item -->
                    <?php endforeach;?>

                

                </div><!-- /.featured-sorting -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.featured -->

<section class="trending-03">
    <div class="section-padding">
        <div class="container">
            <h2 class="section-title" >Sách bán chạy <span></span></h2><!-- /.section-title -->
            
            <div class="section-details">
                <div class="row">
                    <div class="trending-slider-03 text-center">
                    <?php
                        $dsbanchay = ds_getHots(6);
                        foreach ($dsbanchay as $sp): ?>
                        
                        <div class="item">
                        <?php
                        $anh = anh_getHot($sp['Id']);
                        ?>
                            <div class="item-thumbnail"style="width: 16.4rem; height:17.6rem; overflow: hidden;">
                            <a class="fancybox" href="images/home08/featured/2.jpg">
                                <img src="upload/sach/<?=$anh['DuongDan']?>" alt=""height:100%></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart"  onclick="addToCart(<?=$sp['Id']?> ,' <?=$sp['TenSach']?>' , <?=$sp['DonGia']?>, 1)" >Thêm giỏ hàng<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="index.php?pg=detail&Id=<?php echo $sp['Id'];?>"><?=$sp['TenSach']?></a></h3><!-- /.item-title -->
                                <div class="item-price">
                                
                                    <span class="price"><?php echo number_format($sp['DonGia'],0,",",".")?> VNĐ</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->
                        <?php endforeach;?>

                    </div><!-- /.trending-slider -->
                </div><!-- /.row -->
            </div><!-- /.section-details -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.trending -->
