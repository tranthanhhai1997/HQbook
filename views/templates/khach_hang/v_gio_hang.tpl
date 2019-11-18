{extends file='layouts/master.tpl'}
{block name='title'}Danh sách sản phẩm{/block}
{block name='content'}

<div class="container">
  <div class="row">
    <div class="col-md-12">
    {if isset($ds_sach)}
        <div>{assign var=tien_sach value=0}
        <form action="{$path}gio-hang/cap-nhat.html" method="post">
    {if isset($ds_sach)}       
        <h3 align="center">Danh sách bạn đã chọn</h3>
        <table  class="table">
            <tr><td >Mã sách</td><td>Tên sách</td><td>Số lượng</td><td align="right" >Đơn giá</td><td align="right" >Thành tiền</td><td align="center" >Xóa</td></tr>
        {foreach $ds_sach as $item}
            <tr>
                <td>
                    {$item->id}
                </td>
                <td>
                    {$item->ten_sach}
                </td>
                <td>
                    <input type="text" value="{$item->so_luong}" name="soluong{$item->id}" style="width:70px; text-align:center"/>
                    <input type="hidden" value="{$item->don_gia}" name="dongia{$item->id}"/>
                </td>
                <td align="right">
                    {number_format($item->don_gia)}
                </td>
                <td align="right">
                    {number_format($item->so_luong*$item->don_gia)}đ 
                    {$tien_sach=$tien_sach+$item->so_luong*$item->don_gia}
                </td>
                <td align="center">
                    <input type="checkbox" name="xoa{$item->id}" value="{$item->don_gia}"/>
                </td>
            </tr>
        {/foreach}
            <tr bgcolor="#FFE9D2"><td colspan="4" align="right">Tiền Sách:</td><td align="right">{number_format($tien_sach)}đ</td></tr>
        </table> 
    {/if} 
    
    
    <p align="center">
    
    <input type="submit" name="submit" value="Cập nhật" class="btn btn-primary"/>
    
    <a class="btn btn-info" href = "{$path}thong-tin-dat-hang.html"> Tiến hàng đặt hàng</a>
    <a class="btn btn-danger" href = "{$path}gio-hang/xoa-gio-hang.html"> Xóa giỏ hàng</a>            
    </p>
    </form>
    </div>
    {else}
        <h3 align="center">Giỏ hàng rỗng</h3> 
    {/if}
    </div>
  </div>
</div>
{/block}