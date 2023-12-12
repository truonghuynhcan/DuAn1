<?php
// Hàm truy xuất số lượng người dùng
function getUserCount() {
    $conn = pdo_get_connection();


    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT COUNT(*) as total FROM nguoidung";

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

// hàm truy xuất danh sách người dùng
function getNewlyRegisteredUsers() {
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT * FROM nguoidung ORDER BY NgayTao DESC LIMIT 10";

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