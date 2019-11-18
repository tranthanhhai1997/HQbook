<?php
/* Smarty version 3.1.33, created on 2019-03-28 13:17:01
  from 'C:\wamp64\www\HQbook\views\templates\trang_chu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cc94dc17602_69055286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fae0f2898fe1e9a0541e72303f2b5748766c1ee' => 
    array (
      0 => 'C:\\wamp64\\www\\HQbook\\views\\templates\\trang_chu.tpl',
      1 => 1553779020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cc94dc17602_69055286 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10977380715c9cc94da988f5_97636496', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12589634935c9cc94da988f8_91697245', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_10977380715c9cc94da988f5_97636496 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10977380715c9cc94da988f5_97636496',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
HQBook<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_12589634935c9cc94da988f8_91697245 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12589634935c9cc94da988f8_91697245',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


        <!-- header 4 -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="block-title" >
                    <div id="ves-verticalmenu">
                        <span style="color: #fff">Danh Mục</span>   
                    </div>
                    
                    <div class="orange-left">
                        <ul class="nav first left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Trong Nước</span>
                                <div class="dropdown-content dropdown-menu">
                                  <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_trong_nuoc']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav  left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Truyện - Tiểu Thuyết</span>
                                <div class="dropdown-content dropdown-menu">
                                   <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['truyen_tieu_thuyet']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                    
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Kinh Doanh</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_kinh_doanh']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                  </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Tuyển Tập</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_trong_nuoc']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Theo NXB</span>
                                <div class="dropdown-content dropdown-menu">
                                   <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_nxb']->value, 'nxb');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nxb']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
nxb/<?php echo $_smarty_tpl->tpl_vars['nxb']->value->ten_nha_xuat_ban_url;?>
-<?php echo $_smarty_tpl->tpl_vars['nxb']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['nxb']->value->ten_nha_xuat_ban;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Theo Tác Giả</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_tac_gia']->value, 'tac_gia');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tac_gia']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
tac-gia/<?php echo $_smarty_tpl->tpl_vars['tac_gia']->value->ten_tac_gia_url;?>
-<?php echo $_smarty_tpl->tpl_vars['tac_gia']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['tac_gia']->value->ten_tac_gia;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Top 100 Best Sellers</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['best_seller']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Cho Thiếu Nhi</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_thieu_nhi']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Kỹ Năng Sống</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ky_nang_song']->value, 'sach');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sach']->value) {
?>
                                       <div class='col-6'>
                                        <a href='<?php echo path;?>
sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
'><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_loai_sach;?>
</a>
                                        </div>                                     
                                     <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </div>
                                </div>  
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
            
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="orange"><span>ĐỒ ÁN BÁN SÁCH</span></div>
                    <div id="demo" class="carousel slide" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/slide/1.jpg" >
                        </div>
                        <div class="carousel-item">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/slide/2.jpg" >
                        </div>
                        <div class="carousel-item">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/slide/3.jpg">
                        </div>
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
            </div>
        </div>
    </div>


        <!-- khuyen mai -->
    <div class="container ">
        <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="banner-home-inner ">
                                    <a href="https://www.fahasa.com/fahasa-marathon">
                                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/khuyenmai1.png" alt="">
                                                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6 banner-home-inner-mid">
                        <div class="banner-home-inner ">
                                    <a href="https://www.fahasa.com/do-choi">
                                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/khuyenmai2.png" alt="">
                                                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <div class="banner-home-inner ">
                                    <a href="https://www.fahasa.com/dua-don-than-toc">
                                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
public/img/khuyenmai3.png" alt="">
                                                            </a>
                        </div>
                    </div>              
        </div>
    </div>



    <!-- body-web -->
    <div class="container ">
        <div class="row " style="margin: 40px 31px 0 15px;">
            <div  class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <h2 style="color: #F7941E;">SÁCH NỔI NẬT TRONG TUẦN</h2>
                <div class="row slide-border">
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_noi_bat']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>     
                     <div class=" carousel-item active">
                     <div class="row">
                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value%4 == 1) {?>
                        <div class=" carousel-item">
                        <div class="row">
                        
                  <?php }?>
                    <div class="col-3 "  style="padding:15px; background-color:#E1D6C5;">
                      <img class="card-img-top img-sach"  src="<?php echo path;?>
public/img/sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
" style="height: 50%">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
</h5>
                        <div class="row" style="margin-left: 154px">
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                        </div>
                    <p class="card-text">Giá : <?php echo number_format($_smarty_tpl->tpl_vars['value']->value->don_gia);?>
đ <strike><?php echo number_format($_smarty_tpl->tpl_vars['value']->value->gia_bia);?>
đ</strike></p><b style="color:red"><?php echo (100-round(($_smarty_tpl->tpl_vars['value']->value->don_gia*100)/$_smarty_tpl->tpl_vars['value']->value->gia_bia,2));?>
%</b>

                      <a href="<?php echo path;?>
chi-tiet-sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" style="margin-left: 15px"class="btn btn-primary stretched-link">Xem chi tiết</a></p>
                  </div>
                </div>
                  
                  <?php if ($_smarty_tpl->tpl_vars['i']->value%4 == 0) {?>
                     </div>
                   </div>
                  <?php }?>
                  <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
              </div>
              
        
          </div>
          <!----------------------->
          <div class="row">
            <div class="col-12">
                <div class="banner-home-inner">
                    <a href="<?php echo path;?>
">
                   <img src="<?php echo path;?>
public/img/free-ship" alt="">
                                            </a>
                </div>
            </div>
          </div>
        

                <div class="row " style="margin: 40px 0px 50px 0px;">
            <div  class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <h2 style="color: #F7941E;">SÁCH BÁN CHẠY NHẤT TRONG THÁNG</h2>
                <div class="row slide-border">
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sach_ban_chay']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>     
                     <div class=" carousel-item active">
                     <div class="row">
                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value%4 == 1) {?>
                        <div class=" carousel-item">
                        <div class="row">
                        
                  <?php }?>
                    <div class="col-3 "  style="padding:15px; background-color:#C2D8C0;">
                      <img class="card-img-top img-sach"  src="<?php echo path;?>
public/img/sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
" style="height: 50%">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
</h5>
                        <div class="row" style="margin-left: 154px">
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                        </div>
                    <p class="card-text">Giá : <?php echo number_format($_smarty_tpl->tpl_vars['value']->value->don_gia);?>
đ <strike><?php echo number_format($_smarty_tpl->tpl_vars['value']->value->gia_bia);?>
đ</strike></p><b style="color:red"><?php echo (100-round(($_smarty_tpl->tpl_vars['value']->value->don_gia*100)/$_smarty_tpl->tpl_vars['value']->value->gia_bia,2));?>
%</b>

                      <a href="<?php echo path;?>
chi-tiet-sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" style="margin-left: 15px"class="btn btn-primary stretched-link">Xem chi tiết</a></p>
                  </div>
                </div>
                  
                  <?php if ($_smarty_tpl->tpl_vars['i']->value%4 == 0) {?>
                     </div>
                   </div>
                  <?php }?>
                  <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
              </div>
              
        
          </div>

 <!----------------------->
          <div class="row">
            <div class="col-12">
                <div class="banner-home-inner">
                    <a href="<?php echo path;?>
">
                   <img src="<?php echo path;?>
public/img/qua-tang.png" alt="">
                                            </a>
                </div>
            </div>
          </div>
                <div class="row" style="margin: 40px 0px 50px 0px;">
            <div  class="carousel slide " data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <h2 style="color: #F7941E;">SÁCH DOANH NHÂN 2019</h2>
                <div class="row slide-border">
                  <?php $_smarty_tpl->_assignInScope('i', 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['truyen_tranh']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                  <?php if ($_smarty_tpl->tpl_vars['i']->value == 1) {?>     
                     <div class=" carousel-item active">
                     <div class="row">
                      <?php } elseif ($_smarty_tpl->tpl_vars['i']->value%4 == 1) {?>
                        <div class=" carousel-item">
                        <div class="row">
                        
                  <?php }?>
                    <div class="col-3 "  style="padding:15px; background-color:#CCDEE1;">
                      <img class="card-img-top img-sach"  src="<?php echo path;?>
public/img/sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->hinh;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
" style="height: 50%">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach;?>
</h5>
                        <div class="row" style="margin-left: 154px">
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                          <p class="fa fa-star "></p>
                        </div>
                    <p class="card-text">Giá : <?php echo number_format($_smarty_tpl->tpl_vars['value']->value->don_gia);?>
đ <strike><?php echo number_format($_smarty_tpl->tpl_vars['value']->value->gia_bia);?>
đ</strike></p><b style="color:red"><?php echo (100-round(($_smarty_tpl->tpl_vars['value']->value->don_gia*100)/$_smarty_tpl->tpl_vars['value']->value->gia_bia,2));?>
%</b>

                      <a href="<?php echo path;?>
chi-tiet-sach/<?php echo $_smarty_tpl->tpl_vars['value']->value->ten_sach_url;?>
-<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" style="margin-left: 15px"class="btn btn-primary stretched-link">Xem chi tiết</a></p>
                  </div>
                </div>
                  
                  <?php if ($_smarty_tpl->tpl_vars['i']->value%4 == 0) {?>
                     </div>
                   </div>
                  <?php }?>
                  <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>       
              </div>
              
        
          </div>
        </div>
    </div>

<?php
}
}
/* {/block 'content'} */
}
