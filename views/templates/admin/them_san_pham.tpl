{extends file='admin/quantri.tpl'}
{block name='title'}Thêm sản phẩm{/block}
{block name='content'}
<div class="container" style="margin-top: 50px">
  <form action="" method="post" enctype="multipart/form-data">
    <label for="ten_sach">Tên sách</label>
    <input  class="form-control" type="text" id="ten_sach" name="ten_sach" placeholder="Tên sách" value="{$data['ten_sach']}"required autofocus>

    <label for="ten_sach_url">Tên sách URL</label>
    <input class="form-control" type="text" id="ten_sach_url" name="ten_sach_url" placeholder="Tên sách URL" value="{$data['ten_sach_url']}" required autofocus>
    
    <label for="id_tac_gia">Tác giả</label>
    <select class="form-control" id="id_tac_gia" name="id_tac_gia" >
      {foreach from=$tac_gia item=item}
          <option   value="{$item->id}" {if $item->id == $data['id_tac_gia']}selected {/if}>{$item->ten_tac_gia}</option>
      {/foreach}
    </select>
 <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
      <label for="gioi_thieu">Giới Thiệu</label>
       <textarea class="form-control" value="{$data['gioi_thieu']}" id="gioi_thieu" name="editor1" cols="80" rows="40">
           
       </textarea>
       
      <label for="doc_thu">Đọc thử</label>
       <textarea class="form-control" value="{$data['doc_thu']}" id="doc_thu" name="doc_thu"></textarea>
  
    <label for="id_loai_sach">Loại sách</label>
    <select class="form-control" id="id_loai_sach" name="id_loai_sach" >
      {foreach from=$loai_sach item=item}
          <option value="{$item->id}"{if $item->id == $data['id_loai_sach']}selected {/if}>{$item->ten_loai_sach}</option>
      {/foreach}
    </select>

    <label for="id_nha_xuat_ban">Nhà Xuất Bản</label>
    <select class="form-control" id="id_nha_xuat_ban" name="id_nha_xuat_ban" >
      {foreach from=$nxb item=item}
          <option value="{$item->id}"{if $item->id == $data['id_nha_xuat_ban']}selected {/if}>{$item->ten_nha_xuat_ban}</option>
      {/foreach}
    </select>

    <label for="so_trang">Số trang</label>
    <input class="form-control" type="text" id="so_trang" name="so_trang" placeholder="Số trang" value="{$data['so_trang']}" required autofocus>

    <label for="ngay_xuat_ban">Ngày xuất bản</label>
    <input class="form-control" type="text" id="ngay_xuat_ban" name="ngay_xuat_ban" placeholder="Ngày xuất bản" value="{$data['ngay_xuat_ban']}">
    
    
    <label for="kich_thuoc">Kích thước</label>
    <input class="form-control" type="text" id="kich_thuoc" name="kich_thuoc" placeholder="Kích thước" value="{$data['kich_thuoc']}" required autofocus>

<label for="trong_luong">Trọng Lượng</label>
    <input class="form-control" type="text" id="trong_luong" name="trong_luong" placeholder="Trọng Lượng"
    value="{$data['trong_luong']}" required autofocus>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name="hinh" class="custom-file-input form-control" id="inputGroupFile01" required>
    <label class="custom-file-label" for="inputGroupFile01">Chọn hình</label>
  </div>

  </label>
</div>


  <label for="don_gia">Đơn giá</label>
    <input class="form-control" type="text" id="don_gia" name="don_gia" placeholder="Đơn giá" value="{$data['don_gia']}" required autofocus>

  <label for="gia_bia">Giá bìa</label>
    <input class="form-control" type="text" id="gia_bia" name="gia_bia" placeholder="Giá bìa" value="{$data['gia_bia']}" required autofocus>

  <button type="submit" name="submit" class="btn btn-success btn-block">Thêm</button>
 
  </form>
  {/block}
 {block name='script'}
  <script>
    CKEDITOR.replace( 'editor1' );
  </script>   
 {/block}
  