<?php 
session_start();
include_once('models/m_sach.php');
require_once('controllers/Smarty_ung_dung.php');
class C_sach{
	 public function trang_chu(){
	 	$Smarty_ung_dung= new Smarty_ung_dung();
	 	$m_sach = new M_sach();	 

	 	$sach_trong_nuoc = $m_sach->loai_sach_by_id(0);
	 	$truyen_tieu_thuyet = $m_sach->loai_sach_by_id(1);
	 	$sach_kinh_doanh = $m_sach->loai_sach_by_id(2);
	 	$tuyen_tap = $m_sach->loai_sach_by_id(3);
	 	$ky_nang_song = $m_sach->loai_sach_by_id(4);
	 	$sach_thieu_nhi = $m_sach->loai_sach_by_id(5);
	 	$best_seller = $m_sach->loai_sach_by_id(6);

	 	$sach_nxb = $m_sach->danh_sach_NXB();
	 	$sach_tac_gia = $m_sach->danh_sach_tac_gia();

	 	$sach_noi_bat = $m_sach->list_sach_by_id_loai_sach(1);
	 	$sach_ban_chay = $m_sach->list_sach_by_id_loai_sach(17);
	 	$truyen_tranh = $m_sach->list_sach_by_id_loai_sach(56);

	 	$m_sach->disconnect();
	 	$Smarty_ung_dung->assign('truyen_tranh',$truyen_tranh);
	 	$Smarty_ung_dung->assign('sach_noi_bat',$sach_noi_bat);
	 	$Smarty_ung_dung->assign('sach_ban_chay',$sach_ban_chay);
	 	$Smarty_ung_dung->assign('sach_trong_nuoc',$sach_trong_nuoc);
	 	$Smarty_ung_dung->assign('truyen_tieu_thuyet',$truyen_tieu_thuyet);
	 	$Smarty_ung_dung->assign('sach_kinh_doanh',$sach_kinh_doanh);
	 	$Smarty_ung_dung->assign('tuyen_tap',$tuyen_tap);
	 	$Smarty_ung_dung->assign('ky_nang_song',$ky_nang_song);
	 	$Smarty_ung_dung->assign('sach_thieu_nhi',$sach_thieu_nhi);
	 	$Smarty_ung_dung->assign('best_seller',$best_seller);
	 	$Smarty_ung_dung->assign('sach_nxb',$sach_nxb);
	 	$Smarty_ung_dung->assign('sach_tac_gia',$sach_tac_gia);

	 	$Smarty_ung_dung->display('trang_chu.tpl');
	 	//$m_sach->disconnect();
	 	
	 }
	 public function lien_he(){
	 	$Smarty_ung_dung= new Smarty_ung_dung();
	 	$Smarty_ung_dung->display('lien_he.tpl');
	 }

	 public function tim_sach(){
	 	$Smarty_ung_dung= new Smarty_ung_dung();
	 	$pageURL = $_SERVER["REQUEST_URI"]; 
    	$chuoi = explode('=',$pageURL);

    	
	 	$m_sach = new M_sach();
	 	$chuoi[1] = str_replace('+',' ',$chuoi[1]);
	 	$Smarty_ung_dung->assign('noi_dung',$chuoi[1]);
	 	$chuoi[1] = '%'.$chuoi[1].'%';

	 	$list_sach = $m_sach->tim_sach($chuoi[1]);
	 	
	 	$Smarty_ung_dung->assign('list_sach',$list_sach);
	 	$Smarty_ung_dung->display('sach/danh_sach_tim_kiem.tpl');	
	 	//$m_sach->disconnect();
	 }

	 public function sach_theo_loai(){
	 	if(isset($_GET['ki_hieu'])){
			$_SESSION["back"] = getCurrentPageURL();

			$sach = new M_sach();
			$ki_hieu = $_GET['ki_hieu'];
			$pageURL = $_SERVER["REQUEST_URI"]; 
			$list_sach = '';
			$id = explode('-',$pageURL);//lay id loai sach
			$id = $id[count($id)-1];//lay id loai sach
			switch ($ki_hieu) {
			case 'sach':
				$list_sach = $sach->list_sach_by_id_loai_sach($id);
				break;
			case 'nxb':
				$list_sach = $sach->sach_by_id_NXB($id);
				break;
			case 'tac_gia':
				$list_sach = $sach->sach_by_id_tac_gia($id);
				break;
			default:
				header('localtion:{path}');
				break;
			}

		 	//$sach->disconnect();	

			$arr_sach = new Smarty_ung_dung();
			$arr_sach->assign('list_sach',$list_sach);
			$arr_sach->display('sach/sach_theo_loai.tpl');	
	 	}
	}

	public function them_san_pham(){
		$Smarty_ung_dung = new Smarty_ung_dung();
        $m_sach = new M_sach();
        $hinh = '';
        $data=array('ten_sach'=>'', 'ten_sach_url'=>'', 'id_tac_gia'=>'', 'gioi_thieu'=>'', 'doc_thu'=>'', 'id_loai_sach'=>'', 'id_nha_xuat_ban'=>'', 'so_trang'=>'', 'ngay_xuat_ban'=>'', 'kich_thuoc'=>'', 'trong_luong'=>'','hinh'=>'','don_gia'=>'','gia_bia'=>'');

 			if (isset($_POST['submit'])){
		        // Nếu người dùng có chọn file để upload
		        if (isset($_FILES['hinh']))
		        {
		            // Nếu file upload không bị lỗi,
		            // Tức là thuộc tính error > 0
		            if ($_FILES['hinh']['error'] > 0)
		            {
		                echo 'File Upload Bị Lỗi';
		            }
		            else{
		            	 $hinh = $_FILES['hinh']['tmp_name'];
		                // Upload file
		                move_uploaded_file($_FILES['hinh']['tmp_name'], 'C:/xampp/htdocs/HQbook/public/img/sach/'.$_FILES['hinh']['name']);
		                echo 'File Uploaded';
		            }
		        }
		        else{
		            echo 'Bạn chưa chọn file upload';
		        }

            $data=array('ten_sach'=>$_POST['ten_sach'], 'ten_sach_url'=>$_POST['ten_sach_url'], 'id_tac_gia'=>$_POST['id_tac_gia'], 'gioi_thieu'=>$_POST['editor1'], 'doc_thu'=>$_POST['doc_thu'], 'id_loai_sach'=>$_POST['id_loai_sach'], 'id_nha_xuat_ban'=>$_POST['id_nha_xuat_ban'], 'so_trang'=>$_POST['so_trang'], 'ngay_xuat_ban'=>$_POST['ngay_xuat_ban'], 'kich_thuoc'=>$_POST['kich_thuoc'], 'trong_luong'=>$_POST['trong_luong'],'hinh'=>$hinh,'don_gia'=>$_POST['don_gia'],'gia_bia'=>$_POST['gia_bia']);

            $m_sach->them_sach($data);
            if($m_sach)
            	echo "Thêm sách thành công";
        }
        $tac_gia = $m_sach->danh_sach_tac_gia();
        $nxb = $m_sach->danh_sach_NXB();
        $loai_sach = $m_sach->list_loai_sach();
        $Smarty_ung_dung->assign('loai_sach',$loai_sach);
        $Smarty_ung_dung->assign('tac_gia',$tac_gia);
        $Smarty_ung_dung->assign('nxb',$nxb);
        $Smarty_ung_dung->assign('data',$data);

        $Smarty_ung_dung->display('admin/them_san_pham.tpl');
        //$m_sach->disconnect();
	}

	public function sua_san_pham(){
		$Smarty_ung_dung = new Smarty_ung_dung();
        $m_sach = new M_sach();
        $sach_auto = "";
        
        $data=array('ten_sach'=>'', 'ten_sach_url'=>'', 'id_tac_gia'=>'', 'gioi_thieu'=>'', 'doc_thu'=>'', 'id_loai_sach'=>'', 'id_nha_xuat_ban'=>'', 'so_trang'=>'', 'ngay_xuat_ban'=>'', 'kich_thuoc'=>'', 'trong_luong'=>'','hinh'=>'','don_gia'=>'','gia_bia'=>'');
       
        if (isset($_POST['submit']) && isset($_POST['ten_sach_auto'])){
        		$sach = $m_sach->tim_sach('%'.$_POST['ten_sach_auto'].'%');
        		setcookie('id_sach', $sach[0]->id, time() + 360); 
        		$data=array('ten_sach'=>$sach[0]->ten_sach, 'ten_sach_url'=>$sach[0]->ten_sach_url, 'id_tac_gia'=>$sach[0]->id_tac_gia, 'gioi_thieu'=>$sach[0]->gioi_thieu, 'doc_thu'=>$sach[0]->doc_thu, 'id_loai_sach'=>$sach[0]->id_loai_sach, 'id_nha_xuat_ban'=>$sach[0]->id_nha_xuat_ban, 'so_trang'=>$sach[0]->so_trang, 'ngay_xuat_ban'=>$sach[0]->ngay_xuat_ban, 'kich_thuoc'=>$sach[0]->kich_thuoc, 'trong_luong'=>$sach[0]->trong_luong,'hinh'=>$sach[0]->hinh,'don_gia'=>$sach[0]->don_gia,'gia_bia'=>$sach[0]->gia_bia);
        	
	        	$tac_gia = $m_sach->danh_sach_tac_gia();
		        $nxb = $m_sach->danh_sach_NXB();
		        $loai_sach = $m_sach->list_loai_sach();

		        $sach_auto = $_POST['ten_sach_auto'];
		        $Smarty_ung_dung->assign('sach_auto',$sach_auto);
		        $Smarty_ung_dung->assign('loai_sach',$loai_sach);
		        $Smarty_ung_dung->assign('tac_gia',$tac_gia);
		        $Smarty_ung_dung->assign('nxb',$nxb);
		        $Smarty_ung_dung->assign('data',$data);

	        	$Smarty_ung_dung->display('admin/sua_san_pham.tpl');
        }elseif (isset($_POST['submit'])){

        	$hinh = $_POST['hinh'];
		        // Nếu người dùng có chọn file để upload
		        if (isset($_FILES['hinh']))
		        {
		            // Nếu file upload không bị lỗi,
		            // Tức là thuộc tính error > 0
		            if ($_FILES['hinh']['error'] > 0)
		            {
		                echo 'File Upload Bị Lỗi';
		            }
		            else{
		            	 $hinh = $_FILES['hinh']['tmp_name'];
		                // Upload file
		                move_uploaded_file($_FILES['hinh']['tmp_name'], 'C:/xampp/htdocs/HQbook/public/img/sach/'.$_FILES['hinh']['name']);
		                echo 'File Uploaded';
		            }
		        }
		        

            $data=array('ten_sach'=>$_POST['ten_sach'], 'ten_sach_url'=>$_POST['ten_sach_url'], 'id_tac_gia'=>$_POST['id_tac_gia'], 'gioi_thieu'=>$_POST['editor1'], 'doc_thu'=>$_POST['doc_thu'], 'id_loai_sach'=>$_POST['id_loai_sach'], 'id_nha_xuat_ban'=>$_POST['id_nha_xuat_ban'], 'so_trang'=>$_POST['so_trang'], 'ngay_xuat_ban'=>$_POST['ngay_xuat_ban'], 'kich_thuoc'=>$_POST['kich_thuoc'], 'trong_luong'=>$_POST['trong_luong'],'hinh'=>$hinh,'don_gia'=>$_POST['don_gia'],'gia_bia'=>$_POST['gia_bia']);

            $m_sach->sua_sach($data,$_COOKIE['id_sach']);
            if($m_sach){
            	echo "Sửa sách thành công";
            	echo '<meta http-equiv="refresh" />';
            }
        }else {
        	$tac_gia = $m_sach->danh_sach_tac_gia();
	        $nxb = $m_sach->danh_sach_NXB();
	        $loai_sach = $m_sach->list_loai_sach();
	        $Smarty_ung_dung->assign('sach_auto',$sach_auto);
	        $Smarty_ung_dung->assign('loai_sach',$loai_sach);
	        $Smarty_ung_dung->assign('tac_gia',$tac_gia);
	        $Smarty_ung_dung->assign('nxb',$nxb);
	        $Smarty_ung_dung->assign('data',$data);

	        $Smarty_ung_dung->display('admin/sua_san_pham.tpl');
        }
        //$m_sach->disconnect();
       
	}
	public function xoa_san_pham(){
		$Smarty_ung_dung = new Smarty_ung_dung();
        $m_sach = new M_sach();
			
        $sach = "";
        if (isset($_POST['submit']) && isset($_POST['ten_sach_auto'])){
        		$sach = $m_sach->tim_sach('%'.$_POST['ten_sach_auto'].'%');
    			if($sach)
    			{
    				$item = $m_sach->sach_by_id($sach[0]->id);
				$nxb = $m_sach->nxb_by_id($sach[0]->id_nha_xuat_ban);
				$tac_gia = $m_sach->tac_gia_by_id($sach[0]->id_tac_gia);
			 	//$sach->disconnect();	
			 			
	
				
				$Smarty_ung_dung->assign('sach',$sach[0]);
				$Smarty_ung_dung->assign('tac_gia',$tac_gia);
				$Smarty_ung_dung->assign('nxb',$nxb);
				$Smarty_ung_dung->display('admin/xoa_san_pham.tpl');
    			}
        		else echo "không tìm thấy sách này";
        		//var_dump($sach);
        		
        	}else {
        		$Smarty_ung_dung->display('admin/xoa_san_pham.tpl');
        	}
        	
        		
	}

	public function xoa_san_pham_ok(){
		$m_sach = new M_sach();
		$pageURL = $_SERVER["REQUEST_URI"]; 
		$id = explode('/',$pageURL);//lay id loai sach
		$id = $id[count($id)-1];//lay id loai sach

		$m_sach->xoa_san_pham($id);
	        			//$m_sach->disconnect();
	     echo "id sách xóa".$id;
	     echo "<br>Xóa sản phẩm thành công";
        
	}

	public function chi_tiet_sach(){
			$sach = new M_sach();
			$pageURL = $_SERVER["REQUEST_URI"]; 
			$id = explode('-',$pageURL);//lay id loai sach
			$id = $id[count($id)-1];//lay id loai sach
			$item = $sach->sach_by_id($id);
			$nxb = $sach->nxb_by_id($item->id_nha_xuat_ban);
			$tac_gia = $sach->tac_gia_by_id($item->id_tac_gia);
		 	//$sach->disconnect();	
		 			
			$arr_sach = new Smarty_ung_dung();
			$arr_sach->assign('link',getCurrentPageURL());
			$arr_sach->assign('sach',$item);
			$arr_sach->assign('tac_gia',$tac_gia);
			$arr_sach->assign('nxb',$nxb);
			$arr_sach->display('sach/chi_tiet_sach.tpl');	
	}
}
function getCurrentPageURL() {
	    $pageURL = 'http';

		    if (!empty($_SERVER['HTTPS'])) {
		      if ($_SERVER['HTTPS'] == 'on') {
		        $pageURL .= "s";
		      }
		    }

		    $pageURL .= "://";

		    if ($_SERVER["SERVER_PORT"] != "80") {
			      $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
			    } else {
			      $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
			    }

		    return $pageURL;
  		}
?>