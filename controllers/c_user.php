<?php
session_start();
require_once('controllers/Smarty_ung_dung.php');
include_once('models/m_sach.php');
include_once('models/m_user.php');
class C_user{
    public function dang_nhap()
    {
        $tenDN='';
        $matkhau='';
        $err='';
        $smaty_ung_dung = new Smarty_ung_dung();
        if(isset($_POST['tenDN']))
        {
            $tenDN=$_POST['tenDN'];
            $matkhau=$_POST['matkhau'];
            
            if(!empty($tenDN) && !empty($matkhau))
            {
                
                $m_user=new M_user();
                $nguoidung=$m_user->nguoiDungDangNhap($tenDN,$matkhau);
                $m_user->disconnect();
                if(!$nguoidung)
                {
                    $err='Tài khoản hoặc mật khẩu không đúng, xin vui lòng nhập lại.';
                    $smaty_ung_dung->assign('tenDN',$tenDN);
                    $smaty_ung_dung->assign('matkhau',$matkhau);
                    $smaty_ung_dung->assign('err',$err);        
                    $smaty_ung_dung->display('admin/dang_nhap.tpl');
                }
                else
                {
                    $_SESSION['fullname']=$nguoidung->ho_ten;
                    $_SESSION['role']=$nguoidung->id_loai_user;
                    $_SESSION['id']=$nguoidung->id;
                    
                    if($nguoidung->id_loai_user == 7)
                        echo '<meta http-equiv="refresh" content=0;URL="'.path.'admin" />';
                    else echo '<meta http-equiv="refresh" content=0;URL="'.path.'" />';
                }
            }
        }
        else {

            $smaty_ung_dung->assign('tenDN',$tenDN);
            $smaty_ung_dung->assign('matkhau',$matkhau);
            $smaty_ung_dung->assign('err',$err);        
            $smaty_ung_dung->display('admin/dang_nhap.tpl');
        }
        
    }   
    
    public function he_thong(){
        $smaty_ung_dung = new Smarty_ung_dung();               
        $smaty_ung_dung->display('admin/quantri.tpl');
    }

    public function thong_tin($id){
        $m_user=new M_user();
        $tt_nguoi_dung=$m_user->thong_tin_user($id);
        $loai_nguoi_dung = $m_user->loai_nguoi_dung($tt_nguoi_dung->id_loai_user);
        $m_user->disconnect();
        $smaty_ung_dung = new Smarty_ung_dung();  
        $smaty_ung_dung->assign('loai_nguoi_dung',$loai_nguoi_dung);  
        $smaty_ung_dung->assign('tt_nguoi_dung',$tt_nguoi_dung);            
        $smaty_ung_dung->display('admin/thong_tin.tpl');
    }
}
?>