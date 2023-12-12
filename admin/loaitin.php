<?php
require_once "functions.php";
$sql="SELECT loaitin.*,theloai.TenTL FROM loaitin LEFT JOIN theloai on loaitin.idTL = theloai.idTL";
$result=executeResult($sql);
?>
<div class="container">
    <h2 class="py-2 text-center h4 ">QUẢN LÝ ĐƠN HÀNG</h2>
    <table class="table table-hover table-bordered">
    <thead  class="thead-dark" >
        <tr>
            <th>ID</th>
            <th>Mã Đơn Hàng </th>
            <th>Tên Sản Phẩm</th>
            <th>Số Lượng</th>
            <th>Đơn Giá</th>
            <th>Thành Tiền</th>
            <!-- <th colspan="2">
            <a class="btn btn-success" href="./loaitin_them_sua.php">Thêm Mới</a>
            </th> -->
        </tr>
    </thead>
    <tbody>
    <?php
        foreach ($result as $item) {
            if($item['lang']=='vi') $lang='Vietnamse'; else $lang='English';
            $anHien= $item['AnHien']?"Đang hiện":'Đang ẩn';
            echo "<tr>
                <td>$item[Ten]</td>
                <td>$item[ThuTu]</td>
                <td>$anHien</td>
                <td>$lang</td>
                <td>$item[MoTa]</td>
                <td>$item[TenTL]</td>
                <td style='width:60px'><a href='./loaitin_them_sua.php?idLT=$item[idLT]'><button class='btn btn-warning'><i class='bx bx-edit-alt'></i></button></a></td>
                <td style='width:60px'><button class='btn btn-danger' onclick='deleteLT($item[idLT])'><i class='bx bx-trash'></i></button></td>
            </tr>";
        }
    ?>
    </tbody>
</table>
<p>Tổng Tiền: </p>
</div>

<!-- PHẦN VIẾT AJAX LÀM VIỆC VỚI PHP -->
 <script>
     deleteLT=(id)=>{
         let check=confirm("Bạn có chắc chắn xóa không ??")
         console.log(id);
       if(check){
         $.post("loaitin_xoa.php", { 'idLT':id}, (data)=>{
            if(data== 0) location.reload();          
            else alert(data);    
         })
       }
     }
 </script>