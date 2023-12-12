<?php
 include_once("pdo.php");
//  function chenHoaDon($TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan) {
    // $sql = "INSERT INTO hoadon (TenNguoiNhan, SDTNguoiNhan, DiaChiNguoiNhan) VALUES ($TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan)";
    // $sql = "INSERT INTO `hoadon`(` `TenNguoiNhan`, `SDTNguoiNhan`, `DiaChiNguoiNhan`) VALUES ('$TenNguoiNhan', '$SDTNguoiNhan', '$DiaChiNguoiNhan')";
    // return pdo_exec($sql);
// };
function chenHoaDon($idNguoidung,$TenNguoiNhan, $SDTNguoiNhan, $DiaChiNguoiNhan) {
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=galaxybook", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
         $sql = "INSERT INTO hoadon (Id_NguoiDung,TenNguoiNhan, SDTNguoiNhan, DiaChiNguoiNhan) 
         VALUES ('$idNguoidung','$TenNguoiNhan', '$SDTNguoiNhan', '$DiaChiNguoiNhan')";
       
    
        $pdo->exec($sql);
        // echo "New Successfully";
        // $stmt->execute();

        // return true;
    } catch (PDOException $e) {
        echo $sql. "Error: " . $e->getMessage();
        // return false;
    }
    $pdo = null;
}
// function chitiethoadon($Id,$Id_HoaDon,$Id_Sach,$Gia,$SoLuong){
//     try {
//         $pdo = new PDO("mysql:host=localhost;dbname=galaxybook", "root", "");
//         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
//          $sql = "INSERT INTO hoadonchitiet (Id,Id_HoaDon, Id_Sach,Gia,SoLuong) 
//          VALUES ('$Id','$Id_HoaDon','$Id_Sach','$Gia','$SoLuong')";
       
    
//         $pdo->exec($sql);
//         echo "New Successfully";
//         // $stmt->execute();

//         // return true;
//     } catch (PDOException $e) {
//         echo $sql. "Error: " . $e->getMessage();
//         // return false;
//     }
//     $pdo = null;

// }
?>