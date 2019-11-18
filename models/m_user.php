<?php
include_once('models/database.php');
class M_user extends Database 
{
    public function nguoiDungDangNhap($username,$password)
    {
        $password=md5($password);
        $this->setQuery('select * from bs_nguoi_dung where tai_khoan=? and mat_khau=?');
        return $this->loadRow(array($username,$password));
    }
    public function thong_tin_user($id)
    {
        $this->setQuery('select * from bs_nguoi_dung where id=?');
        return $this->loadRow(array($id));
    }
    public function loai_nguoi_dung($id)
    {
        $this->setQuery('select * from bs_loai_nguoi_dung where id=?');
        return $this->loadRow(array($id));
    }
}