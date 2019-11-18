<?php 
session_start();
include_once('models/m_sach.php');
include_once('models/m_user.php');
include_once('models/m_khach_hang.php');
require_once('controllers/Smarty_ung_dung.php');
class C_khach_hang{
     public function themVaoGioHang(){
        if(isset($_POST['so_luong']) && isset($_POST['id'])){
            $id = $_POST['id'];
            $soLuong = $_POST['so_luong'];
            $m_sach = new M_sach();
            $sach = $m_sach->sach_by_id($id);
            $m_sach->disconnect();
            if ($sach){
                $shoppingcart = new Shoppingcart();
                $dongia = $sach->don_gia;
                $shoppingcart->themGioHang($id,$soLuong,$dongia);
                echo $shoppingcart->thanhTien();
            }
        }else echo '000000000000000000000';
        
     }
     public function thongTinGioHang(){
        $Smarty_ung_dung = new Smarty_ung_dung;
        $shoppingcart = new Shoppingcart();
        if($shoppingcart->layGioHang()){
            $ttGioHang = $shoppingcart->layGioHang();
            $mang_key = array();

            foreach($ttGioHang as $key => $soluong){
                $mang_key[] = $key;
            }

            $chuoi = implode($mang_key,',');
            $m_sach = new M_sach();
            $DSSach_chon = $m_sach->lay_sach_gio_hang($chuoi);
            $DSSach_chon_so_luong = array();
            foreach($DSSach_chon as $item){
                $item->so_luong = $ttGioHang[$item->id];
                $DSSach_chon_so_luong[]=$item;
            }       
            $Smarty_ung_dung->assign('ds_sach',$DSSach_chon_so_luong);
            $Smarty_ung_dung->display('khach_hang/v_gio_hang.tpl');
        }
        else $Smarty_ung_dung->display('khach_hang/v_gio_hang.tpl');
     }

      public function CapNhatGioHang(){
        if(isset($_POST['submit']) ){
            $shoppingcart= new shoppingcart();
            $ttGioHang=$shoppingcart->layGioHang();
                if($ttGioHang){
                    foreach ($ttGioHang as $key => $soluong) {
                        if(isset($_POST['xoa'.$key])){
                            $don_gia=$_POST['don_gia'.$key];
                            $shoppingcart->xoaMatHang($key,$don_gia);
                        }
                    }
                    $ttGioHang=$shoppingcart->layGioHang();
                    foreach ($ttGioHang as $key => $soluong) {
                        $so_luong_moi=$_POST['soluong'.$key]*1;
                        if($so_luong_moi!=$soluong){
                            $don_gia=$_POST['dongia'.$key];
                            $shoppingcart->capNhatGioHang($key,$so_luong_moi,$don_gia);
                        }
                    }
                }

        header('Location: '.path.'gio-hang');
    }else
        header('Localtion:',path);
   }

    public function xoaGioHang(){
        $shoppingcart = new Shoppingcart();
        $ttGioHang = $shoppingcart->layGioHang();
        foreach($ttGioHang as $key=>$value){
            $shoppingcart->xoaMatHang($key, 0);
        }
        header('location:'.path.'gio-hang');
    }  



    public function datHang(){
        $Smarty_ung_dung = new Smarty_ung_dung();
        $shoppingcart = New Shoppingcart();
        $TTGioHang = $shoppingcart->layGioHang();

        $data=array('ho_ten'=>'', 'phai'=>'', 'email'=>'', 'dia_chi'=>'', 'dien_thoai'=>'');
        if (isset($_SESSION['id']))
        {
            $user = new M_user();
            $nguoi_dung = $user->thong_tin_user($_SESSION['id']);
            $data=array(
                'ho_ten'=>$nguoi_dung->ho_ten,
                'phai' =>$nguoi_dung->phai,
                'email'=>$nguoi_dung->email, 
                'dia_chi'=>$nguoi_dung->dia_chi, 
                'dien_thoai'=>$nguoi_dung->dien_thoai, 
                
                );
        }
        $mang_key = array();

        foreach($TTGioHang as $key => $soluong){
            $mang_key[] = $key;
        }

        $chuoi = implode($mang_key,',');
        $m_sach = new M_sach();
        $DSSach_chon = $m_sach->lay_sach_gio_hang($chuoi);
        $DSSach_chon_so_luong = array();

        foreach($DSSach_chon as $item){
            $item->so_luong = $TTGioHang[$item->id];
            $DSSach_chon_so_luong[]=$item;
        }    

        $Smarty_ung_dung->assign('gio_hang',$DSSach_chon_so_luong); 
        
        if(isset($_POST['submit']))
        {
            
            $data=array(
                'ho_ten'=>$_POST['ho_ten_nguoi_nhan'],
                'phai' =>$_POST['phai'],
                'email'=>$_POST['email_nguoi_nhan'], 
                'dia_chi'=>$_POST['dia_chi_nguoi_nhan'], 
                'dien_thoai'=>$_POST['so_dien_thoai_nguoi_nhan'], 
                
                );

                $ghi_chu = $_POST['ghi_chu'];

                $m_khach_hang_table=new M_khach_hang();
                $MaKH = "";
                if (isset($_SESSION['id'])){
                    $MaKH = $_SESSION['id'];
                }else {
                    
                    $MaKH = $m_khach_hang_table->ThemKhachHang($data);
                }

                $SoHD=$m_khach_hang_table->ThemDonDatHang(array('tong_tien'=>$shoppingcart->thanhTien(), 'ngay_dat'=>date('Y-m-d H:i:s'), 'id_nguoi_dung'=> $MaKH, 'ho_ten_nguoi_nhan'=>$data['ho_ten'], 'email_nguoi_nhan'=>$data['email'], 'so_dien_thoai_nguoi_nhan'=>$data['dien_thoai'],'dia_chi_nguoi_nhan'=>$data['dia_chi'], 'ghi_chu'=>$ghi_chu));

                $TTGioHang = $shoppingcart->layGioHang();

                foreach($TTGioHang as $ma=>$soluong)
                {

                    $m_sach = new M_sach();
                    $sach = $m_sach->sach_by_id($ma);
                    $m_khach_hang_table->ThemChiTietHoaDon(array('id_don_hang'=>$SoHD, 'id_sach'=>$ma, 'so_luong'=>$soluong, 'don_gia'=>$sach->don_gia,'thanh_tien'=>$sach->don_gia*$soluong));

                }

               // $shoppingcart->xoaGioHang();  
                $DonDatHang = $m_khach_hang_table->DonDatHang($SoHD);
                $this->guiMail($DonDatHang);     
                $Smarty_ung_dung->assign('tt_dat_hang',$DonDatHang);

                $Smarty_ung_dung->display('khach_hang/v_dat_hang.tpl');

        }
        $Smarty_ung_dung->assign('data',$data);
        $Smarty_ung_dung->display('khach_hang/v_thong_tin_don_dat_hang.tpl');
              
    }
    public function guiMail($HoaDon)
    {//$this->guiMail($DonDatHang);
        require 'library/PHPMailer/PHPMailerAutoload.php';       
        $mail = new PHPMailer;      
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;        
        $mail->Debugoutput = 'html';     
        $mail->SMTPSecure='ssl';  
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465;        
        $mail->SMTPAuth = true;        
        $mail->Username = "php.245TN@gmail.com";        
        $mail->Password = "php.245TN123";        
        $mail->setFrom('mail nguoi gui', 'Công ty TNHH Thương Mại Dịch HQBook');                       
        $mail->addAddress($HoaDon[0]->email_nguoi_nhan, $HoaDon[0]->ho_ten_nguoi_nhan);       
        $mail->Subject = 'Thông tin đơn đặt hàng';                       
        $mail->msgHTML($this->noi_dung_gui_mail($HoaDon));       
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }
    }
    public function noi_dung_gui_mail($hoadon)
    {
        $noi_dung='
        <table align="center" cellspacing="10px" border="0" style="border:1px solid #00F;" width="90%">
            <tr>
                <td style="padding-left:20px">Mã khách hàng</td>
                <td>Tên khách hàng</td>
                <td>'.$hoadon[0]->ho_ten_nguoi_nhan.'</td>
            </tr>
                <tr>
                <td style="padding-left:20px">Địa chỉ</td>
                <td>'.$hoadon[0]->dia_chi_nguoi_nhan.'</td>
                <td>Điện thoại</td>
                <td>'.$hoadon[0]->so_dien_thoai_nguoi_nhan.'</td>
            </tr>
                <tr>
                <td>Ngày đặt</td>
                <td>'.$hoadon[0]->ngay_dat.'</td>
            </tr>
            <tr>
            <td colspan="4">
                <table align="center" cellspacing="10px" border="0" width="100%">
                    <tr bgcolor="#999999"><td>STT</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td><td>Đơn giá</td><td>Số lượng</td><td>Thành thiền</td></tr>';
            $i=1;$tt=0;
            $shoppingcart = new Shoppingcart();
            $TTGioHang = $shoppingcart->layGioHang();

                foreach($TTGioHang as $ma=>$soluong)
                {
                    $m_sach = new M_sach();
                    $sach = $m_sach->sach_by_id($ma);
                    
                    $noi_dung.='<tr>';
                    $noi_dung.= '<td>'.$i.'</td>';
                    $noi_dung.= '<td>'.$ma.'</td>';
                    $noi_dung.= '<td>'.$sach->ten_sach.'</td>';
                    $noi_dung.= '<td>'.$sach->don_gia.'</td>';
                    $noi_dung.= '<td>'.$soluong.'</td>';
                    $noi_dung.= '<td>'.number_format($sach->don_gia*$soluong).'</td>';
                    $noi_dung.='</tr>';
                    $tt=$tt+$sach->don_gia*$soluong;
                    $i++;
                }
            
            $noi_dung.='<tr><td colspan="5">Tổng trị giá hóa đơn</td><td>'.number_format($tt).'</td></tr>';    
          $noi_dung.='</table>        
            </td>
            </tr>
        </table>        
        ';
        return $noi_dung;
    }
    
}
?>