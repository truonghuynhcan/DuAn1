<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>     <html class="no-js" lang=""> <!<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <link rel="icon" href="layout/images/logoGalaxyBook 2.png" type="image/png">
    <title>GalaxyBook</title>
    <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" type="text/css" href="layout/assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="layout/assets/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="layout/assets/css/et-line-icons.css">

    <link rel="stylesheet" href="layout/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="layout/assets/css/slick.css">
    <link rel="stylesheet" href="layout/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="layout/assets/css/style.css">
    <link rel="stylesheet" href="layout/assets/css/themes.css">
    <script src="layout/assets/js/cart.js"></script>
    <?php
        if (isset($_GET['pg'])) {
            switch ($_GET['pg']) {
                case 'detail':
                    break;
                case 'product':
                    $css = "shop/shop.css";
                    break;
                case 'cart':
                    $css = "shop/cart.css";
                    break;
                case 'login':
                case 'forgotpassword':
                case 'register':
                    $css = "pages/register.css";
                    break;
                    
                default:
                    $css = "home/home-11.css";
            }
            
        } else {
            $css = 'home/home-11.css';
        }
        echo '<link rel="stylesheet" href="layout/assets/css/'.$css .'">';
    ?>
    <!--[if lte IE 7]><script src="lte-ie7.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="layout/assets/js/vendor/html5-3.6-respond-1.4.2.min.js"></script><![endif]-->

</head>


<body>


    <header id="masthead" class="masthead">

        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 top-left text-left">
                        <p class="top-contact">
                            <i class="ti-email"></i><span><a href="#">truonghuynhcan@gmail.com</a></span>
                            <i class="ti-mobile"></i><span>+84 971735xxx</span>
                        </p><!-- /.top-contact -->

                    </div><!-- /.top-left -->

                    <div class="col-sm-7 top-right text-right">
                        <div id="currency" class="currency dropdown">
                            <a href="#" class="current-title">VND</a>
                            <ul class="unsorted-list">
                                <li>USD $</li>
                            </ul>
                        </div>

                        <div id="language" class="language dropdown">
                            <a href="#" class="current-title">Việt Nam</a>
                            <ul class="unsorted-list">
                                <li>English</li>
                            </ul>
                        </div>

                        <div class="wish-list">
                            <a href="#" class="current-title">Yêu thích</a>
                            <span class="count">0</span>
                            <span><i class="ti-heart"></i></span>
                        </div>


                        <div class="my-account dropdown">
                            <?php
                                if (isset($_SESSION['user'])){
                                    echo '
                                        <a href="#">'.$_SESSION['user']['HoVaTen'].'<i class="ti-user"></i></a>
                                        <ul class="unsorted-list">
                                            <li><a href="#">Cá Nhân</a></li>
                                            <li><a href="#">Yêu Thích</a></li>
                                            <li><a href="cart.html">Giỏ Hàng</a></li>
                                            <li><a href="checkout.html">Thanh toán</a></li>
                                            <li><a href="index.php?pg=logout">Đăng xuất</a></li>
                                        </ul>
                                    ';
                                }else {
                                    echo '
                                        <a href="#">Tài khoản<i class="ti-user"></i></a>
                                        <ul class="unsorted-list">
                                            <li><a href="index.php?pg=login">Đăng Nhập</a></li>
                                            <li><a href="index.php?pg=register">Đăng Ký</a></li>
                                        </ul>
                                    ';
                                    
                                }
                            ?>
                            <!-- <a href="#">Tài Khoản<i class="ti-user"></i></a>
                            <ul class="unsorted-list">
                                <li><a href="index.php?pg=login">Đăng Nhập</a></li>
                                <li><a href="register.html">Đăng Ký</a></li>
                                <li><a href="#">Cá Nhân</a></li>
                                <li><a href="#">Yêu Thích</a></li>
                                <li><a href="cart.html">Giỏ Hàng</a></li>
                                <li><a href="checkout.html">Thanh toán</a></li>
                            </ul> -->
                        </div><!-- /.my-account -->

                    </div><!-- /.top-right -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-top -->

        <div class="header-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <h1><a class="navbar-brand hidden-xs" href="index.php"><img src="layout/images/logoGalaxyBook.png"
                                    alt="Site Logo"></a></h1>
                    </div>
                    <div class="col-sm-7">
                        <div class="top-search-form">
                            <form action="#" method="post" class="menu-form">
                                <fieldset>
                                    <select name="category" id="category">
                                        <option selected="selected">Tất cả</option>
                                        <option>Công nghệ thông tin</option>
                                        <option>Women's Wear</option>
                                        <option>Kid's Wear</option>
                                        <option>Men's Fashion</option>
                                        <option>Women's Fashion</option>
                                        <option>Kid's Fashion</option>
                                        <option>Home Applience</option>
                                        <option>Electronics</option>
                                        <option>Gadgets</option>
                                        <option>Mobile</option>
                                        <option>Laptop</option>
                                        <option>Others</option>
                                    </select>
                                </fieldset>

                                <input type="text" placeholder="tìm kiếm ..." class="form-control">
                                <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div><!-- /.top-search-form -->
                    </div>
                    <div class="col-sm-2">
                        <div class="shop-cart">
                            <a class="cart-control" href="index.php?pg=cart" title="View your shopping cart">
                                <i class="ti-bag"></i>
                                <span class="count">3</span>
                                <span>Giỏ hàng</span>
                            </a><!-- /.cart-control -->

                        
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.header-middle -->

        <div class="header-bottom">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#main-menu" aria-expanded="false">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand visible-xs" href="./">
                        <img src="layout/images/logo.png" alt="Site Logo">
                    </a><!-- /.navbar-brand -->
                </div>

                <nav id="main-menu" class="menu collapse navbar-collapse pull-left">
                    <ul class="nav navbar-nav">
                        <li class="menu-item menu-item-has-children active">
                            <a href="index.php">Trang chủ</a>
                        </li>

                        <!-- Pages -->
                        <li class="menu-item menu-item-has-children menu-item-has-mega-menu">
                            <a href="#">Sách</a>
                            <!-- show các thể loại -->
                            <ul class="mega-menu sub-menu">
                                <li>
                                    <div class="container">
                                        <div class="menu-item col-sm-3">
                                            <ul class="menu-list">
                                                <li><a href="404.html">404</a></li>
                                                <li><a href="about-01.html">About</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="contact.html">Contact</a></li>
                                            </ul>
                                        </div>

                                        <div class="menu-item col-sm-3">
                                            <ul class="menu-list">
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="faq.html">Faq</a></li>
                                                <li><a href="pricing.html">Pricing</a></li>
                                                <li><a href="register.html">Register / Login</a></li>
                                            </ul>
                                        </div>

                                        <div class="menu-item col-sm-3">
                                            <ul class="menu-list">
                                                <li><a href="service-01.html">Service</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="shop-3column.html">Shop 3 Column</a></li>
                                                <li><a href="shop-4column.html">Shop 4 Column</a></li>
                                            </ul>
                                        </div>

                                        <div class="menu-item col-sm-3">
                                            <ul class="menu-list">
                                                <li><a href="shop-list.html">Shop List 01</a></li>
                                                <li><a href="shop-list-no-sidebar.html">Shop List 02</a></li>
                                                <li><a href="shop-details-01.html">Shop Details 01</a></li>
                                                <li><a href="shop-details-02.html">Shop Details 02</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!-- Blog -->
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Classic</a>
                                    <ul class="sub-menu">
                                        <li><a href="classic-01.html">Right Sidebar</a></li>
                                        <li><a href="classic-02.html">Left Sidebar</a></li>
                                        <li><a href="classic-03.html">No Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Grid</a>
                                    <ul class="sub-menu">
                                        <li><a href="grid-2column-01.html">2 Column 01</a></li>
                                        <li><a href="grid-2column-02.html">2 Column 02</a></li>
                                        <li><a href="grid-3column-01.html">3 Column 01</a></li>
                                        <li><a href="grid-3column-02.html">3 Column 02</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Masonary</a>
                                    <ul class="sub-menu">
                                        <li><a href="masonry-2column-01.html">2 Column 01</a></li>
                                        <li><a href="masonry-2column-02.html">2 Column 02</a></li>
                                        <li><a href="masonry-3column-01.html">3 Column 01</a></li>
                                        <li><a href="masonry-3column-02.html">3 Column 02</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Blog Single</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-single-classic.html">Single Classic</a></li>
                                        <li><a href="blog-single-no-sidebar.html">Single Fullwidth</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Right Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <!-- Portfolio -->
                        <li class="menu-item menu-item-has-children">
                            <a href="#">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Grid 2 Column</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-grid-2column-01.html">2 Column 01</a></li>
                                        <li><a href="portfolio-grid-2column-02.html">2 Column 02</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Grid 3 Column</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-grid-3column.html">3 Column 01</a></li>
                                        <li><a href="portfolio-grid-3column-02.html">3 Column 02</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Grid 4 Column</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-grid-4column.html">4 Column 01</a></li>
                                        <li><a href="portfolio-grid-4column-02.html">4 Column 02</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Masonry 3 Column</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-masonry-3column.html">3 Column 01</a></li>
                                        <li><a href="portfolio-masonry-3column-02.html">3 Column 02</a></li>
                                    </ul>
                                </li>

                                <li><a href="portfolio-list.html">List Style</a></li>

                                <li class="menu-item menu-item-has-children">
                                    <a href="#">Portfolio Detail</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-details.html">Details 01</a></li>
                                        <li><a href="portfolio-details-02.html">Details 02</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>


                    </ul><!-- /.navbar-nav -->
                </nav><!-- /.navbar-collapse -->

                <div class="menu-social pull-right">
                    <a href="#"><i class="ti-twitter-alt"></i></a>
                    <a href="#"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-pinterest-alt"></i></a>
                    <a href="#"><i class="ti-vimeo-alt"></i></a>
                </div><!-- /.menu-social -->
            </div><!-- /.container -->
        </div><!-- /.header-bottom -->

    </header><!-- /#masthead -->