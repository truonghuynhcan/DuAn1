<?php
// chung-----------------------------------------------------------------------------------
// cập nhật người dùng hoặc admin
function updateUser($userId, $tennguoidung, $email, $sdt, $taikhoan, $diachi, $vaitro) {
    $sql = "UPDATE nguoidung 
            SET HoVaTen = :tennguoidung, Email = :email, SDT = :sdt, TaiKhoan = :taikhoan, DiaChi = :diachi, VaiTro = :vaitro
            WHERE Id = :userId";

    try {
        $conn = pdo_get_connection();

        if ($conn) {
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':tennguoidung', $tennguoidung);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':sdt', $sdt);
            $stmt->bindParam(':taikhoan', $taikhoan);
            $stmt->bindParam(':diachi', $diachi);
            $stmt->bindParam(':vaitro', $vaitro);
            $stmt->bindParam(':userId', $userId);

            $stmt->execute();

            // Đóng kết nối
            $conn = null;

            return true;
        }
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
        return false;
    }
}
// Xóa người dùng hoặc admin
function deleteUser($userId) {
    $sql = "DELETE FROM nguoidung WHERE Id = :userId";
    
    try {
        $conn = pdo_get_connection();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        
        // Đóng kết nối CSDL
        $conn = null;

        // Chuyển hướng hoặc hiển thị thông báo thành công
        // header("Location: index.php");
        // exit();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}
// hàm truy xuất 1 người dùng
function getUserById($userId) {
    try {
        $conn = pdo_get_connection();

        if ($conn) {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM nguoidung WHERE Id = :userId";

            // Thực thi câu truy vấn với ID được truyền vào
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
            $stmt->execute();

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result;
        } else {
            return null;
        }
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        echo "Lỗi truy vấn: " . $e->getMessage();
        return null;
    }
}
function checkUserInHoaDon($userId) {
    /**
     * Kiểm tra xem người dùng có tồn tại trong bảng hoadon hay không
     * @param int $userId ID của người dùng cần kiểm tra
     * @return bool Trả về true nếu người dùng tồn tại trong hoadon, ngược lại trả về false
     */
    try {
        $conn = pdo_get_connection();

        // Chuẩn bị câu truy vấn SQL để kiểm tra người dùng trong bảng hoadon
        $sql = "SELECT COUNT(*) as count FROM hoadon WHERE Id_NguoiDung = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$userId]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Kiểm tra xem số lượng bản ghi có khác 0 hay không
        // Nếu số lượng bản ghi > 0, người dùng tồn tại trong hoadon
        return ($row['count'] > 0);
    } catch (PDOException $e) {
        // Xử lý lỗi nếu có
        throw $e;
    } finally {
        unset($conn);
    }
}


// ADMIN-----------------------------------------------------------------------------------
function getAdminCount() {
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(*) as total FROM nguoidung WHERE VaiTro=1";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['total'];
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}

// hàm truy xuất TẤT CẢ người dùng
function getAllAdmin() {
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM nguoidung WHERE VaiTro=1";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}




// USER -----------------------------------------------------------------------------------
// Kiểm tra xem người dùng có tồn tại trong bảng hoadon hay không trả về true false
// Hàm truy xuất số lượng người dùng
function getUserCount() {
    $conn = pdo_get_connection();


    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(*) as total FROM nguoidung WHERE VaiTro=0";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['total'];
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}


// hàm truy xuất TẤT CẢ người dùng
function getAllUsers() {
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM nguoidung WHERE VaiTro=0";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}
// hàm truy xuất danh sách người dùng
function getNewlyRegisteredUsers() {
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM nguoidung WHERE VaiTro=0 ORDER BY NgayTao DESC LIMIT 10";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}
?>