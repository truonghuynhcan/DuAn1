<?php
    require_once "functions.php";
    if (checklogin()==false){  header('Location: login.php'); exit(); }
    $sql="SELECT
    s.*,
    GROUP_CONCAT(DISTINCT t.HoVaTen SEPARATOR ', ') AS TacGia,
    GROUP_CONCAT(DISTINCT tl.TenTheLoai SEPARATOR ', ') AS TheLoai
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
GROUP BY
    s.Id; -- Sử dụng GROUP BY để nhóm theo ID của sách";
    $result=executeResult($sql);
?>
<div class="container">
    <h2 class="py-2 text-center h4 ">QUẢN LÝ SẢN PHẨM</h2>
    <table class="table table-hover table-bordered">
    <thead  class="thead-dark" >
    <tr>
        <th>Tên Sản Phẩm</th>
        <th>Tác Giả</th>
        <th>NXB</th>
        <th>Mô Tả Tin</th>
        <th>Thể Loại</th>
        <th>Hình Ảnh 1</th>
        <th>Hình Ảnh 2</th>
        <th>Hình Ảnh 3</th>            
        <th style='width:60px'>            
            <a  class="btn btn-warning px-3 py-1" href="./tin_them.php">Thêm</a>
        </th>
    </tr>
    </thead>
    <tbody>        
    <?php
    $output = ''; // Initialize an empty string to store HTML output

    foreach ($result as $item) {
        // $lang = $item['lang'] == 'vi' ? "Vietnamese" : 'English';
        // $anHien = $item['AnHien'] ? "Đang hiện" : 'Đang ẩn';
        // $noibat = $item['NoiBat'] == 1 ? "<b>Tin nổi bật</b>" : '<i>Tin thường</i>';
        // Assuming BASE_DIR is needed for image URLs
        // define('BASE_DIR', 'Location: ');
        // $dir = BASE_DIR;
    
        // Concatenate HTML string using ".="
        $output .= "<tr>
                <td> 
                    <h4>$item[TenSach]</h4>
                </td>
                <td> 
                    <div>$item[TacGia]</div>
                </td>
                <td> 
                    <div>$item[NhaXuatBan]</div>
                </td>
                <td> 
                    <div>$item[MoTa]</div>
                </td>
                <td> 
                    <div>$item[TheLoai]</div>
                </td>                      
                <td>
                    <div> 
                        <a href='./tin_sua.php?idTin=$item[Id]'><button class='btn btn-warning'><i class='bx bx-edit-alt'></i></button></a>
                    </div>
                    <div class='mt-1'>
                        <button class='btn btn-danger' onclick='deleteTin($item[Id])'><i class='bx bx-trash'></i></button>
                    </div>
                </td>
            </tr>";
    }//foreach
    
    // Output the generated HTML string
    echo $output;
    
    ?>
    </tbody>
</table>
</div>

<!-- PHẦN VIẾT AJAX LÀM VIỆC VỚI PHP -->
 <script>
     deleteTin=(id)=>{
         let check=confirm("Bạn có chắc chắn xóa không ??")
         console.log(id)
       if(check){
         $.post("tin_xoa.php",{'Id':id},
         (data)=>{ 
             console.log(data);
             if(data== 0) location.reload(); else alert(data); 
        })
       }
     }
 </script>
