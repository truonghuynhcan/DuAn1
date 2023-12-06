<?php
 include_once("pdo.php");

 function tinhTongDonHang($cart) {
    $tongDon = 0;

    foreach ($cart as $item) {
        $tongDon += $item['price'] * $item['quantity'];
    }

    return $tongDon;
}
function chenHoaDon($Id_NguoiDung, $TongDon, $TrangThai, $TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan) {
    try {
        $pdo = pdo_get_connection();
        $pdo->beginTransaction();

        // Chèn dữ liệu vào bảng 'hoadon' và tự động cập nhật ngày mua
        $sqlHoaDon = "INSERT INTO hoadon (Id_NguoiDung, TongDon, TrangThai, TenNguoiNhan, SDTNguoiNhan, DiaChiNguoiNhan, NgayMua) 
                      VALUES (:Id_NguoiDung, :TongDon, :TrangThai, :TenNguoiNhan, :SDTNguoiNhan, :DiaChiNguoiNhan, CURRENT_TIMESTAMP)";
        $stmtHoaDon = $pdo->prepare($sqlHoaDon);

        $stmtHoaDon->bindParam(':Id_NguoiDung', $Id_NguoiDung);
        $stmtHoaDon->bindParam(':TongDon', $TongDon);
        $stmtHoaDon->bindParam(':TrangThai', $TrangThai);
        $stmtHoaDon->bindParam(':TenNguoiNhan', $TenNguoiNhan);
        $stmtHoaDon->bindParam(':SDTNguoiNhan', $SDTNguoiNhan);
        $stmtHoaDon->bindParam(':DiaChiNguoiNhan', $DiaChiNguoiNhan);

        $stmtHoaDon->execute();

        // Lấy ID của hóa đơn vừa chèn
        $idHoaDon = $pdo->lastInsertId();

        // Commit giao dịch
        $pdo->commit();

        return $idHoaDon;
    } catch (PDOException $e) {
        // Rollback nếu có lỗi
        $pdo->rollBack();
        echo "Error: " . $e->getMessage();
        return false;
    } finally {
        unset($pdo);
    }
}

 function chenHoaDon3($Id_NguoiDung, $TongDon, $TrangThai, $TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan) {
    try {
        $pdo = pdo_get_connection();
        $pdo->beginTransaction();

        // Chèn dữ liệu vào bảng 'hoadon'
        $sqlHoaDon = "INSERT INTO hoadon (Id_NguoiDung, TongDon, TrangThai, TenNguoiNhan, SDTNguoiNhan, DiaChiNguoiNhan) 
                      VALUES (:Id_NguoiDung, :TongDon, :TrangThai, :TenNguoiNhan, :SDTNguoiNhan, :DiaChiNguoiNhan)";
        $stmtHoaDon = $pdo->prepare($sqlHoaDon);

        $stmtHoaDon->bindParam(':Id_NguoiDung', $Id_NguoiDung);
        $stmtHoaDon->bindParam(':TongDon', $TongDon);
        $stmtHoaDon->bindParam(':TrangThai', $TrangThai);
        $stmtHoaDon->bindParam(':TenNguoiNhan', $TenNguoiNhan);
        $stmtHoaDon->bindParam(':SDTNguoiNhan', $SDTNguoiNhan);
        $stmtHoaDon->bindParam(':DiaChiNguoiNhan', $DiaChiNguoiNhan);

        $stmtHoaDon->execute();

        // Lấy ID của hóa đơn vừa chèn
        $idHoaDon = $pdo->lastInsertId();

        // Commit giao dịch
        $pdo->commit();

        return $idHoaDon;
    } catch (PDOException $e) {
        // Rollback nếu có lỗi
        $pdo->rollBack();
        echo "Error: " . $e->getMessage();
        return false;
    } finally {
        unset($pdo);
    }
}

?>