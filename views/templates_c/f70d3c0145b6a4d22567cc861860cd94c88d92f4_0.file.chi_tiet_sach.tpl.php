<?php
/* Smarty version 3.1.33, created on 2019-03-28 12:19:49
  from 'C:\wamp64\www\HQbook\views\templates\sach\chi_tiet_sach.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c9cbbe584c544_70031862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f70d3c0145b6a4d22567cc861860cd94c88d92f4' => 
    array (
      0 => 'C:\\wamp64\\www\\HQbook\\views\\templates\\sach\\chi_tiet_sach.tpl',
      1 => 1553489865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c9cbbe584c544_70031862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8473421835c9cbbe5834e44_76134971', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6320227185c9cbbe5838cc3_94408285', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4861767375c9cbbe584c549_76182577', 'script');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/master.tpl');
}
/* {block 'title'} */
class Block_8473421835c9cbbe5834e44_76134971 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_8473421835c9cbbe5834e44_76134971',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Danh Sách sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_6320227185c9cbbe5838cc3_94408285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6320227185c9cbbe5838cc3_94408285',
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
						<div class="row" style="margin-left: 154px">
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
class Block_4861767375c9cbbe584c549_76182577 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_4861767375c9cbbe584c549_76182577',
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
