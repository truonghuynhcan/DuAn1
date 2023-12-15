<?php
include_once("pdo.php");

// thanh toán

function insertHoaDon($idNguoiDung, $tongDon, $tenNguoiNhan, $TrangThai, $sdtNguoiNhan, $diaChiNguoiNhan)
{
    try {
        // Insert đơn hàng vào bảng hoadon
        $sqlInsertHoaDon = "INSERT INTO hoadon (Id_NguoiDung, TongDon, TenNguoiNhan, TrangThai,  SDTNguoiNhan, DiaChiNguoiNhan) 
                            VALUES (?, ?, ?, ?, ?, ?, ?)";

        $lastInsertedId = pdo_execute_returnid($sqlInsertHoaDon, $idNguoiDung, $tongDon, $tenNguoiNhan, $sdtNguoiNhan, $TrangThai, $diaChiNguoiNhan);

        // Insert chi tiết đơn hàng vào bảng hoadonchitiet
        foreach ($_SESSION['cart'] as $key => $book) {
            $idSach = $book['Id'];
            $soLuong = $book['SoLuong'];
            $gia = $book['DonGia'] * (1 - $book['GiamGia'] / 100);

            $sqlInsertChiTiet = "INSERT INTO hoadonchitiet (Id_HoaDon, Id_Sach, SoLuong, Gia) VALUES (?, ?, ?, ?)";
            pdo_execute($sqlInsertChiTiet, $lastInsertedId, $idSach, $soLuong, $gia);
        }

        // xóa giỏ hàng cũ của người dùng
        $conn = pdo_get_connection();

        if ($conn) {
            try {
                $deleteSql = "DELETE FROM giohang WHERE Id_NguoiDung = :userId";
                $deleteStmt = $conn->prepare($deleteSql);
                $deleteStmt->bindParam(':userId', $idNguoiDung, PDO::PARAM_INT);
                $deleteStmt->execute();

                $conn = null;
                return true;
            } catch (PDOException $e) {
                echo "Lỗi truy vấn: " . $e->getMessage();
                return false;
            }
        } else {
            return false;
        }

        loadCart();
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
    }
}



// giỏ hàng

function loadCart()
{
    if (isset($_SESSION['cart'])) {
        unset($_SESSION['cart']);
        $_SESSION['cart'] = getCartByUserId($_SESSION['user']['Id']);
    } else {
        $_SESSION['cart'] = getCartByUserId($_SESSION['user']['Id']);
    }
    $_SESSION['totalQuantity'] = 0;
    foreach ($_SESSION['cart'] as $item) {
        $_SESSION['totalQuantity'] = $_SESSION['totalQuantity'] + $item['SoLuong'];
    }
}
function updateSoLuongInGioHang($idSach, $soLuong, $idNguoiDung)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Câu truy vấn UPDATE
            $sql = "UPDATE giohang SET SoLuong = :soLuong WHERE Id_Sach = :idSach AND Id_NguoiDung = :idNguoiDung";

            // Chuẩn bị và thực hiện truy vấn
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':soLuong', $soLuong, PDO::PARAM_INT);
            $stmt->bindParam(':idSach', $idSach, PDO::PARAM_INT);
            $stmt->bindParam(':idNguoiDung', $idNguoiDung, PDO::PARAM_INT);
            $stmt->execute();

            $conn = null;
            return true; // Trả về true nếu thành công
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false; // Trả về false nếu có lỗi
        }
    } else {
        return false; // Trả về false nếu không thể kết nối CSDL
    }
}


// thêm sản phẩm vào giỏ
function insertIntoGioHang($idSach, $idNguoiDung)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            // Câu truy vấn INSERT INTO
            $sql = "INSERT INTO giohang (Id_Sach, SoLuong, Id_NguoiDung) VALUES (:idSach, 1, :idNguoiDung)";

            // Chuẩn bị và thực hiện truy vấn
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idSach', $idSach, PDO::PARAM_INT);
            // $stmt->bindParam(':soLuong', $soLuong, PDO::PARAM_INT);
            $stmt->bindParam(':idNguoiDung', $idNguoiDung, PDO::PARAM_INT);
            $stmt->execute();

            $conn = null;
            return true; // Trả về true nếu thành công
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false; // Trả về false nếu có lỗi
        }
    } else {
        return false; // Trả về false nếu không thể kết nối CSDL
    }
}


// xóa sản phẩm trong giỏ hàng
function deleteCartItem($userId, $bookId)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $deleteSql = "DELETE FROM giohang WHERE Id_NguoiDung = :userId AND Id_Sach = :bookId";
            $deleteStmt = $conn->prepare($deleteSql);
            $deleteStmt->bindParam(':userId', $userId, PDO::PARAM_INT);
            $deleteStmt->bindParam(':bookId', $bookId, PDO::PARAM_INT);
            $deleteStmt->execute();

            $conn = null;
            return true;
        } catch (PDOException $e) {
            echo "Lỗi truy vấn: " . $e->getMessage();
            return false;
        }
    } else {
        return false;
    }
}


// lấy thông tin giỏ hàng từ id người dùng (Id_Sach, TenSach, DonGia, GiamGia, SoLuong)
function getCartByUserId($idUser)
{
    $conn = pdo_get_connection();

    if ($conn) {
        try {
            $sql = "SELECT gh.Id_Sach AS Id_Sach, s.TenSach AS TenSach, s.DonGia AS DonGia,  s.GiamGia AS GiamGia, gh.SoLuong AS SoLuong
                    FROM giohang gh
                    INNER JOIN sach s ON gh.Id_Sach = s.Id
                    WHERE gh.Id_NguoiDung = :idUser";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':idUser', $idUser, PDO::PARAM_INT);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

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

function tinhTongDonHang($cart)
{
    $tongDon = 0;

    foreach ($cart as $item) {
        $tongDon += $item['price'] * $item['quantity'];
    }

    return $tongDon;
}
function chenHoaDon($Id_NguoiDung, $TongDon, $TrangThai, $TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan)
{
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
?>