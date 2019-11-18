<?php
/* Smarty version 3.1.33, created on 2019-03-28 13:18:18
  from 'C:\wamp64\www\HQbook\views\templates\admin\quantri.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cc99a367f65_89269766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ede8840da39612c600cacb698a3589c2e2577c1f' => 
    array (
      0 => 'C:\\wamp64\\www\\HQbook\\views\\templates\\admin\\quantri.tpl',
      1 => 1553610665,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cc99a367f65_89269766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15081747285c9cc99a367f65_31432145', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_382766175c9cc99a367f69_69963808', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/master.tpl');
}
/* {block 'title'} */
class Block_15081747285c9cc99a367f65_31432145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_15081747285c9cc99a367f65_31432145',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_382766175c9cc99a367f69_69963808 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_382766175c9cc99a367f69_69963808',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

hihi
<?php
}
}
/* {/block 'content'} */
}
