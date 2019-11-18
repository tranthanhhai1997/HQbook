<?php 
    require_once('controllers/c_sach.php');
    $c_sach = new C_sach();
    //session_destroy();
    if (isset($_GET['ki_hieu']))
    	$c_sach->lien_he();
    else $c_sach->trang_chu();

 ?>