<section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
        <div class="container">
            <ol class="breadcrumb" style="margin-top: 0;">
                <li><a href="#">Trang chủ</a></li>
                <li class="active">Quên mật khẩu</li>
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
                        <h2 class="title">Quên mật khẩu</h2>
                        <p style="color: red;">
                            <?php
                               if (isset($_SESSION['forgotpassword_error']) && !empty($_SESSION['forgotpassword_error'])) {
                                echo $_SESSION['forgotpassword_error'];
                                // Xóa thông báo lỗi khỏi session sau khi đã hiển thị
                                unset($_SESSION['forgotpassword_error']);
                            }
                            ?>
                        </p>
                        <form class="sign-in-form" id="sign-in-form" action="index.php?pg=forgotpassword" method="post">
                            <p class="form-input">
                                <input type="text" name="taikhoan" id="user_login" class="input" value="<?php if(isset($taikhoan)==true) echo $taikhoan?>"
                                    placeholder="Tên đăng nhập" required />
                            </p>
                            <p class="form-input">
                                <input type="email" name="email" id="user_login" class="input" value="<?php if(isset($email)==true) echo $email?>"
                                    placeholder="Email" required />
                            </p>
                            <p class="form-input">
                                <input type="text" name="maxacminh" class="input" value=""
                                    placeholder="Mã xác minh" required />
                            </p>
                            <p class="form-input">
                                <input type="submit" name="forgotpassword-submit" id="wp-submit" class="btn" value="Gửi mã xác minh" />
                            </p>
                        </form>
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