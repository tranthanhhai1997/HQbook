<?php
/* Smarty version 3.1.33, created on 2019-03-31 04:35:50
  from 'C:\xampp\htdocs\HQbook\views\templates\admin\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca02786452cf2_54103235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4596ebeb984b8d16151ec7f3c942574471f120aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\admin\\master.tpl',
      1 => 1553999266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca02786452cf2_54103235 (Smarty_Internal_Template $_smarty_tpl) {
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
      <link rel="stylesheet" type="text/css" href="<?php echo path;?>
/public/css/style.css">
       <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
   
      <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"><?php echo '</script'; ?>
>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <meta property="og:url"           content="<?php echo path;?>
" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="HQBook Trang Web Thương Mại Điện Tử Bán Sách Lớn Nhất Thế Giới" />
  <meta property="og:description"   content="HQBook Trang Web Thương Mại Điện Tử Bán Sách Lớn Nhất Thế Giới" />
  <meta property="og:image"         content="<?php echo path;?>
public/img/logo.png" />
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4221131165ca02786421fb1_49698556', 'title');
?>
</title>
  </head>

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
                            <a href="<?php echo path;?>
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

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8759788485ca0278643f478_58766162', 'content');
?>

            
     
    
  
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2745679165ca027864490b0_46022769', 'script');
?>

 
</body>
</html>
   
<?php }
/* {block 'title'} */
class Block_4221131165ca02786421fb1_49698556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4221131165ca02786421fb1_49698556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

       <!-- top banner head 1-->
    
    <?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_8759788485ca0278643f478_58766162 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_8759788485ca0278643f478_58766162',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_2745679165ca027864490b0_46022769 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_2745679165ca027864490b0_46022769',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
