{extends file='layouts/master.tpl'}
{block name='title'}Danh sách sản phẩm{/block}
{block name='content'}
{if isset($tt_dat_hang)}
  <div class="container">
  	<h1 style="color: green">Đặt hàng thành công.</h1>
  </div>
  {else}
  <div class="container">
  	<h1 style="color: green">Đặt hàng không thành công.</h1>
  </div>
    
{/if}
{/block}