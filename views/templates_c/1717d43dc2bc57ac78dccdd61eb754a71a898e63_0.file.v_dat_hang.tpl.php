<?php
/* Smarty version 3.1.33, created on 2019-03-31 04:35:14
  from 'C:\xampp\htdocs\HQbook\views\templates\khach_hang\v_dat_hang.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca0276219a3f8_45870119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1717d43dc2bc57ac78dccdd61eb754a71a898e63' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\khach_hang\\v_dat_hang.tpl',
      1 => 1553883078,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca0276219a3f8_45870119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3919219625ca0276217cf30_94332088', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6619237955ca02762186b75_96309155', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_3919219625ca0276217cf30_94332088 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3919219625ca0276217cf30_94332088',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_6619237955ca02762186b75_96309155 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6619237955ca02762186b75_96309155',
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
