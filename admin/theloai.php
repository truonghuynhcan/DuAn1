<?php
require_once "functions.php";
$sql="SELECT * FROM theloai ORDER BY id";
$result=executeResult($sql);
?>
<div class="container">
    <h2 class="py-2 text-center h4 ">QUẢN LÝ THỂ LOẠI</h2>
    <table class="table table-hover table-bordered">
    <thead  class="thead-dark" >
        <tr>
            <th style="width:fix-content;">Thứ tự </th>
            <th>Tên Thể Loại</th>
            <!-- <th>Ngôn Ngữ</th> -->
            <th colspan="2">
            <a class="btn btn-success" href="./theloai_them_sua.php">Thêm Mới</a>
            </th>            
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($result as $item) {
                // if($item['lang']=='vi') $lang='Vietnamse'; else $lang='English';
                // $anHien= $item['AnHien']?"Đang hiện":'Đang ẩn';
                echo "
                    <tr>
                        <td>$item[Id]</td>
                        <td>$item[TenTheLoai]</td>
                        <td style=\"width:60px\"><a href=\"./theloai_them_sua.php?idTL=$item[Id]\"><button class=\"btn btn-warning\"><i class='bx bx-edit-alt'></i></button></a></td>
                        <td style=\"width:60px\"><button class=\"btn btn-danger\" onclick=\"deleteTL($item[Id])\"><i class='bx bx-trash'></i></button></td>
                    </tr>";
            }
        ?>
    </tbody>
</table>
</div>
<!-- PHẦN VIẾT AJAX LÀM VIỆC VỚI PHP -->
 <script>
     deleteTL=(id)=>{
         let check=confirm("Bạn có chắc chắn xóa không ??")
       if(check){
         $.post("theloai_xoa.php", { 'Id':id}, (data)=>{
            if(data== 0) location.reload()            
         })
       }
     }
 </script>
