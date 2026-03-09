<?php
function isUserLogin(){
    return isset($_SESSION['isLogin']) && $_SESSION['isLogin'] === true;
}

function setActiveClass($pageName){
    $currentPage = basename($_SERVER['PHP_SELF']);
    return $currentPage === $pageName ? 'active' : "";
}
?>
