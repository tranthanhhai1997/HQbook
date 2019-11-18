<?php
require_once('controllers/c_user.php');
$c_user = new C_user();
if(isset($_GET['ki_hieu'])){
    $ki_hieu = $_GET['ki_hieu'];
    switch($ki_hieu){
        case 'login':
        	if(!isset($_SESSION['fullname']))
                $c_user->dang_nhap();
            elseif ($_SESSION['role'] == 7)
                $c_user->he_thong();
            else echo '<meta http-equiv="refresh" content=0;URL="http://localhost/HQbook/" />';
        break;

        case 'thong_tin':
        	if (isset($_SESSION['id']))
        		$c_user->thong_tin($_SESSION['id']);
        	else echo '<meta http-equiv="refresh" content=0;URL="http://localhost/HQbook/" />';
        break;

        case 'logout':
	        if (isset($_SESSION['fullname'])){
	        	unset($_SESSION['fullname']);
                unset($_SESSION['role']);
                unset($_SESSION['id']);

	        }	
        	echo '<meta http-equiv="refresh" content=0;URL="http://localhost/HQbook/" />';
        	

        break;
    }
}
?>