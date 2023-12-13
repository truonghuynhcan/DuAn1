<?php
// require '../..view/product.php';
if(isset($_REQUEST["tu_khoa"])==false) {
    die("Thieu tham so tu khoa");
}
extract($_REQUEST); //["tu_khoa" => 1, 'page_num' =>1] $tu_khoa
if (isset($page_num)==false) $page_num=1;
$items = san_pham_select_by_keyword($tu_khoa, $page_num, $page_size=4);

function san_pham_select_by_keyword($tu_khoa, $page_num=1, $page_size=4){
    $starRow = ($page_num -1)*$page_size;
    $sql = "SELECT * from sam_pham WHERE an_hien=1 and ten_sp LIKE? ORDER by ngay DESC LIMIT $starRow, $page_size";
    return pdo_query($sql, '%'.$tu_khoa.'%'); 
}
function dem_record_tu_khoa($tu_khoa){
$sql = "SELECT count(*) from sam_pham WHERE an_hien=1 and ten_sp LIKE?";
    return pdo_query_value($sql, '%'.$tu_khoa.'%');
}