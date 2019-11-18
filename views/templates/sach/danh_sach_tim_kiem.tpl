{extends file='layouts/master.tpl'}
{block name='title'}Danh Sách sản phẩm{/block}
{block name='content'}

 <div class="d-flex p-3 bg-warning text-white" style="margin: 20px 0px 20px 0px">  
    <div class="p-2 bg-primary"><a class ="text-white" href="http://localhost/HQbook">Trang Chủ</a></div>
    <div class="p-2 bg-success">Tìm kiếm nội dung: {$noi_dung}</div>
</div>
 {if empty($list_sach)}
 Không tìm thấy {$noi_dung}, xin vui quay lại
 {/if}
 
<div class="container" style="margin-top:20px;">
	<div class="row">
		{foreach from=$list_sach item=value}
			<div class="col-3 card" style="margin-top:10px">
				    <img class="card-img-top img-sach" src="{path}public/img/sach/{$value->hinh}" alt="Card image" style="width:100%">
				    <div class="card-body">
				      <h5 class="card-title">{$value->ten_sach}</h5>
				      <div class="row" style="margin-left: 0px">
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
							<p class="fa fa-star "></p>
						</div>
				      <p class="card-text">Giá : {number_format($value->don_gia)}đ <strike>{number_format($value->gia_bia)}đ</strike></p><b style="color:red">{(100 - round(($value->don_gia*100)/$value->gia_bia,2))}%</b>

				      	<a href="{path}chi-tiet-sach/{$value->ten_sach_url}-{$value->id}" style="margin-left: 15px"class="btn btn-primary stretched-link">Xem chi tiết</a></p>
				      
				    </div>
				</div>
		{/foreach}
		</div>
	</div>


     
{/block}