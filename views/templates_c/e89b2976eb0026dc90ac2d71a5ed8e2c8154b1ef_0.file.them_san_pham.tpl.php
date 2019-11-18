<?php
/* Smarty version 3.1.33, created on 2019-03-30 20:58:03
  from 'C:\xampp\htdocs\HQbook1\HQbook\views\templates\admin\them_san_pham.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9fca4b8f7fc0_96748046',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e89b2976eb0026dc90ac2d71a5ed8e2c8154b1ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook1\\HQbook\\views\\templates\\admin\\them_san_pham.tpl',
      1 => 1553975512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9fca4b8f7fc0_96748046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_572508855c9fca4b8c14b4_90697121', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17924165695c9fca4b8c5336_62165035', 'content');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2966448445c9fca4b8f4141_90013669', 'script');
?>

  <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/quantri.tpl');
}
/* {block 'title'} */
class Block_572508855c9fca4b8c14b4_90697121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_572508855c9fca4b8c14b4_90697121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Thêm sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_17924165695c9fca4b8c5336_62165035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17924165695c9fca4b8c5336_62165035',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container" style="margin-top: 50px">
  <form action="" method="post" enctype="multipart/form-data">
    <label for="ten_sach">Tên sách</label>
    <input  class="form-control" type="text" id="ten_sach" name="ten_sach" placeholder="Tên sách" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_sach'];?>
"required autofocus>

    <label for="ten_sach_url">Tên sách URL</label>
    <input class="form-control" type="text" id="ten_sach_url" name="ten_sach_url" placeholder="Tên sách URL" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_sach_url'];?>
" required autofocus>
    
    <label for="id_tac_gia">Tác giả</label>
    <select class="form-control" id="id_tac_gia" name="id_tac_gia" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tac_gia']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <option   value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value->id == $_smarty_tpl->tpl_vars['data']->value['id_tac_gia']) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_tac_gia;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
 <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
      <label for="gioi_thieu">Giới Thiệu</label>
       <textarea class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gioi_thieu'];?>
" id="gioi_thieu" name="editor1" cols="80" rows="10">
           
       </textarea>
       
      <label for="doc_thu">Đọc thử</label>
       <textarea class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['doc_thu'];?>
" id="doc_thu" name="doc_thu" c>
           
       </textarea>
  
    <label for="id_loai_sach">Loại sách</label>
    <select class="form-control" id="id_loai_sach" name="id_loai_sach" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_sach']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value->id == $_smarty_tpl->tpl_vars['data']->value['id_loai_sach']) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_loai_sach;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="id_nha_xuat_ban">Nhà Xuất Bản</label>
    <select class="form-control" id="id_nha_xuat_ban" name="id_nha_xuat_ban" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nxb']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"<?php if ($_smarty_tpl->tpl_vars['item']->value->id == $_smarty_tpl->tpl_vars['data']->value['id_nha_xuat_ban']) {?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_nha_xuat_ban;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="so_trang">Số trang</label>
    <input class="form-control" type="text" id="so_trang" name="so_trang" placeholder="Số trang" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['so_trang'];?>
" required autofocus>

    <label for="ngay_xuat_ban">Ngày xuất bản</label>
    <input class="form-control" type="text" id="ngay_xuat_ban" name="ngay_xuat_ban" placeholder="Ngày xuất bản" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ngay_xuat_ban'];?>
">
    
    
    <label for="kich_thuoc">Kích thước</label>
    <input class="form-control" type="text" id="kich_thuoc" name="kich_thuoc" placeholder="Kích thước" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kich_thuoc'];?>
" required autofocus>

<label for="trong_luong">Trọng Lượng</label>
    <input class="form-control" type="text" id="trong_luong" name="trong_luong" placeholder="Trọng Lượng"
    value="<?php echo $_smarty_tpl->tpl_vars['data']->value['trong_luong'];?>
" required autofocus>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="hinh" class="custom-file-input form-control" id="inputGroupFile01" required>
    <label class="custom-file-label" for="inputGroupFile01">Chọn hình</label>
  </div>

  </label>
</div>


  <label for="don_gia">Đơn giá</label>
    <input class="form-control" type="text" id="don_gia" name="don_gia" placeholder="Đơn giá" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
" required autofocus>

  <label for="gia_bia">Giá bìa</label>
    <input class="form-control" type="text" id="gia_bia" name="gia_bia" placeholder="Giá bìa" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gia_bia'];?>
" required autofocus>

  <button type="submit" name="submit" class="btn btn-success btn-block">Thêm</button>
 
  </form>
  <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_2966448445c9fca4b8f4141_90013669 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2966448445c9fca4b8f4141_90013669',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    CKEDITOR.replace( 'editor1' );
  <?php echo '</script'; ?>
>   
 <?php
}
}
/* {/block 'script'} */
}
