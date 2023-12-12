<?php
// Hàm tính tổng doanh thu
function getTotalRevenue() {
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT SUM(hoadonchitiet.Gia * hoadonchitiet.SoLuong) as totalRevenue 
                    FROM hoadonchitiet";

            // Thực thi câu truy vấn
            $stmt = $conn->query($sql);

            // Lấy kết quả
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            // Đóng kết nối
            $conn = null;

            return $result['totalRevenue'];
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return null;
        }
    } else {
        return null;
    }
}

?>