<?php
// include("model/loaitin_xoa.php");
// include("model/m_function.php");
include("model/m_admin.php");

if(isset($_GET['active'])) {
    switch($_GET['active']) {
        // admin ----------------------------------
        case 'home':
            if(checklogin() == true){
                $content = 'home';
            }else {
                header("Location: index.php?pg=home");
            }
            break;
        // book ----------------------------------
        case 'product':
            $content = "product";
            break;
        case 'detail':
            $content = "detail";
            break;

        // web ----------------------------------
        case 'checkout':
            $content = "checkout";
            break;
        // user ----------------------------------

        default:
            $content = "home";
    }
} else {
    $content = "home";
}

include("view/ad-header.php");
include("view/ad-".$content.".php");
include("view/ad-footer.php");

?>