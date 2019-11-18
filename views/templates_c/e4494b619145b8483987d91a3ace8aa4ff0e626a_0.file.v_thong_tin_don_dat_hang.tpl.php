<?php
/* Smarty version 3.1.33, created on 2019-03-30 20:48:02
  from 'C:\xampp\htdocs\HQbook1\HQbook\views\templates\khach_hang\v_thong_tin_don_dat_hang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9fc7f2ca2730_69922186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4494b619145b8483987d91a3ace8aa4ff0e626a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook1\\HQbook\\views\\templates\\khach_hang\\v_thong_tin_don_dat_hang.tpl',
      1 => 1553875329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9fc7f2ca2730_69922186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3180883905c9fc7f2c6faa6_27377305', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10512356645c9fc7f2c73928_65604290', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_3180883905c9fc7f2c6faa6_27377305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3180883905c9fc7f2c6faa6_27377305',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_10512356645c9fc7f2c73928_65604290 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10512356645c9fc7f2c73928_65604290',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
  <div class="dh" style="margin: 15px">
  <h3>Thông tin đơn đặt hàng</h3>
<?php echo $_smarty_tpl->tpl_vars['data']->value['ho_ten'];?>

  <form action="" method="post">
    <div class="form-group">
      <label for="ho-ten">Họ tên người nhận:</label>
      <input type="text" class="form-control" required id="ho-ten" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ho_ten'];?>
" name="ho_ten_nguoi_nhan">
    </div>
    <div class="form-group">Phái: 
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" name="phai" class="custom-control-input" id="customRadio1" name="example1" value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['phai'] == 1) {?>
          checked="checked" 
        <?php }?>>
        <label class="custom-control-label" for="customRadio1">Nam</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" name="phai" class="custom-control-input" id="customRadio2" name="example2" value="0"<?php if ($_smarty_tpl->tpl_vars['data']->value['phai'] == 0) {?>
          checked="checked" 
        <?php }?>>
        <label class="custom-control-label" for="customRadio2">Nữ</label>
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" required id="email" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['email'];?>
" name="email_nguoi_nhan">
    </div>
    <div class="form-group">
      <label for="sdt">Số điện thoại người nhận:</label>
      <input type="number" class="form-control" required id="sdt" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dien_thoai'];?>
" name="so_dien_thoai_nguoi_nhan">
    </div>
    <div class="form-group">
      <label for="dia-chi">Địa chỉ người nhận:</label>
      <input type="text" class="form-control" required id="dia-chi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['dia_chi'];?>
" name="dia_chi_nguoi_nhan">
    </div>  
     <div class="form-group">
         <label for="ghi-chu">Ghi chú:</label>
        <textarea name="ghi_chu" class="form-control" id="ghi-chu" value="$data['ghi_chu']" cols="30" rows="3"></textarea>
     </div>
    <button type="submit" name="submit" class="btn btn-success">XÁC NHẬN ĐƠN HÀNG</button>
  </form>
    
  
   

    <h5 style="margin-top: 50px">Danh sách</h5>
    <?php if (isset($_smarty_tpl->tpl_vars['gio_hang']->value)) {?>
      
        <table class="table table-striped">
          <tr><td>STT</td><td>Mã sách</td><td>Tên sách</td><td align="right">Đơn giá</td><td align="right">Số lượng</td><td align="right">Thành tiền</td></tr>
          <?php $_smarty_tpl->_assignInScope('i', 1);?>
          <?php $_smarty_tpl->_assignInScope('TongTienSach', 0);?>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gio_hang']->value, 'ttSach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ttSach']->value) {
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ttSach']->value->id;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['ttSach']->value->ten_sach;?>
</td>
                <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['ttSach']->value->don_gia);?>
</td>
                <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['ttSach']->value->so_luong);?>
</td>
                <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['ttSach']->value->don_gia*$_smarty_tpl->tpl_vars['ttSach']->value->so_luong);?>
</td>
            </tr>
            <?php $_smarty_tpl->_assignInScope('TongTienSach', $_smarty_tpl->tpl_vars['TongTienSach']->value+($_smarty_tpl->tpl_vars['ttSach']->value->don_gia*$_smarty_tpl->tpl_vars['ttSach']->value->so_luong));?>
            <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <tr><td colspan="5">Tổng tiền Sách</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['TongTienSach']->value);?>
</td></tr>
        </table>
        <?php } else { ?>
          Giỏ hàng lỗi
        <?php }?>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
