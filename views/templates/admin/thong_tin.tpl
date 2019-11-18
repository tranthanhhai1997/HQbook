{extends file='admin/master.tpl'}
{block name='title'}Đăng nhập{/block}
{block name='content'}
	<div class="container" style="margin-top: 30px">
		<div class="row">
			<div class="offset-3 col-9">
				<div class="card" style="width:400px">
				    <img class="card-img-top" src="{path}/public/img/{$tt_nguoi_dung->avatar}" alt="Card image" style="width:100%">
				    <div class="card-body">
				    <div class="row">
				    	<div class="col-3">
				  			<img  src="{path}/public/img/level/{$tt_nguoi_dung->id_loai_user}.png" alt="Card image" style="width:100%">
				        </div>
				        <div class="col-9"><h1 class="card-title">{$tt_nguoi_dung->ho_ten}</h1>
				        </div>
					</div>
				      <br>
				      <p class="card-text">Loại user: {$loai_nguoi_dung->ten_loai_nguoi_dung}</p>
				      <p class="card-text">Giới tính: {if $tt_nguoi_dung->phai == 1}Nam
				      	{else} Nữ {/if}</p>
				      <p class="card-text">Địa chỉ: {$tt_nguoi_dung->dia_chi}</p>
				      <p class="card-text">Gmail: {$tt_nguoi_dung->email} </p>
				      <p class="card-text">SĐT: {$tt_nguoi_dung->dien_thoai}</p>
				      <a href="{path}dang-xuat" class="btn btn-primary">Đăng xuất</a>
				      {if $tt_nguoi_dung->id_loai_user == 7}
				      		<a href="{path}admin" class="btn btn-success">Cpanel</a>
				      {/if}
				   </div>
			</div>
		</div>  
    </div>
  <br>
{/block}