<?php
    include_once("pdo.php");
    // thao tác gửi nhận dữ liệu trong csdl
    function catelogry_get(){
        $sql = "SELECT * FROM theloai ORDER BY Id DESC";
        return pdo_query( $sql );
    }
    
?>