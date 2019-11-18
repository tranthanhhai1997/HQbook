<?php
require_once('controllers/c_sach.php');
$c_sach = new C_sach();

if(isset($_GET['ki_hieu'])){
    $ki_hieu = $_GET['ki_hieu'];
    switch($ki_hieu){
    	case 'sach':
    	case 'tac_gia':
    	case 'nxb':
    		$c_sach->sach_theo_loai();
    		break;

    	case 'chi_tiet_sach':
    		$c_sach->chi_tiet_sach();
    	break;

    	case 'search':
    		$c_sach->tim_sach();
    	break;
    	
    	case 'them_san_pham':
            $c_sach->them_san_pham();
        break;

        case 'xoa_san_pham':
            $c_sach->xoa_san_pham();
        break;
        case 'xoa_san_pham_ok':
            $c_sach->xoa_san_pham_ok();
        break;

        case 'sua_san_pham':
            $c_sach->sua_san_pham();
        break;
    }
}else
    $c_sach->trang_chu();
?>

