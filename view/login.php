<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
        <div class="container">
            <ol class="breadcrumb" style="margin-top: 0;">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Đăng nhập</li>
            </ol><!-- /.breadcrumb -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.page-name-sec -->



<section class="login-section">
    <div class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="sign-in bg-gray">
                        <h2 class="title">Đăng nhập</h2>
                        <p style="color: red;">
                            <?php
                                if (isset($tb)&&($tb !="")) {
                                    echo $tb;
                                }
                            ?>
                        </p>
                        <form class="sign-in-form" id="sign-in-form" action="index.php?pg=login" method="post">
                            <p class="form-input">
                                <input type="text" name="user" id="user_login" class="input" value=""
                                    placeholder="Tên đăng nhập" required />
                            </p>
                            <p class="form-input">
                                <input type="password" name="pass" id="user_pass" class="input" value=""
                                    placeholder="Mật khẩu" required />
                            </p>
                            <p class="form-input">
                                <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Đăng nhập" />
                            </p>
                            <p class="checkbox pull-left">
                                <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me" />
                                Ghi nhớ cho lần đăng nhập tiếp theo
                                <a href="index.php?pg=forgotpassword" class="pull-right" title="Recover Your Lost Password">Quên mật khẩu?</a>
                            </p>
                        </form>

                        <div class="login-social">
                            <button class="btn facebook">Đăng nhập với Facebook</button>
                            <button class="btn twitter">Đăng nhập với Twitter</button>
                        </div><!-- /.login-social -->
                    </div><!-- /.sign-in -->
                </div>

                <div class="col-md-7">
                    <div class="sign-up">

                    </div><!-- /.sign-up -->

                </div>
            </div><!-- /.row -->
        </div><!--/.container-->
    </div><!-- /.section-padding -->
</section><!--/.login-section-->