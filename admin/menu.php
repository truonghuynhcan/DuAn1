<ul class="nav nav-tabs">
    <li class="nav-item">
    <a class="nav-link <?php if($page=='theloai') echo 'active'  ?>  " data-toggle="tab" href="index.php?pg=ad&page=theloai">Danh mục thể loại</a>
    </li>
    <li class="nav-item">
    <a class="nav-link"  <?php if($page=='loaitin') echo 'active'  ?>  data-toggle="tab" href="index.php?pg=ad&page=loaitin">Quản lý đơn hàng </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" <?php if($page=='tin') echo 'active'  ?>  data-toggle="tab" href="index.php?pg=ad&page=tin">Quản lý Sản phẩm </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" <?php if($page=='user') echo 'active'  ?>  data-toggle="tab" href="index.php?pg=ad&page=user">Danh sách người dùng </a>
    </li>
    <li class="nav-item">
    <a class="nav-link" <?php if($page=='thongtin') echo 'active'  ?>  data-toggle="tab" href="index.php?pg=ad&page=thongtin">Thông tin </a>
    </li>
    <li class="nav-item">
        <a class="nav-link text-danger" href="#">Chào <?=$_SESSION['user']['HoVaTen']?></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="../" target="public">Public</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="thoat.php">Đăng xuất </a>
    </li>
</ul>
