<?php
   require_once "functions.php";
   $sql="SELECT * FROM `admin`";
   $result=executeResult($sql);
?>
<div class="container">
    <h2 class="py-2 text-center h4 ">QUẢN LÝ NGƯỜI DÙNG</h2>
    <table class="table table-hover table-bordered">
    <thead  class="thead-dark" >
        <tr>
            <th style="width:100px">Avatar </th>
            <th>Tài Khoản</th>
            <th>Email</th>
            <th>Mật Khẩu</th>
            <th>Họ và Tên</th>
            <th>Địa Chỉ</th>
            <th>SDT</th>
            <!-- <th>Quyền Hạn</th> -->
            <th colspan="2">
            <a class="btn btn-success" href="./user_them_sua.php">Thêm Mới</a>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($result as $item) {

                echo "<tr>
                        <td>$item[Avatar]</td>
                        <td>$item[TaiKhoan]</td>
                        <td>$item[Gmail]</td>
                        <td>$item[MatKhau]</td>
                        <td>$item[HoVaTen]</td>
                        <td>$item[DiaChi]</td>
                        <td>$item[SDT]</td>
                    
                        <td style=\"width:60px\"><a href=\"./user_them_sua.php?idLT=$item[Id]\"><button class=\"btn btn-warning\"><i class='bx bx-edit-alt'></i></button></a></td>
                        <td style=\"width:60px\"><button class=\"btn btn-danger\" onclick=\"deleteUser($item[Id])\"><i class='bx bx-trash'></i></button></td>
                    </tr>";
            }
        ?>
    </tbody>
</table>

</div>

<!-- PHẦN VIẾT AJAX LÀM VIỆC VỚI PHP -->
 <script>
     deleteUser=(id)=>{
        let check=confirm("Bạn có chắc chắn xóa không ??")
        console.log(id)
       if(check){
         $.post("user_xoa.php", { 'user_id':id}, (data)=>{
            if(data== 0) location.reload();  else alert(data);            
         })
       }
     }
 </script>
