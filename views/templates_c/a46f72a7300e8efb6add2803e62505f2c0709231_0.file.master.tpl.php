<?php
/* Smarty version 3.1.33, created on 2019-03-28 13:18:07
  from 'C:\wamp64\www\HQbook\views\templates\admin\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cc98f313dc0_49763637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a46f72a7300e8efb6add2803e62505f2c0709231' => 
    array (
      0 => 'C:\\wamp64\\www\\HQbook\\views\\templates\\admin\\master.tpl',
      1 => 1553507627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cc98f313dc0_49763637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="http://localhost/HQbook/public/css/style.css">
       <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/
      <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>
<body>
    
    <!-- top banner head 1-->
    <div class="top-banner-block">
            <p><img src="<?php echo path;?>
public/img/banner-top.jpg" alt=""/></p>
    </div>


    <!-- header 2 -->
    <div class="container">
        <div class="row">
            <div class=" col-lg-5 col-md-5 col-sm-12 col-xs-12 header-left hidden-xs">
              <ul class="nav ">
                <li class="nav-item disabled">
                  <a class="nav-link" >info@HQBook.com &nbsp &nbsp | &nbsp  &nbsp 0399066199</a>
                </li> 
              </ul>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 header-right hidden-xs">
                <ul class="nav header-right">
                    <li class="nav-item ">
                      <?php if (!isset($_SESSION['fullname'])) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
tao-tai-khoan/" class="nav-link" >Tạo tài khoản</a>
                        <?php }?>  
                    </li> 
                    <li class="nav-item ">
                        <?php if (isset($_SESSION['fullname'])) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
thong-tin-user" class="nav-link">Xin Chào <?php echo $_SESSION['fullname'];?>
</a>
                            <?php } elseif (!isset($_SESSION['fullname'])) {?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
dang-nhap" class="nav-link" >Đăng Nhập</a>
                        <?php }?>        
                    </li> 
                    <li class="nav-item ">
                      <a href="<?php echo path;?>
lien-he/" class="nav-link" >Liên Hệ</a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>   


        <!-- header 3     -->
    <div class="container">
        <div class="row">
            <!-- logo -->
            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 logo">
                 <a href="<?php echo path;?>
" title="FAHASA.COM" class="logo"><img src="<?php echo path;?>
public/img/logo.png" alt="HQBook.COM"></a>                        
            </div>
            <!-- search -->
            
        </div>
    </div>
        
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                    
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8105191785c9cc98f313dc3_88786502', 'content');
?>

            
        </main>
   

    
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15955764225c9cc98f313dc5_94026113', 'script');
?>

  </body>
  
</html><?php }
/* {block 'content'} */
class Block_8105191785c9cc98f313dc3_88786502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8105191785c9cc98f313dc3_88786502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_15955764225c9cc98f313dc5_94026113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_15955764225c9cc98f313dc5_94026113',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
