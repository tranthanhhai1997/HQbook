<?php
/* Smarty version 3.1.33, created on 2019-03-28 13:08:27
  from 'C:\wamp64\www\HQbook\views\templates\khach_hang\v_gio_hang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cc74b227f40_97780280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eccecbd0e60cd55d4d2f506a8f87639c4efa91e1' => 
    array (
      0 => 'C:\\wamp64\\www\\HQbook\\views\\templates\\khach_hang\\v_gio_hang.tpl',
      1 => 1553701072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cc74b227f40_97780280 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3669683915c9cc74b1e3341_13765315', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20770122045c9cc74b1e3342_20117530', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_3669683915c9cc74b1e3341_13765315 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3669683915c9cc74b1e3341_13765315',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_20770122045c9cc74b1e3342_20117530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20770122045c9cc74b1e3342_20117530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_sach']->value)) {?>
        <div><?php $_smarty_tpl->_assignInScope('tien_sach', 0);?>
        <form action="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
gio-hang/cap-nhat.html" method="post">
    <?php if (isset($_smarty_tpl->tpl_vars['ds_sach']->value)) {?>       
        <h3 align="center">Danh sách bạn đã chọn</h3>
        <table  class="table">
            <tr><td >Mã sách</td><td>Tên sách</td><td>Số lượng</td><td align="right" >Đơn giá</td><td align="right" >Thành tiền</td><td align="center" >Xóa</td></tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ds_sach']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <tr>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>

                </td>
                <td>
                    <?php echo $_smarty_tpl->tpl_vars['item']->value->ten_sach;?>

                </td>
                <td>
                    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->so_luong;?>
" name="soluong<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" style="width:70px; text-align:center"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
" name="dongia<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"/>
                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->don_gia);?>

                </td>
                <td align="right">
                    <?php echo number_format($_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);?>
đ 
                    <?php $_smarty_tpl->_assignInScope('tien_sach', $_smarty_tpl->tpl_vars['tien_sach']->value+$_smarty_tpl->tpl_vars['item']->value->so_luong*$_smarty_tpl->tpl_vars['item']->value->don_gia);?>
                </td>
                <td align="center">
                    <input type="checkbox" name="xoa<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value->don_gia;?>
"/>
                </td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền Sách:</td><td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['tien_sach']->value);?>
đ</td></tr>
        </table> 
    <?php }?> 
    
    
    <p align="center">
    
    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary"/>
    
    <a class="btn btn-info" href = "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
gio-hang/thong-tin-dat-hang.html"> Tiến hàng đặt hàng</a>
    <a class="btn btn-danger" href = "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
gio-hang/xoa-gio-hang.html"> Xóa giỏ hàng</a>            
    </p>
    </form>
    </div>
    <?php } else { ?>
        <h3 align="center">Giỏ hàng rỗng</h3> 
    <?php }?>
    </div>
  </div>
</div>
<?php
}
}
/* {/block 'content'} */
}
