{extends file='layouts/master.tpl'}
{block name='title'}Danh sách sản phẩm{/block}
{block name='content'}

<div class="container">
  <div class="dh" style="margin: 15px">
  <h3>Thông tin đơn đặt hàng</h3>
{$data['ho_ten']}
  <form action="" method="post">
    <div class="form-group">
      <label for="ho-ten">Họ tên người nhận:</label>
      <input type="text" class="form-control" required id="ho-ten" value="{$data['ho_ten']}" name="ho_ten_nguoi_nhan">
    </div>
    <div class="form-group">Phái: 
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" name="phai" class="custom-control-input" id="customRadio1" name="example1" value="1" {if $data['phai'] == 1}
          checked="checked" 
        {/if}>
        <label class="custom-control-label" for="customRadio1">Nam</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" name="phai" class="custom-control-input" id="customRadio2" name="example2" value="0"{if $data['phai'] == 0}
          checked="checked" 
        {/if}>
        <label class="custom-control-label" for="customRadio2">Nữ</label>
      </div>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" required id="email" value="{$data['email']}" name="email_nguoi_nhan">
    </div>
    <div class="form-group">
      <label for="sdt">Số điện thoại người nhận:</label>
      <input type="number" class="form-control" required id="sdt" value="{$data['dien_thoai']}" name="so_dien_thoai_nguoi_nhan">
    </div>
    <div class="form-group">
      <label for="dia-chi">Địa chỉ người nhận:</label>
      <input type="text" class="form-control" required id="dia-chi" value="{$data['dia_chi']}" name="dia_chi_nguoi_nhan">
    </div>  
     <div class="form-group">
         <label for="ghi-chu">Ghi chú:</label>
        <textarea name="ghi_chu" class="form-control" id="ghi-chu" value="$data['ghi_chu']" cols="30" rows="3"></textarea>
     </div>
    <button type="submit" name="submit" class="btn btn-success">XÁC NHẬN ĐƠN HÀNG</button>
  </form>
    
  
   

    <h5 style="margin-top: 50px">Danh sách</h5>
    {if isset($gio_hang)}
      
        <table class="table table-striped">
          <tr><td>STT</td><td>Mã sách</td><td>Tên sách</td><td align="right">Đơn giá</td><td align="right">Số lượng</td><td align="right">Thành tiền</td></tr>
          {$i=1}
          {$TongTienSach=0}
          {foreach $gio_hang as $ttSach}
            <tr>
                <td>{$i}</td>
                <td>{$ttSach->id}</td>
                <td>{$ttSach->ten_sach}</td>
                <td align="right">{number_format($ttSach->don_gia)}</td>
                <td align="right">{number_format($ttSach->so_luong)}</td>
                <td align="right">{number_format($ttSach->don_gia*$ttSach->so_luong)}</td>
            </tr>
            {$TongTienSach=$TongTienSach+($ttSach->don_gia*$ttSach->so_luong)}
            {$i=$i+1}
          {/foreach}
          <tr><td colspan="5">Tổng tiền Sách</td><td align="right">{number_format($TongTienSach)}</td></tr>
        </table>
        {else}
          Giỏ hàng lỗi
        {/if}
        </div>
    </div>

{/block}