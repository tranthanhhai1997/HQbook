<?php
/* Smarty version 3.1.33, created on 2019-03-30 20:50:07
  from 'C:\xampp\htdocs\HQbook1\HQbook\views\templates\admin\thong_tin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9fc86f31ea89_45796705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '558a4a3a577c207943fc65317497ed33f244deb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook1\\HQbook\\views\\templates\\admin\\thong_tin.tpl',
      1 => 1553611604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9fc86f31ea89_45796705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21390787745c9fc86f307384_23861368', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4575002065c9fc86f30b205_53087929', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/master.tpl');
}
/* {block 'title'} */
class Block_21390787745c9fc86f307384_23861368 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21390787745c9fc86f307384_23861368',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Đăng nhập<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_4575002065c9fc86f30b205_53087929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_4575002065c9fc86f30b205_53087929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="offset-3 col-9">
				<div class="card" style="width:400px">
				    <img class="card-img-top" src="<?php echo path;?>
/public/img/<?php echo $_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->avatar;?>
" alt="Card image" style="width:100%">
				    <div class="card-body">
				    <div class="row">
				    	<div class="col-3">
				  			<img  src="<?php echo path;?>
/public/img/level/<?php echo $_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->id_loai_user;?>
.png" alt="Card image" style="width:100%">
				        </div>
				        <div class="col-9"><h1 class="card-title"><?php echo $_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->ho_ten;?>
</h1>
				        </div>
					</div>
				      <br>
				      <p class="card-text">Loại user: <?php echo $_smarty_tpl->tpl_vars['loai_nguoi_dung']->value->ten_loai_nguoi_dung;?>
</p>
				      <p class="card-text">Giới tính: <?php if ($_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->phai == 1) {?>Nam
				      	<?php } else { ?> Nữ <?php }?></p>
				      <p class="card-text">Địa chỉ: <?php echo $_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->dia_chi;?>
</p>
				      <p class="card-text">Gmail: <?php echo $_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->email;?>
 </p>
				      <p class="card-text">SĐT: <?php echo $_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->dien_thoai;?>
</p>
				      <a href="<?php echo path;?>
dang-xuat" class="btn btn-primary">Đăng xuất</a>
				      <?php if ($_smarty_tpl->tpl_vars['tt_nguoi_dung']->value->id_loai_user == 7) {?>
				      		<a href="<?php echo path;?>
admin" class="btn btn-success">Cpanel</a>
				      <?php }?>
				   </div>
			</div>
		</div>  
    </div>
  <br>
<?php
}
}
/* {/block 'content'} */
}
