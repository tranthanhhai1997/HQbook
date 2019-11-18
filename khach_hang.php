<?php
require_once('controllers/c_khach_hang.php');
$c_khach_hang = new C_khach_hang();
if(isset($_GET['ki_hieu'])){
    $ki_hieu = $_GET['ki_hieu'];
    switch($ki_hieu){
        case 'them_vao_gio_hang':
            $c_khach_hang->themVaoGioHang();
            break;
        case 'gio_hang':
            $c_khach_hang->thongTinGioHang();
            break;
        case 'cap_nhat':
            $c_khach_hang->capNhatGioHang();
            break;
        case 'xoa_gio_hang':
            $c_khach_hang->xoaGioHang();
            break;   
       
        case 'dat_hang':
            $c_khach_hang->datHang();
            break;
    }
}
?>