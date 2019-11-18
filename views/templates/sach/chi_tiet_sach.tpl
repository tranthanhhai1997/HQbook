{extends file='layouts/master.tpl'}
{block name='title'}Danh Sách sản phẩm{/block}
{block name='content'}

<div class="d-flex p-3 bg-warning text-white" style="margin: 20px 0px 20px 0px">  
    <div class="p-2 bg-primary"><a class ="text-white" href="http://localhost/HQbook">Trang Chủ</a></div>
    <div class="p-2 bg-info"><a class ="text-white" href="{$smarty.session.back}">Danh Mục Sách</a></div>
    <div class="p-2 bg-success">{$sach->ten_sach}</div>
</div>

		<div class="container">
			<div class="row">
					<div class="col-6 ">
						<img  src="{path}public/img/sach/{$sach->hinh}" class="img-thumbnail img-sach" width="450px" alt="">
						 <div class="socials-share" style="margin-left: -150px;">
						    <a class="bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u={$link}" target="_blank"><span class="fa fa-facebook"></span> Share</a>
						    <a class="bg-twitter" href="https://twitter.com/share?text=&url={$link}" target="_blank"><span class="fa fa-twitter"></span> Tweet</a>
						    <a class="bg-google-plus" href="https://plus.google.com/share?url={$link}" target="_blank"><span class="fa fa-google-plus"></span> Plus</a>			   
						</div>
  					</div>
					
					<div class="col-6">
						<h3>{$sach->ten_sach}</h3>
						<p>{$sach->gioi_thieu}</p>
						<h4 style="color:red">{number_format($sach->don_gia)}đ - Tiết kiệm: {100 - round(($sach->don_gia*100)/$sach->gia_bia,2)}%</h4> 
						<p><strike>{number_format($sach->gia_bia)}đ</strike></p>

						<p>Tác Giả: {$tac_gia->ten_tac_gia} - Nhà Xuất Bản: {$nxb->ten_nha_xuat_ban}</p>
						<p>Kích Thước: {$sach->kich_thuoc} - Trọng lượng: {$sach->trong_luong} gram</p>
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
							<button class="btn btn-primary mua" id="{$sach->id}" name="{$sach->id}">Thêm vào giỏ hàng</button>
							</form>
						</div>
					</div>
					
				</div>
		</div>

		  
{/block}

{block name='script'}
<script>
	$(document).ready(function(){
	  	$(".mua").click(function(){
		    var so_luong = $("#so_luong").val();
		    if (so_luong <= 0 || so_luong == ""){
		    	alert('VUI LÒNG NHẬP SỐ LƯỢNG > 0');
		    	return;
		    }
		    var id = $(this).attr("id");
		    $.ajax({
				    	url: "{path}khach-hang/them-vao-gio-hang",
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

</script>

{/block}