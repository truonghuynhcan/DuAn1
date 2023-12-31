<?php
    $HoVaTen = $_SESSION['user']['HoVaTen'];
    $Email = $_SESSION['user']['Email'];
    $SDT = $_SESSION['user']['SDT'];
    $TenDangNhap = $_SESSION['user']['TaiKhoan'];
    $NgayTao = $_SESSION['user']['NgayTao'];
    $Avatar = $_SESSION['user']['Avatar'];
?>
<section class="blog-posts left-sidebar">
    <div class="section-padding" style="background-color: #efefef;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pull-right" style="background-color: white;">
                    <article class="my-profile">
                        <div class="head">
                            <h1>tài khoản của tôi</h1>
                            <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                        </div>
                        <div class="body row">
                            <div class="col-md-8">
                                <div class="container-1">
                                    <br>
                                    <form action="index.php?pg=my-profile" method="post">
                                    <table style="padding-right: 1rem;" class="tables--info">
                                        <tr>
                                            <td>Họ và tên</td>
                                            <td><input type="text" name="name" id="" value="<?=$HoVaTen?>"></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?=$Email?> <a href="">Thay đổi</a></td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại</td>
                                            <td><?=$SDT?> <a href="">Thay đổi</a></td>
                                        </tr>
                                        <tr>
                                            <td>Tên đăng nhập</td>
                                            <td><?=$TenDangNhap?></td>
                                        </tr>
                                        <tr>
                                            <td>Mật khẩu</td>
                                            <td><a href="#">Thay đổi mật khẩu</a></td>
                                        </tr>
                                        <tr>
                                            <td>Ngày tạo tài khoản</td>
                                            <td><?=$NgayTao?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td><button type="submit" name="update--info" class="btn bg-gold btn-radius btn-xs" style="width: 100px; line-height: 2rem;">Lưu</button></td>
                                        </tr>
                                    </table>
                                    </form>
                                </div><!-- container -->
                            </div><!-- col-md-8 -->
                            <div class="col-md-4">
                                <div class="container-1">
                                    <div class="fix--img">
                                        <div class="avatar-circle">
                                            <img src="upload/avatar/<?=$Avatar?>" alt="Avatar" width="150px"
                                            height="150px">
                                        </div>
                                        <form action="index.php?pg='my-profile'" method="post">
                                            <input type="file" name="update--avatar" id="avatarInput" accept=".jpg,.jpeg,.png"
                                                style="display: none;">
                                            <button type="button" id="uploadButton" class="btn light-border btn-radius btn-xs" style="width: 100px; line-height: 2rem;">Chọn ảnh</button>
                                            <script>
                                                document.addEventListener("DOMContentLoaded", function() {
                                                    var uploadButton = document.getElementById("uploadButton");
                                                    var avatarInput = document.getElementById("avatarInput");

                                                    uploadButton.addEventListener("click", function() {
                                                        avatarInput.click(); // Khi nút được nhấp, kích hoạt sự kiện click cho trường input ẩn
                                                    });

                                                    avatarInput.addEventListener("change", function() {
                                                        document.getElementById("uploadForm").submit(); // Khi người dùng chọn một tệp, tự động gửi biểu mẫu
                                                    });
                                                });
                                            </script>

                                        </form>
                                        <p>Dung lượng file tối đa 1 MB<br>Định dạng:.JPG, .JPEG, .PNG</p>
                                    </div>
                                </div><!-- container -->
                            </div>

                        </div><!-- body row -->
                    </article><!--/.post-->

                </div>

                <div class="col-md-4 pull-left">
                    <aside class="sidebar">
                        <div class="info info--nav">
                            <div class="avatar">
                                <img src="upload/avatar/<?=$Avatar?>" alt="" width="50px" height="50px">
                            </div>
                            <div class="name">
                                <div><?=$HoVaTen?></div>
                                <div>
                                    <a href="#">Sửa hồ sơ</a>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget_categories">
                            <div class="widget-details">
                                <ul>
                                    <li><a href="index.php?pg=my-profile" style="color: #e0d2a2;">Tài khoản của tôi</a></li>
                                    <li><a href="#">Đơn mua</a></li>
                                    <li><a href="#">Thông báo</a></li>
                                </ul>
                            </div><!-- /.widget-details -->
                        </div><!--/.widget-->

                    </aside><!--/.sidebar-->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.section-padding -->
</section><!-- /.blog-posts -->