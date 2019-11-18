<?php
/* Smarty version 3.1.33, created on 2019-03-30 20:48:18
  from 'C:\xampp\htdocs\HQbook1\HQbook\views\templates\khach_hang\v_dat_hang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9fc802e66926_87210600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48b7cc35ec752661256b73bd72e4792c0bfbb1d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook1\\HQbook\\views\\templates\\khach_hang\\v_dat_hang.tpl',
      1 => 1553883078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9fc802e66926_87210600 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9397261315c9fc802e4f227_38788973', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5735168315c9fc802e530a0_73578625', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_9397261315c9fc802e4f227_38788973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_9397261315c9fc802e4f227_38788973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_5735168315c9fc802e530a0_73578625 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5735168315c9fc802e530a0_73578625',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['tt_dat_hang']->value)) {?>
  <div class="container">
  	<h1 style="color: green">Đặt hàng thành công.</h1>
  </div>
  <?php } else { ?>
  <div class="container">
  	<h1 style="color: green">Đặt hàng không thành công.</h1>
  </div>
    
<?php }
}
}
/* {/block 'content'} */
}
