<?php
/* Smarty version 3.1.33, created on 2019-03-29 16:12:45
  from 'C:\xampp\htdocs\HQbook\views\templates\sach\chi_tiet_sach.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9e35ede4abb3_02890952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1b5c1842657772b26d9caf272f20f4999e43a3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\sach\\chi_tiet_sach.tpl',
      1 => 1553871874,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9e35ede4abb3_02890952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12274320845c9e35edd2d8f9_84291996', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18485662065c9e35edd60589_49197206', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21281413135c9e35ede42eb7_73789525', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_12274320845c9e35edd2d8f9_84291996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_12274320845c9e35edd2d8f9_84291996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh Sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18485662065c9e35edd60589_49197206 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18485662065c9e35edd60589_49197206',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="d-flex p-3 bg-warning text-white" style="margin: 20px 0px 20px 0px">  
    <div class="p-2 bg-primary"><a class ="text-white" href="http://localhost/HQbook">Trang Chủ</a></div>
    <div class="p-2 bg-info"><a class ="text-white" href="<?php echo $_SESSION['back'];?>
">Danh Mục Sách</a></div>
    <div class="p-2 bg-success"><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_sach;?>
</div>
</div>

		<div class="container">
			<div class="row">
					<div class="col-6 ">
						<img  src="<?php echo path;?>
public/img/sach/<?php echo $_smarty_tpl->tpl_vars['sach']->value->hinh;?>
" class="img-thumbnail img-sach" width="450px" alt="">
						 <div class="socials-share" style="margin-left: -150px;">
						    <a class="bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="_blank"><span class="fa fa-facebook"></span> Share</a>
						    <a class="bg-twitter" href="https://twitter.com/share?text=&url=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="_blank"><span class="fa fa-twitter"></span> Tweet</a>
						    <a class="bg-google-plus" href="https://plus.google.com/share?url=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" target="_blank"><span class="fa fa-google-plus"></span> Plus</a>			   
						</div>
  					</div>
					
					<div class="col-6">
						<h3><?php echo $_smarty_tpl->tpl_vars['sach']->value->ten_sach;?>
</h3>
						<p><?php echo $_smarty_tpl->tpl_vars['sach']->value->gioi_thieu;?>
</p>
						<h4 style="color:red"><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->don_gia);?>
đ - Tiết kiệm: <?php echo 100-round(($_smarty_tpl->tpl_vars['sach']->value->don_gia*100)/$_smarty_tpl->tpl_vars['sach']->value->gia_bia,2);?>
%</h4> 
						<p><strike><?php echo number_format($_smarty_tpl->tpl_vars['sach']->value->gia_bia);?>
đ</strike></p>

						<p>Tác Giả: <?php echo $_smarty_tpl->tpl_vars['tac_gia']->value->ten_tac_gia;?>
 - Nhà Xuất Bản: <?php echo $_smarty_tpl->tpl_vars['nxb']->value->ten_nha_xuat_ban;?>
</p>
						<p>Kích Thước: <?php echo $_smarty_tpl->tpl_vars['sach']->value->kich_thuoc;?>
 - Trọng lượng: <?php echo $_smarty_tpl->tpl_vars['sach']->value->trong_luong;?>
 gram</p>
						<div class="row" style="margin-left: 0px">
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
						</div>
						
						<div class="form-inline">
							<form action="" method="post">
							<input type="number" class="form-control" value="1" style="width: 90px;    margin-left: -28px;; margin-right: 20px" id="so_luong" name="so_luong">
							<button class="btn btn-primary mua" id="<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
" name="<?php echo $_smarty_tpl->tpl_vars['sach']->value->id;?>
">Thêm vào giỏ hàng</button>
							</form>
						</div>
					</div>
					
				</div>
		</div>

		  
<?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_21281413135c9e35ede42eb7_73789525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_21281413135c9e35ede42eb7_73789525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
>
	$(document).ready(function(){
	  	$(".mua").click(function(){
		    var so_luong = $("#so_luong").val();
		    if (so_luong <= 0 || so_luong == ""){
		    	alert('VUI LÒNG NHẬP SỐ LƯỢNG > 0');
		    	return;
		    }
		    var id = $(this).attr("id");
		    $.ajax({
				    	url: "<?php echo path;?>
khach-hang/them-vao-gio-hang",
				    	dataType: "text",
				    	type: "POST",
				    	data: { so_luong: so_luong, id: id },
				    	success: function(result){
				    		if(result=="0"){
                             alert("THÊM GIỎ HÀNG KHÔNG THÀNH CÔNG");
				    		}
				    		else
				    		{
				    		   alert("THÊM GIỎ HÀNG THÀNH CÔNG");
				    		}
			    		}
			      });
	    });
    });

<?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'script'} */
}
