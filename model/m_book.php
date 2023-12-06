<?php
include_once("pdo.php");

// ẢNH --------------------------------------------------------------------
function anh_getAll($id_sach)
{
    $sql = "SELECT * FROM hinhanh WHERE Id_Sach = $id_sach";
    return pdo_query($sql);
}
function anh_getOne($id_sach)
{
    $sql = "SELECT * FROM hinhanh WHERE Id_Sach = :id_sach LIMIT 1";
    $params = array(':id_sach' => $id_sach);

    try {
        $result = pdo_query_one($sql, $params);
        return $result;
    } catch (PDOException $e) {
        // Xử lý lỗi
        echo "Lỗi truy vấn: " . $e->getMessage();
        return null;
    }
}
function layhinhsach($id)
{
   $sql = "SELECT DuongDan FROM hinhanh  WHERE  Id_Sach =$id LIMIT 0,1";
   $row = pdo_query_one($sql);
   if ($row != null)
      $kq = $row['DuongDan'];
   else
      $kq = "";
   return $kq;
}
function anh_getHot($Id_Sach)
{
   return pdo_query("SELECT * FROM hinhanh WHERE Id_Sach = $Id_Sach limit 1")[0];
}


// SÁCH --------------------------------------------------------------------

function sach_detail($id_sach)
{
    $sql = "SELECT
        s.*, -- Thông tin sách
        GROUP_CONCAT(DISTINCT t.HoVaTen SEPARATOR ', ') AS TacGia, -- Danh sách tác giả
        GROUP_CONCAT(DISTINCT tl.TenTheLoai SEPARATOR ', ') AS TheLoai -- Danh sách thể loại
        FROM
            sach s
        JOIN
            sach_tacgia st ON s.Id = st.Id_Sach
        JOIN
            tacgia t ON st.Id_TacGia = t.Id
        JOIN
            sach_theloai stl ON s.Id = stl.Id_Sach
        JOIN
            theloai tl ON stl.Id_TheLoai = tl.Id
        WHERE
            s.Id = $id_sach
        GROUP BY
            s.Id;
        ";
    return pdo_query($sql)[0];
}
function timSachCungLoai($tentheloai)
{
    try {
        $conn = pdo_get_connection(); // Gọi hàm để lấy kết nối
        if (!$conn) {
            // Xử lý trường hợp kết nối không thành công
            return null;
        }

        $sql = "SELECT * FROM sach 
                    INNER JOIN sach_theloai ON sach.Id = sach_theloai.Id_Sach 
                    INNER JOIN theloai ON sach_theloai.Id_TheLoai = theloai.Id 
                    WHERE theloai.TenTheLoai = :tentheloai";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":tentheloai", $tentheloai, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Lỗi: " . $e->getMessage();
        return null;
    }
}
function getBooksInSameCategory($id_sach)
{
    $sql = "SELECT s.* FROM sach s
            JOIN sach_theloai st ON s.Id = st.Id_Sach
            WHERE st.Id_TheLoai IN (
                SELECT Id_TheLoai FROM sach_theloai WHERE Id_Sach = :id_sach
            )
            AND s.Id <> :id_sach
            LIMIT 8"; // Giới hạn số lượng sách trả về, bạn có thể điều chỉnh nếu cần

    $params = array(':id_sach' => $id_sach);

    try {
        $result = pdo_query($sql, $params);
        return $result;
    } catch (PDOException $e) {
        // Xử lý lỗi
        echo "Lỗi truy vấn: " . $e->getMessage();
        return null;
    }
}
function sach_getRandomByCategory($id)
{
   return pdo_query("SELECT * FROM sach WHERE Id = $id ORDER BY rand() LIMIT 8");
}
function ds_getBestSell($limit)
{
   $sql = "SELECT * FROM sach ORDER BY LuotMua DESC LIMIT $limit";
   return pdo_query($sql);
}
function ds_getHots($limit)
{
   $sql = "SELECT * FROM sach ORDER BY DanhGia DESC LIMIT $limit";
   return pdo_query($sql);
}
function ds_getNew($limit)
{
   $sql = "SELECT * FROM sach ORDER BY Id DESC LIMIT $limit";
   return pdo_query($sql);
}
function product_cat($Id_TheLoai)
{
   $sql = "SELECT sach.* FROM sach, sach_theloai WHERE  sach.Id =  sach_theloai.Id_Sach AND  Id_TheLoai = $Id_TheLoai";
   return pdo_query($sql);
}


// THỂ LOẠI --------------------------------------------------------------------
function catelogry_get()
{
   $sql = "SELECT * FROM theloai ORDER BY Id DESC";
   return pdo_query($sql);
}
;

?>