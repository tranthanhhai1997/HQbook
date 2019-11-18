<?php
    @session_start();
    class Shoppingcart{
        function themGioHang($maSP, $soLuong, $donGia) {
            $soLuong = (int)$soLuong;
            if(is_integer($soLuong) && $soLuong>0) {
                if(isset($_SESSION['gioHang'])) {
                    if(isset($_SESSION['gioHang'][$maSP])){
                        $_SESSION['gioHang'][$maSP]+=$soLuong;   
                    }
                    else{
                        $_SESSION['gioHang'][$maSP]=$soLuong;
                    }
                    $_SESSION['thanhTien'] += $soLuong*$donGia;
                    $_SESSION['soluong'] +=$soLuong;  
                }else{
                    $_SESSION['gioHang'][$maSP] = $soLuong;
                    $_SESSION['thanhTien'] =  $soLuong*$donGia;
                    $_SESSION['soluong'] = $soLuong;
                }
            }
        }
        function xoaMatHang($maSP, $donGia) {
            $gioHang = $this->layGioHang();
            $gioHangMoi = array();
    		foreach($gioHang as $key=>$value)
    		{
    			if($key!=$maSP)
    				$gioHangMoi[$key]=$value;
    			else
                {
                    $_SESSION['thanhTien']=@$_SESSION['thanhTien']-$gioHang[$maSP]*$donGia;
                    $_SESSION['soluong']=@$_SESSION['soluong']-$gioHang[$maSP];
                }	
    		}
    		if(!empty($gioHangMoi)) {
    			$_SESSION['gioHang']=$gioHangMoi;
            }
    		else {
    			$this->xoaGioHang();
            }
        }        
        function xoaGioHang() {
            unset($_SESSION['gioHang']);
            unset($_SESSION['thanhTien']);
            unset($_SESSION['soluong']);
        }
        function thanhTien() {
            if(isset($_SESSION['thanhTien']))
                return $_SESSION['thanhTien'];
            else
                return 0;
        }
        function tongSoMatHang() {
            if(isset($_SESSION['soluong']))
                return $_SESSION['soluong'];
            else
                return 0;
        }
        function layGioHang() {
            if(isset($_SESSION['gioHang']))
                return $_SESSION['gioHang'];
            else
                return false;
        }
        function capNhatGioHang($maSP, $soLuong, $donGia) {
            $soLuong = (int)$soLuong;
            if($soLuong>0) {
                $_SESSION['thanhTien']-=$_SESSION['gioHang'][$maSP]*$donGia;
    			$_SESSION['thanhTien']+=$soLuong*$donGia;
    			$_SESSION['gioHang'][$maSP]=$soLuong;
                $_SESSION['soluong']-=$_SESSION['gioHang'][$maSP];
    			return false;
            }
            if($soLuong == '0') 
                $this->xoaMatHang($maSP, $donGia);
            return false;
        }
    }
?>