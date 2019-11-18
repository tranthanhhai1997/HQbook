<?php
/* Smarty version 3.1.33, created on 2019-03-29 10:27:17
  from 'C:\xampp\htdocs\HQbook\views\templates\admin\dang_nhap.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9de4f5df8602_45116329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a98d7bedc4241190846e7a3c5c231924fc5104d5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\admin\\dang_nhap.tpl',
      1 => 1553849516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9de4f5df8602_45116329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4141170035c9de4f5df3659_34422012', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10647570625c9de4f5df3fe1_41636870', 'content');
?>

    
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8879902325c9de4f5df80f4_09670552', 'script');
?>

  </body>
</html><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/master.tpl');
}
/* {block 'title'} */
class Block_4141170035c9de4f5df3659_34422012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4141170035c9de4f5df3659_34422012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Đăng nhập<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_10647570625c9de4f5df3fe1_41636870 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10647570625c9de4f5df3fe1_41636870',
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
class Block_8879902325c9de4f5df80f4_09670552 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_8879902325c9de4f5df80f4_09670552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
