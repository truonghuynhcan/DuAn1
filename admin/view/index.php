<?php
include('admin/model/m_book.php');
include('admin/model/m_user.php');
include('admin/model/m_bill.php');

if (isset($_GET['active'])) {
    switch ($_GET['active']) {
        // admin ------------------------------------------------------------------------------------
        case 'admin_update':
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                // Lấy dữ liệu từ form
                $userId = $_GET['userId'];
                $tennguoidung = $_POST['tennguoidung'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $taikhoan = $_POST['taikhoan'];
                $diachi = $_POST['diachi'];
                $vaitro = $_POST['vaitro'];

                // Lấy dữ liệu người dùng từ cơ sở dữ liệu
                $user = getUserById($userId);

                // Kiểm tra xem dữ liệu từ form có khác với dữ liệu ban đầu từ cơ sở dữ liệu hay không
                if ($user['HoVaTen'] !== $tennguoidung || $user['Email'] !== $email || $user['SDT'] !== $sdt || $user['TaiKhoan'] !== $taikhoan || $user['DiaChi'] !== $diachi || $user['VaiTro'] !== $vaitro) {
                    if ($vaitro != $_SESSION['user']['VaiTro'] && $user['Id'] == $_SESSION['user']['Id']) {
                        unset($_POST);

                        echo '<script>';
                        echo 'alert("Bạn không thể thay đổi vai trò của bản thân!");';
                        echo 'window.location.href ="index.php?pg=ad&active=admin_update&userId=' . $userId . '";'; // Chuyển hướng sau khi xóa
                        echo '</script>';
                        exit();
                    } else {
                        // Nếu có thay đổi, thực hiện cập nhật
                        $updateSuccess = updateUser($userId, $tennguoidung, $email, $sdt, $taikhoan, $diachi, $vaitro);
                        if ($updateSuccess) {
                            unset($_POST);
                            // Cập nhật thành công, thực hiện hành động cần thiết
                            echo '<script>';
                            echo 'alert("Cập nhật người dùng id=' . $userId . ' thành công!");';
                            echo 'window.location.href ="index.php?pg=ad&active=admin_update&userId=' . $userId . '";'; // Chuyển hướng sau khi xóa
                            echo '</script>';
                            exit();
                        } else {
                            unset($_POST);
                            // Xử lý khi cập nhật thất bại
                            echo '<script>';
                            echo 'alert("Cập nhật không thành công!");';
                            echo 'window.location.href ="index.php?pg=ad&active=admin_update&userId=' . $userId . '";'; // Chuyển hướng sau khi xóa
                            echo '</script>';
                        }
                    }
                } else {
                    unset($_POST);
                    // Không có sự thay đổi, không cần thực hiện cập nhật

                    echo '<script>';
                    echo 'alert("Bạn chưa thay đổi dữ liệu gì!");';
                    echo 'window.location.href ="index.php?pg=ad&active=admin_update&userId=' . $userId . '";';
                    echo '</script>';
                }
            }
            $active = 'admin_update';
            break;
        case 'admin_management':
            //xóa người dùng 
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['deleteUserId'])) {
                $userId = $_GET['deleteUserId'];
                if (!checkUserInHoaDon($userId) && $_SESSION['user']['Id'] != $userId) {
                    deleteUser($userId);
                    echo '<script>';
                    echo 'alert("Đã xóa Admin id=' . $userId . ' thành công!");';
                    echo 'window.location.href ="index.php?pg=ad&active=admin_management";'; // Chuyển hướng sau khi xóa
                    echo '</script>';
                    break;
                } else {
                    echo '<script>';
                    echo 'alert("Admin không thể xóa chính mình!");';
                    echo 'window.location.href ="index.php?pg=ad&active=admin_management";'; // Chuyển hướng sau khi xóa
                    echo '</script>';
                }
            }

            $active = 'admin_management';
            break;
        // book ------------------------------------------------------------------------------------
        case 'book_authorUpdate':
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                // Lấy giá trị từ form
                $authorId = $_GET['authorId']; // Lấy từ URL
                $tenTacGiaMoi = $_POST['tensach'];

                // Lấy thông tin tác giả hiện tại từ cơ sở dữ liệu
                $tacGiaHienTai = getAuthorById($authorId);
                $tenTacGiaCu = $tacGiaHienTai['HoVaTen'];

                // Kiểm tra xem tên tác giả có thay đổi hay không
                if ($tenTacGiaMoi != $tenTacGiaCu) {
                    // Gọi hàm cập nhật tác giả ở đây
                    updateAuthor($authorId, $tenTacGiaMoi);

                    // Xóa dữ liệu POST để tránh resubmission
                    unset($_POST);

                    // Chuyển hướng hoặc thực hiện các công việc cần thiết sau khi cập nhật
                    echo '<script>';
                    echo 'alert("Cập nhật tác giả id=' . $authorId . ' thành công!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_authorUpdate&authorId=' . $authorId . '";'; // Chuyển hướng sau khi xóa
                    echo '</script>';
                    exit();
                } else {
                    echo '<script>';
                    echo 'alert("Không có thay đổi trong tên tác giả!");';
                    echo '</script>';
                    // Xóa dữ liệu POST để tránh resubmission
                    unset($_POST);
                }
            }

            //xóa sách
            if (isset($_GET['bookDeleteId'])) {
                $bookDeleteId = $_GET['bookDeleteId'];
                deleteBookById($bookDeleteId);
                echo '<script>';
                echo 'alert("Xóa sách id=' . $bookDeleteId . ' thành công!");';
                echo 'window.location.href = "index.php?pg=ad&active=book_authorUpdate&authorId=' . $_GET['authorId'] . '";'; // Chuyển hướng sau khi xóa
                echo '</script>';
                break;
            }
            $active = 'book_authorUpdate';
            break;
        case 'book_genreUpdate':
            // Cập nhật tên thể loại
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                // Lấy giá trị từ form
                $genreId = $_GET['genreId']; // Lấy từ URL
                $tenTheLoaiMoi = $_POST['tentheloai'];

                // Lấy thông tin thể loại hiện tại từ cơ sở dữ liệu
                $theloaiHienTai = getGenreById($genreId);
                $tenTheLoaiCu = $theloaiHienTai['TenTheLoai'];

                // Kiểm tra xem tên thể loại có thay đổi hay không
                if ($tenTheLoaiMoi != $tenTheLoaiCu) {
                    // Gọi hàm cập nhật thể loại ở đây
                    updateGenre($genreId, $tenTheLoaiMoi);

                    // Xóa dữ liệu POST để tránh resubmission
                    unset($_POST);

                    // Chuyển hướng hoặc thực hiện các công việc cần thiết sau khi cập nhật
                    echo '<script>';
                    echo 'alert("Cập nhật thể loại id=' . $genreId . ' thành công!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_genreUpdate&genreId=' . $genreId . '";'; // Chuyển hướng sau khi xóa
                    echo '</script>';
                    exit();
                } else {
                    echo '<script>';
                    echo 'alert("Không có thay đổi trong tên thể loại!");';
                    echo '</script>';
                    // Xóa dữ liệu POST để tránh resubmission
                    unset($_POST);
                }
            }

            //xóa sách
            if (isset($_GET['bookDeleteId'])) {
                $bookDeleteId = $_GET['bookDeleteId'];
                deleteBookById($bookDeleteId);
                echo '<script>';
                echo 'alert("Xóa sách id=' . $bookDeleteId . ' thành công!");';
                echo 'window.location.href = "index.php?pg=ad&active=book_genreUpdate&genreId=' . $_GET['genreId'] . '";'; // Chuyển hướng sau khi xóa
                echo '</script>';
                break;
            }
            $active = 'book_genreUpdate';
            break;
        case 'book_update':
            // Kiểm tra nếu form đã được submit
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                    // ... Các xử lý khác ...

                    // Xử lý upload ảnh mới
                    if (isset($_FILES['newImage'])) {
                        $newImageName = uploadNewImage($_FILES['newImage']);
                        if ($newImageName) {
                            // Lấy ID hình ảnh cần cập nhật (giả sử được lấy từ form)
                            $imageId = $_POST['imageId']; // Bạn cần thay đổi tùy thuộc vào cách bạn tổ chức form

                            // Nếu upload ảnh thành công, gọi hàm lưu tên ảnh và thay thế đường dẫn cũ
                            saveImageNameAndReplace($imageId, $newImageName);
                        }
                    }
                }
                // Lấy thông tin sách từ CSDL để so sánh với dữ liệu mới nhập từ form
                $bookId = $_GET['bookId'];
                $oldBookData = sach_detail($bookId);

                // Kiểm tra sự thay đổi trong dữ liệu so với dữ liệu cũ
                if (
                    $_POST['tensach'] != $oldBookData['TenSach'] || $_POST['theloai'] != $oldBookData['TheLoai'] || $_POST['tacgia'] != $oldBookData['TacGia'] ||
                    $_POST['dongia'] != $oldBookData['DonGia'] || $_POST['giamgia'] != $oldBookData['GiamGia'] || $_POST['namxuatban'] != $oldBookData['NamXuatBan'] ||
                    $_POST['nhaxuatban'] != $oldBookData['NhaXuatBan'] || $_POST['tonkho'] != $oldBookData['SoLuongConHang'] || $_POST['mota'] != $oldBookData['MoTa'] ||
                    $_POST['mota'] != $oldBookData['MoTaChiTiet'] || $_POST['trangthai'] != $oldBookData['TrangThai']
                ) {
                    // 'TacGia' => $_POST['tacgia'],
                    // 'TheLoai' => $_POST['theloai'],
                    // 2. Thực hiện cập nhật thông tin sách
                    $updatedData = array(
                        'TenSach' => $_POST['tensach'],
                        'DonGia' => $_POST['dongia'],
                        'GiamGia' => $_POST['giamgia'],
                        'NamXuatBan' => $_POST['namxuatban'],
                        'NhaXuatBan' => $_POST['nhaxuatban'],
                        'SoLuongConHang' => $_POST['tonkho'],
                        'MoTa' => $_POST['mota'],
                        'MoTaChiTiet' => $_POST['motachitiet'],
                        'TrangThai' => $_POST['trangthai']
                    );

                    // Kiểm tra và thực hiện cập nhật hình ảnh
                    // if (isset($_FILES['hinhanh'])) {
                    //     // Thực hiện xử lý upload hình ảnh và cập nhật đường dẫn trong CSDL
                    //     // Code xử lý upload hình ảnh ở đây...
                    // }

                    // Thực hiện cập nhật dữ liệu vào CSDL
                    update_sach($bookId, $updatedData);

                    echo '<script>';
                    echo 'alert("Cập nhật thành công!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_update&bookId=' . $bookId . '";';
                    echo '</script>';
                } else {
                    echo '<script>';
                    echo 'alert("Bạn chưa thay đổi dữ liệu nào cả!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_update&bookId=' . $bookId . '";';
                    echo '</script>';
                }
            }

            $active = 'book_update';
            break;
        case 'book_management':
            //xóa tác giả
            if (isset($_GET['deleteAuthorById'])) {
                $authorId = $_GET['deleteAuthorById'];
                // Kiểm tra xem có sách nào liên kết đến tác giả không
                if (hasBooksLinkedToAuthor($authorId)) {
                    echo '<script>';
                    echo 'alert("Tác giả có sách liên kết, không thể xóa!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_management";';
                    echo '</script>';
                } else {
                    deleteAuthorById($authorId);
                    echo '<script>';
                    echo 'alert("Xóa tác giả thành công!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_management";';
                    echo '</script>';
                }
                break;
            }
            //xóa thể loại
            if (isset($_GET['deleteCategoryId'])) {
                $categoryId = $_GET['deleteCategoryId'];
                // Kiểm tra xem có sách nào liên kết đến thể loại không
                if (hasBooksLinkedToCategory($categoryId)) {
                    echo '<script>';
                    echo 'alert("Thể loại có sách liên kết, không thể xóa!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_management";';
                    echo '</script>';
                } else {
                    deleteCategoryById($categoryId);
                    echo '<script>';
                    echo 'alert("Xóa thể loại id=' . $categoryId . ' thành công!");';
                    echo 'window.location.href = "index.php?pg=ad&active=book_management";';
                    echo '</script>';
                }
                break;
            }
            //xóa sách
            if (isset($_GET['bookDeleteId'])) {
                $bookDeleteId = $_GET['bookDeleteId'];
                deleteBookById($bookDeleteId);
                echo '<script>';
                echo 'alert("Xóa sách id=' . $bookDeleteId . 'thành công!");';
                echo 'window.location.href = "index.php?pg=ad&active=book_management";'; // Chuyển hướng sau khi xóa
                echo '</script>';
                break;
            }
            $active = 'book_management';
            break;
        // user ------------------------------------------------------------------------------------
        case 'admin_update':
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['save'])) {
                // Lấy dữ liệu từ form
                $userId = $_GET['userId'];
                $tennguoidung = $_POST['tennguoidung'];
                $email = $_POST['email'];
                $sdt = $_POST['sdt'];
                $taikhoan = $_POST['taikhoan'];
                $diachi = $_POST['diachi'];
                $vaitro = $_POST['vaitro'];

                // Lấy dữ liệu người dùng từ cơ sở dữ liệu
                $user = getUserById($userId);

                // Kiểm tra xem dữ liệu từ form có khác với dữ liệu ban đầu từ cơ sở dữ liệu hay không
                if ($user['HoVaTen'] !== $tennguoidung || $user['Email'] !== $email || $user['SDT'] !== $sdt || $user['TaiKhoan'] !== $taikhoan || $user['DiaChi'] !== $diachi || $user['VaiTro'] !== $vaitro) {
                    // Nếu có thay đổi, thực hiện cập nhật
                    $updateSuccess = updateUser($userId, $tennguoidung, $email, $sdt, $taikhoan, $diachi, $vaitro);
                    if ($updateSuccess) {
                        unset($_POST);
                        // Cập nhật thành công, thực hiện hành động cần thiết
                        echo '<script>';
                        echo 'alert("Cập nhật người dùng id=' . $userId . ' thành công!");';
                        echo 'window.location.href ="index.php?pg=ad&active=user_update&userId=' . $userId . '";'; // Chuyển hướng sau khi xóa
                        echo '</script>';
                        exit();
                    } else {
                        unset($_POST);
                        // Xử lý khi cập nhật thất bại
                        echo '<script>';
                        echo 'alert("Cập nhật không thành công!");';
                        echo 'window.location.href ="index.php?pg=ad&active=user_update&userId=' . $userId . '";'; // Chuyển hướng sau khi xóa
                        echo '</script>';
                    }
                } else {
                    unset($_POST);
                    // Không có sự thay đổi, không cần thực hiện cập nhật

                    echo '<script>';
                    echo 'alert("Bạn chưa thay đổi dữ liệu gì!");';
                    echo 'window.location.href ="index.php?pg=ad&active=user_update&userId=' . $userId . '";';
                    echo '</script>';
                }
            }
            $active = 'admin_update';
            break;
        case 'user_management':
            //xóa người dùng 
            if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['deleteUserId'])) {
                $userId = $_GET['deleteUserId'];
                if (!checkUserInHoaDon($userId)) {
                    deleteUser($userId);
                    echo '<script>';
                    echo 'alert("Đã xóa người dùng id=' . $userId . ' thành công!");';
                    echo 'window.location.href ="index.php?pg=ad&active=user_management";'; // Chuyển hướng sau khi xóa
                    echo '</script>';
                    break;
                } else {
                    echo '<script>';
                    echo 'alert("Người dùng có hóa đơn, không thể xóa!");';
                    echo 'window.location.href ="index.php?pg=ad&active=user_management";'; // Chuyển hướng sau khi xóa
                    echo '</script>';
                }
            }

            $active = 'user_management';
            break;
        // web ------------------------------------------------------------------------------------
        case 'home':
            $active = 'dashboard';
            break;

        default:
            # code...
            break;
    }
} else {
    header('Location: index.php');
}
include('admin/view/header.php');
include('admin/view/' . $active . '.php');
include('admin/view/footer.php');
?>