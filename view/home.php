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
                                    <a href="#" style="text-transform:capitalize;"><?=$theloai['TenTheLoai']?></a>
                                </li>
                            <?php endforeach;?>
                            <!-- <li class="menu-item menu-item-has-children">
                                <a href="#">Computer & Accessories</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Tablets & Smartphones</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Video Games & Consoles</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Notebooks & Laptops</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Gadgets & Components</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Car Electronics & GPS</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item menu-item-has-children">
                                <a href="#">Home Entertainments</a>
                                <ul>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">SLR Camera (Body Only)</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Nikon</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Compact Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Canon</a></li>
                                            <li><a href="#">Fuji</a></li>
                                            <li><a href="#">Kodak</a></li>
                                            <li><a href="#">Nikon</a></li>
                                            <li><a href="#">Samsung</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Video Camera</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Panasonic</a></li>
                                            <li><a href="#">Sony</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children">
                                        <a href="#">Webcam</a>
                                        <ul>
                                            <li><a href="#">All Brands</a></li>
                                            <li><a href="#">A4-Tech</a></li>
                                            <li><a href="#">Creative</a></li>
                                            <li><a href="#">Genius</a></li>
                                            <li><a href="#">Logitech</a></li>
                                            <li><a href="#">Mercury</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->

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

                <ul class="filter">
                    <!-- đổ dữ liệu thể loại -->
                    <li><a class="active" href="#" data-filter="*">Tất cả</a></li>
                    <li><a href="#" data-filter=".cat-1">Công nghệ thông tin</a></li>
                    <li><a href="#" data-filter=".cat-2">Trinh thám</a></li>
                    <li><a href="#" data-filter=".cat-3">Kĩ năng</a></li>
                </ul>

                <div class="featured-sorting">
                    <div class="item col-md-3 col-sm-4 cat-1 cat-2">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/1.jpg">
                                <img src="layout/images/home08/featured/1.jpg" alt="Item Thumbnail">
                            </a>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-3">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/2.jpg">
                                <img src="layout/images/home08/featured/2.jpg" alt="Item Thumbnail">
                            </a>
                            <span class="ribbon sale">-35%</span>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-2">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/3.jpg">
                                <img src="layout/images/home08/featured/3.jpg" alt="Item Thumbnail">
                            </a>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-1 cat-3">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/4.jpg">
                                <img src="layout/images/home08/featured/4.jpg" alt="Item Thumbnail">
                            </a>
                            <span class="ribbon sale">-35%</span>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-3">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/5.jpg">
                                <img src="layout/images/home08/featured/5.jpg" alt="Item Thumbnail">
                            </a>
                            <span class="ribbon sale">-35%</span>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-1 cat-2">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/6.jpg">
                                <img src="layout/images/home08/featured/6.jpg" alt="Item Thumbnail">
                            </a>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-1 cat-3">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/7.jpg">
                                <img src="layout/images/home08/featured/7.jpg" alt="Item Thumbnail">
                            </a>
                            <span class="ribbon sale">-35%</span>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                    <div class="item col-md-3 col-sm-4 cat-2">
                        <div class="item-thumbnail">
                            <a class="fancybox" href="images/home08/featured/8.jpg">
                                <img src="layout/images/home08/featured/8.jpg" alt="Item Thumbnail">
                            </a>
                        </div><!-- /.item-thumbnail -->

                        <div class="item-content">
                            <div class="buttons">
                                <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                <button class="wish-list"><i class="fa fa-heart"></i></button>
                            </div><!-- /.buttons -->

                            <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                            <div class="item-price">
                                <span class="currency">$</span>
                                <span class="price">49.00</span>
                            </div><!-- /.item-price -->

                            <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                    data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                            <!-- /.rating -->
                        </div><!-- /.item-content -->
                    </div><!-- /.item -->

                </div><!-- /.featured-sorting -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.featured -->




<section class="deal background-bg text-center" data-image-src="layout/images/home11/deal.jpg">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="discount">
                        <img src="layout/images/home11/tab.png" alt="Tab Image">
                        <span>-70%</span>
                    </div><!-- /.discount -->
                </div>

                <div class="col-md-5 col-sm-6">
                    <h2 class="title">Awesome Deal</h2><!-- /.title -->
                    <h3 class="sub-title">Buy Surface Pro 3! Hurry!</h3><!-- /.sub-title -->
                    <div id="time_countdown1" class="time-count-container">

                        <div class="time-box">
                            <div class="time-box-inner dash days_dash">
                                <span class="time-number">
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                </span><!-- /.time-number -->
                                <span class="time-name">Days</span>
                            </div><!-- /.time-box-inner -->
                        </div><!-- /.time-box -->

                        <div class="time-box">
                            <div class="time-box-inner dash hours_dash">
                                <span class="time-number">
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                </span><!-- /.time-number -->
                                <span class="time-name">Hours</span>
                            </div><!-- /.time-box-inner -->
                        </div><!-- /.time-box -->

                        <div class="time-box">
                            <div class="time-box-inner dash minutes_dash">
                                <span class="time-number">
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                </span><!-- /.time-number -->
                                <span class="time-name">Mins</span>
                            </div><!-- /.time-box-inner -->
                        </div><!-- /.time-box -->

                        <div class="time-box">
                            <div class="time-box-inner dash seconds_dash">
                                <span class="time-number">
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                    <span class="digit">0</span>
                                </span><!-- /.time-number -->
                                <span class="time-name">Sec</span>
                            </div><!-- /.time-box-inner -->
                        </div><!-- /.time-box -->

                    </div><!-- /#time_countdown -->

                    <a class="btn" href="#">Shop now</a>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.deal -->





<section class="trending-03">
    <div class="section-padding">
        <div class="container">
            <h2 class="section-title">Sách bán chạy <span></span></h2><!-- /.section-title -->

            <div class="section-details">
                <div class="row">
                    <div class="trending-slider-03 text-center">

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/2.jpg"><img
                                        src="layout/images/home08/featured/2.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/3.jpg"><img
                                        src="layout/images/home08/featured/3.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/4.jpg"><img
                                        src="layout/images/home08/featured/4.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/5.jpg"><img
                                        src="layout/images/home08/featured/5.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/6.jpg"><img
                                        src="layout/images/home08/featured/6.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/7.jpg"><img
                                        src="layout/images/home08/featured/7.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/8.jpg"><img
                                        src="layout/images/home08/featured/8.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->

                        <div class="item">
                            <div class="item-thumbnail"><a class="fancybox" href="images/home08/featured/9.jpg"><img
                                        src="layout/images/home08/featured/9.jpg" alt="Item Thumbnail"></a></div>
                            <!-- /.item-thumbnail -->
                            <div class="item-content">
                                <div class="buttons">
                                    <button class="add-to-cart">Add to cart<i class="fa fa-shopping-cart"></i></button>
                                    <button class="wish-list"><i class="fa fa-heart"></i></button>
                                </div><!-- /.buttons -->
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="item-price">
                                    <span class="currency">$</span>
                                    <span class="price">49.00</span>
                                </div><!-- /.item-price -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                            </div><!-- /.item-content -->
                        </div><!-- /.item -->


                    </div><!-- /.trending-slider -->
                </div><!-- /.row -->
            </div><!-- /.section-details -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.trending -->




<section class="top-rated bg-gray text-center">
    <div class="section-padding">
        <div class="container">
            <div class="section-top">
                <h2 class="section-title">Top rated<span></span></h2><!-- /.section-title -->
            </div><!-- /.section-top -->

            <div class="row">
                <div class="top-rated-slider owl-carousel owl-theme">

                    <div class="item">
                        <div class="col-md-6">
                            <div class="item-thumbnail">
                                <img src="layout/images/home11/rated/1.jpg" alt="Item Thumbnail">
                                <span class="ribbon sale">Sale</span><!-- /.ribbon -->

                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist
                                        </span></button>
                                    <a class="fancybox" href="images/home11/rated/1.jpg"><i class="fa fa-search"></i>
                                        <span> Quick View</span></a>
                                </div><!-- /.item-inner -->
                            </div><!-- /.item-thumbnail -->
                        </div>

                        <div class="col-md-6">
                            <div class="item-details">
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                                <div class="item-price">
                                    <span class="currency">$</span><!-- /.currency -->
                                    <span class="price">88.00</span><!-- /.price -->
                                </div><!-- /.item-price -->

                                <div class="previous-price"><span class="currency">$</span><span
                                        class="price">99.00</span></div><!-- /.previous-price -->
                                <p class="description">
                                    I returned from the City about three o'clock on that May pretty well
                                </p><!-- /.description -->
                                <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-6">
                            <div class="item-thumbnail">
                                <img src="layout/images/home11/rated/2.jpg" alt="Item Thumbnail">
                                <span class="ribbon sale">Sale</span><!-- /.ribbon -->
                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist
                                        </span></button>
                                    <a class="fancybox" href="images/home11/rated/2.jpg"><i class="fa fa-search"></i>
                                        <span> Quick View</span></a>
                                </div><!-- /.item-inner -->
                            </div><!-- /.item-thumbnail -->
                        </div>

                        <div class="col-md-6">
                            <div class="item-details">
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                                <div class="item-price">
                                    <span class="currency">$</span><!-- /.currency -->
                                    <span class="price">88.00</span><!-- /.price -->
                                </div><!-- /.item-price -->

                                <div class="previous-price"><span class="currency">$</span><span
                                        class="price">99.00</span></div><!-- /.previous-price -->
                                <p class="description">
                                    had been three months in the Old Country, and was fed up with it
                                </p><!-- /.description -->
                                <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-6">
                            <div class="item-thumbnail">
                                <img src="layout/images/home11/rated/3.jpg" alt="Item Thumbnail">
                                <span class="ribbon sale">Sale</span><!-- /.ribbon -->
                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist
                                        </span></button>
                                    <a class="fancybox" href="images/home11/rated/3.jpg"><i class="fa fa-search"></i>
                                        <span> Quick View</span></a>
                                </div><!-- /.item-inner -->
                            </div><!-- /.item-thumbnail -->
                        </div>

                        <div class="col-md-6">
                            <div class="item-details">
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                                <div class="item-price">
                                    <span class="currency">$</span><!-- /.currency -->
                                    <span class="price">88.00</span><!-- /.price -->
                                </div><!-- /.item-price -->

                                <div class="previous-price"><span class="currency">$</span><span
                                        class="price">99.00</span></div><!-- /.previous-price -->
                                <p class="description">
                                    The weather made me liverish, the talk of the ordinary Englishman made sick
                                </p><!-- /.description -->
                                <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="col-md-6">
                            <div class="item-thumbnail">
                                <img src="layout/images/home11/rated/4.jpg" alt="Item Thumbnail">
                                <span class="ribbon sale">Sale</span><!-- /.ribbon -->

                                <div class="item-inner">
                                    <button class="wish-list"><i class="fa fa-heart"></i><span>Add to wishlist
                                        </span></button>
                                    <a class="fancybox" href="images/home11/rated/4.jpg"><i class="fa fa-search"></i>
                                        <span> Quick View</span></a>
                                </div><!-- /.item-inner -->
                            </div><!-- /.item-thumbnail -->
                        </div>

                        <div class="col-md-6">
                            <div class="item-details">
                                <h3 class="item-title"><a href="#">Product name here</a></h3><!-- /.item-title -->
                                <div class="rating"><input type="hidden" class="rating-tooltip-manual"
                                        data-filled="fa fa-star" data-empty="fa fa-star-o" data-fractions="5" /></div>
                                <!-- /.rating -->
                                <div class="item-price">
                                    <span class="currency">$</span><!-- /.currency -->
                                    <span class="price">88.00</span><!-- /.price -->
                                </div><!-- /.item-price -->

                                <div class="previous-price"><span class="currency">$</span><span
                                        class="price">99.00</span></div><!-- /.previous-price -->
                                <p class="description">
                                    It made me bite my lips to think of the plans I had been building up those
                                </p><!-- /.description -->
                                <a href="#" class="btn">Add to cart</a><!-- /.btn -->
                            </div>
                        </div>
                    </div>

                </div><!-- /.top-rated-slider -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.top-rated -->