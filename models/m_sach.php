<?php 
require_once('database.php');
class M_sach extends database{
    public function loai_sach_by_id($id){
        $query='select * from bs_loai_sach where id_loai_cha=?';
        $this->setQuery($query);
        return $this->loadAllRows(array($id));
    }
    public function list_sach_by_id_loai_sach($id){
        $query='select * from bs_sach where id_loai_sach=?';
        $this->setQuery($query);
        return $this->loadAllRows(array($id));
    }
    public function danh_sach_NXB(){
        $query='select * from bs_nha_xuat_ban';
        $this->setQuery($query);
        return $this->loadAllRows();
    }
    public function sach_by_id_NXB($id){
        $query='select * from bs_sach where id_nha_xuat_ban=?';
        $this->setQuery($query);
        return $this->loadAllRows(array($id));
    }
    public function sach_by_id_tac_gia($id){
        $query='select * from bs_sach where id_tac_gia=?';
        $this->setQuery($query);
        return $this->loadAllRows(array($id));
    }
    
    public function danh_sach_tac_gia(){
        $query='select * from bs_tac_gia';
        $this->setQuery($query);
        return $this->loadAllRows();
    }

     public function list_loai_sach(){
        $query='select * from bs_loai_sach';
        $this->setQuery($query);
        return $this->loadAllRows();
    }

    public function sach_by_id($id){
        $query='select * from bs_sach where id=?';
        $this->setQuery($query);
        return $this->loadRow(array($id));
    }

    public function all_sach(){
        $query='select ten_sach from bs_sach';
        $this->setQuery($query);
        return $this->loadAllRows();
    }

    public function tac_gia_by_id($id){
        $query='select * from bs_tac_gia where id=?';
        $this->setQuery($query);
        return $this->loadRow(array($id));
    }

     public function nxb_by_id($id){
        $query='select * from bs_nha_xuat_ban where id=?';
        $this->setQuery($query);
        return $this->loadRow(array($id));
    }

    public function lay_sach_gio_hang($chuoi){
        $query = "select * from bs_sach where id in($chuoi)";
        $this->setQuery($query);
        return $this->loadAllRows(); 
    }

    public function tim_sach($chuoi){
        $query = "SELECT * FROM `bs_sach` WHERE `ten_sach` LIKE ?";
        $this->setQuery($query);
        return $this->loadAllRows(array($chuoi)); 
    }
     
    public function them_sach($data)
    {
        $this->setQuery('insert into bs_sach(`ten_sach`,`ten_sach_url`, `id_tac_gia`, `gioi_thieu`, `doc_thu`,`id_loai_sach`,`id_nha_xuat_ban`,`so_trang`,`ngay_xuat_ban`, `kich_thuoc`, `trong_luong`, `hinh`, `don_gia`, `gia_bia`) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        $this->execute(array($data['ten_sach'], $data['ten_sach_url'], $data['id_tac_gia'], $data['gioi_thieu'], $data['doc_thu'], $data['id_loai_sach'],$data['id_nha_xuat_ban'],$data['so_trang'],$data['ngay_xuat_ban'],$data['kich_thuoc'],$data['trong_luong'],$data['hinh'],$data['don_gia'],$data['gia_bia']));
        return $this->_dbh->lastInsertId();
    }
    public function sua_sach($data, $id)
    {
        $this->setQuery('UPDATE  bs_sach SET `ten_sach` =?,`ten_sach_url`=?, `id_tac_gia`=?, `gioi_thieu` =?, `doc_thu`=?,`id_loai_sach`=?,`id_nha_xuat_ban`=?,`so_trang`=?,`ngay_xuat_ban`=?, `kich_thuoc`=?, `trong_luong`=?, `hinh`=?, `don_gia`=?, `gia_bia`=? WHERE `id` = ?');
        $this->execute(array($data['ten_sach'], $data['ten_sach_url'], $data['id_tac_gia'], $data['gioi_thieu'], $data['doc_thu'], $data['id_loai_sach'],$data['id_nha_xuat_ban'],$data['so_trang'],$data['ngay_xuat_ban'],$data['kich_thuoc'],$data['trong_luong'],$data['hinh'],$data['don_gia'],$data['gia_bia'],$id));
       return 1;
    }

    public function xoa_san_pham($id){
        $this->setQuery("delete from bs_sach where id=?");
        return $this->loadAllRows(array($id));
    }
}

?>
