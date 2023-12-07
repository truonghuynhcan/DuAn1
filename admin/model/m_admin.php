<?php
function checklogin(){
    if (isset($_SESSION['user']) && $_SESSION['user']['VaiTro'] === 1) {
        return true;
    }else{
        return false;
    }
}
?>