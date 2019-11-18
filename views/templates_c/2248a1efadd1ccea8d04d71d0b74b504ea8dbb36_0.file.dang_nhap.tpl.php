<?php
/* Smarty version 3.1.33, created on 2019-03-28 13:18:07
  from 'C:\wamp64\www\HQbook\views\templates\admin\dang_nhap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cc98f2cb349_49952542',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2248a1efadd1ccea8d04d71d0b74b504ea8dbb36' => 
    array (
      0 => 'C:\\wamp64\\www\\HQbook\\views\\templates\\admin\\dang_nhap.tpl',
      1 => 1553610803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cc98f2cb349_49952542 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13481410085c9cc98f2cb342_25362515', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_177071665c9cc98f2cb345_06293251', 'content');
?>

    
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8002506815c9cc98f2cb343_00911454', 'script');
?>

  </body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/master.tpl');
}
/* {block 'title'} */
class Block_13481410085c9cc98f2cb342_25362515 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_13481410085c9cc98f2cb342_25362515',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Đăng nhập<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_177071665c9cc98f2cb345_06293251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_177071665c9cc98f2cb345_06293251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <body>
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="offset-3 col-md-4">
                <form class="form-signin" method="POST">
                    <img class="offset-4 col-4" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/icon-user.png" alt="" width="72" height="100">
                    <h1 style="margin-top: 30px" class="h3 mb-3 font-weight-normal">Vui Lòng Đăng Nhập</h1>
                    
                    <input type="text" id="tenDN" name="tenDN" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['tenDN']->value;?>
" placeholder="Tên tài khoản" required autofocus>
                   
                    <input type="password" id="matkhau" name="matkhau" value="<?php echo $_smarty_tpl->tpl_vars['matkhau']->value;?>
" class="form-control" placeholder="Mật Khẩu" required>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
                    <?php echo $_smarty_tpl->tpl_vars['err']->value;?>

                </form>   
            </div>
        </div>
    </div>
    <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_8002506815c9cc98f2cb343_00911454 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8002506815c9cc98f2cb343_00911454',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
