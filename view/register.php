<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
        <div class="container">
            <ol class="breadcrumb" style="margin-top: 0;">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Đăng ký</li>
            </ol><!-- /.breadcrumb -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.page-name-sec -->


<section class="login-section">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>

                <div class="col-md-8">
                    <div class="sign-up">
                        <h2 class="title">Đăng ký ngay<span></span></h2><!-- /.title -->

                        <form class="signup-form" action="index.php?pg=register" method="post">
                            <p class="form-input">
                                <input type="text" name="hovaten" class="form-control" placeholder="Họ và tên" required>
                            </p>
                            <p class="form-input">
                                <input type="text" name="diachi" class="form-control" placeholder="Địa chỉ" required>
                            </p>
                            <p class="form-input">
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </p>
                            <p class="form-input">
                                <input type="text" name="sdt" class="form-control" placeholder="Phone" required>
                            </p>
                            <p class="form-input">
                                <input type="text" name="taikhoan" class="form-control" placeholder="Tên đăng nhập" required>
                            </p>
                            <p class="form-input">
                                <input type="password" name="matkhau" class="form-control" placeholder="Mật khẩu" required>
                            </p>
                            <p class="form-input">
                                <input type="password" name="matkhau2" class="form-control" placeholder="Xác minh mật khẩu" required>
                            </p>
                            <p>
                                <?php
                                    if (isset($tb)&&($tb !="")) {
                                        echo $tb;
                                    }
                                ?>
                            </p>
                            <p class="checkbox pull-left">
                                <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me" required/>
                                Tôi đồng ý
                                <a href="#"> các điều khoản và điều kiện</a>
                            </p>
                            <p class="submit-input pull-right">
                                <input type="submit" class="btn" name="signup-form-submit" value="Đăng ký">
                            </p>
                        </form>
                        <div class="login-social" style="display:none;">
                            <button class="btn google" style="background-color:#F44336;">Đăng ký với Google</button>
                        </div><!-- /.login-social -->
                    </div><!-- /.sign-up -->

                </div>
                <div class="col-md-2"></div>

            </div><!-- /.row -->
        </div><!--/.container-->
    </div><!-- /.section-padding -->
</section><!--/.login-section-->