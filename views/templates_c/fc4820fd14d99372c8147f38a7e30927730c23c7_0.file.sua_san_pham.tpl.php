<?php
/* Smarty version 3.1.33, created on 2019-03-31 04:26:23
  from 'C:\xampp\htdocs\HQbook\views\templates\admin\sua_san_pham.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ca0254f406d55_33330143',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc4820fd14d99372c8147f38a7e30927730c23c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HQbook\\views\\templates\\admin\\sua_san_pham.tpl',
      1 => 1553998442,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ca0254f406d55_33330143 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10205787305ca0254f3b8b48_96370390', 'title');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18121054935ca0254f3c2781_87317127', 'content');
?>

 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7320338255ca0254f3fd119_92257859', 'script');
?>

  <?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'admin/quantri.tpl');
}
/* {block 'title'} */
class Block_10205787305ca0254f3b8b48_96370390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_10205787305ca0254f3b8b48_96370390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Sửa sản phẩm<?php
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_18121054935ca0254f3c2781_87317127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18121054935ca0254f3c2781_87317127',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<style>
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>

<div class="container" style="margin-top: 50px">
  <form autocomplete="off" action="" method="post">
  <div class="autocomplete" style="width:300px;">
    <input id="myInput" type="text" name="ten_sach_auto" value="<?php echo $_smarty_tpl->tpl_vars['sach_auto']->value;?>
" placeholder="Tên Sách">
  </div>
  <input type="submit" name="submit">
</form>


  <form action="" method="post">
    <label for="ten_sach">Tên sách</label>
    <input  class="form-control" type="text" id="ten_sach" name="ten_sach" placeholder="Tên sách" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_sach'];?>
">

    <label for="ten_sach_url">Tên sách URL</label>
    <input class="form-control" type="text" id="ten_sach_url" name="ten_sach_url" placeholder="Tên sách URL" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_sach_url'];?>
">
    
    <label for="id_tac_gia">Tác giả</label>
    <select class="form-control" id="id_tac_gia" name="id_tac_gia" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tac_gia']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_tac_gia;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
 <!-- (2): textarea sẽ được thay thế bởi CKEditor -->
      <label for="gioi_thieu">Giới Thiệu</label>
       <textarea class="form-control"  id="gioi_thieu" name="editor1" cols="80" rows="40"><?php echo $_smarty_tpl->tpl_vars['data']->value['gioi_thieu'];?>
    
       </textarea>
       
      <label for="doc_thu">Đọc thử</label>
       <textarea class="form-control"  id="doc_thu" name="doc_thu"><?php echo $_smarty_tpl->tpl_vars['data']->value['doc_thu'];?>
</textarea>
  
    <label for="id_loai_sach">Loại sách</label>
    <select class="form-control" id="id_loai_sach" name="id_loai_sach" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['loai_sach']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_loai_sach;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="id_nha_xuat_ban">Nhà Xuất Bản</label>
    <select class="form-control" id="id_nha_xuat_ban" name="id_nha_xuat_ban" >
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nxb']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value->ten_nha_xuat_ban;?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label for="so_trang">Số trang</label>
    <input class="form-control" type="text" id="so_trang" name="so_trang" placeholder="Số trang" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['so_trang'];?>
">

    <label for="ngay_xuat_ban">Ngày xuất bản</label>
    <input class="form-control" type="text" id="ngay_xuat_ban" name="ngay_xuat_ban" placeholder="Ngày xuất bản" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ngay_xuat_ban'];?>
">
    
    
    <label for="kich_thuoc">Kích thước</label>
    <input class="form-control" type="text" id="kich_thuoc" name="kich_thuoc" placeholder="Kích thước" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['kich_thuoc'];?>
">

<label for="trong_luong">Trọng Lượng</label>
    <input class="form-control" type="text" id="trong_luong" name="trong_luong" placeholder="Trọng Lượng"
    value="<?php echo $_smarty_tpl->tpl_vars['data']->value['trong_luong'];?>
">

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['hinh'];?>
" name="hinh" class="custom-file-input form-control" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Chọn hình</label>
  </div>

  </label>
</div>


  <label for="don_gia">Đơn giá</label>
    <input class="form-control" type="text" id="don_gia" name="don_gia" placeholder="Đơn giá" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
">

  <label for="gia_bia">Giá bìa</label>
    <input class="form-control" type="text" id="gia_bia" name="gia_bia" placeholder="Giá bìa" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['gia_bia'];?>
">

  <button type="submit" name="submit" class="btn btn-success btn-block">Sửa</button>
 
  </form>
  <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_7320338255ca0254f3fd119_92257859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7320338255ca0254f3fd119_92257859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo '<script'; ?>
>
    CKEDITOR.replace( 'editor1' );
  <?php echo '</script'; ?>
>   
 <?php echo '<script'; ?>
>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
var name_sach=['Diary Of A Wimpy Kids T9 - Paperback', 'Harry Potter 7 Volume ChildrenS Paperback Boxed Set', 'Diary Of A Wimpy Kid: Old School (Paperback)', 'Diary Of A Wimpy Kid Box Of Books 1 - 10', 'The Read It Yourself With Ladybird Princess And the Frog', 'The Tale of Jemima Puddle - Duck', 'Read It Yourself With Ladybird Superhero Max', 'Read It Yourself the Gingerbread Man', 'Tình Yêu Cuồng Nhiệt', 'Vùng Trời Hư Cấu', 'Truyện Trạng Lợn', 'Truyện Trạng Quỳnh', 'Truyện Tranh Tiếu Lâm Việt Nam (Tập 1)', 'Truyện Tranh Tiếu Lâm Việt Nam (Tập 2)', 'Những Chấn Thương Tâm Lý Hiện Đại', 'Danh Tác Văn Học Việt Nam - Bỉ Vỏ', 'Danh Tác Văn Học Việt Nam - Hà Nội Băm Sáu Phố Phường', 'Con Chó Nhỏ Mang Giỏ Hoa Hồng (Phiên Bản Đặc Biệt - Bìa Cứng)', 'Con Chó Nhỏ Mang Giỏ Hoa Hồng (Bìa Mềm)', 'Pegasus - Cuộc Chiến Bảo Vệ Xứ Olympus', 'Nữ Hoàng Sắt (Phần 3 Series Thế Giới Của Tiên Sắt)', 'Thiếu Nữ Sắt (Phần 2 Series Thế Giới Của Tiên Sắt)', 'Vua Sắt (Phần 1 Series Thế Giới Của Tiên Sắt)', 'Thiên Sư Chấp Vị (Từ Tập 3 Đến Tập 7) - Phiên bản tặng kèm quà tặng', 'Thiên Sư Chấp Vị - Quỷ Ức Tập 2', 'Thiên Sư Chấp Vị - Ly Hồn (Tập 1)', 'Hoàng Tử Kim Khí - Phần 2 Series Quân Đoàn Hủy Diệt', 'Lửa Thiên Đàng (Phần 6 Series Vũ Khí Bóng Đêm)', 'Series Vũ Khí Bóng Đêm (Phần 1 - 4)', 'Series Vũ khí Bóng Đêm - Phần 5: Linh Hồn Lạc', 'Series Quân Đoàn Hủy Diệt - Phần 1: Dây Chuyền Thiên Sứ', 'Series Vũ Khí Bóng Đêm - Phần 3: Thành Phố Pha Lê (Tái Bản 2014)', 'Series Vũ Khí Bóng Đêm - Phần 4: Thiên Thần Sa Ngã', 'Series Vũ Khí Bóng Đêm - Phần 1: Thành Phố Xương', 'Series Vũ Khí Bóng Đêm - Phần 2: Thành Phố Tro Tàn', 'Đến Phủ Khai Phong Làm Nhân Viên Công Vụ - Tập 2 (Tái Bản)', 'Đến Phủ Khai Phong Làm Nhân Viên Công Vụ (Tập 4B)', 'Đến Phủ Khai Phong Làm Nhân Viên Công Vụ (Tập 1) - Tái Bản', 'Đến Phủ Khai Phong Làm Nhân Viên Công Vụ (Tập 4A)', 'Ma Thổi Đèn: Mê Động Long Lĩnh (Tái Bản 2015)', 'Ma Thổi Đèn: Thành Cổ Tinh Tuyệt (Tái Bản 2014)', 'Ma Thổi Đèn: Thần Cung Côn Luân (Tái Bản 2014)', 'Ghế', 'Chia Sẻ (Đối Thoại 2)', 'Mắt Sáng, Lòng Trong, Bút Sắc', 'Nể Và Né', 'Ô, Dù, Lọng', 'Thật Hay Giả - True Or False', 'Động Vật Vùng Cực (Tủ Sách Thế Giới Động Vật) - Tái Bản', 'Động Vật Cảnh (Tủ Sách Thế Giới Động Vật) - Tái Bản', '70 Năm Thành Lập Nước - Cách Mạng Tháng Tám Qua Tư Liệu Ảnh', '70 Năm Thành Lập Nước - Việt Nam Trong Lòng Bạn Bè Quốc Tế', '70 Năm Thành Lập Nước - Con Đường Thiên Lý', 'Việt Nam Những Sự Kiện Lịch Sử Nổi Bật (1945 - 1975)', '70 Năm Thành Lập Nước - 70 Năm Mùa Thu Cách Mạng', '70 Năm Thành Lập Nước - Lịch Sử Báo Chí Cách Mạng Việt Nam', '55 Cách Để Trở Thành Người Giỏi Giao Tiếp', '55 Cách Để Tranh Luận Hiệu Quả', '55 Cách Để Tự Tin', '55 Cách Để Tôn Trọng Người Khác', '55 Cách Để Kết Bạn', 'Đời Thay Đổi Khi Chúng Ta Thay Đổi - Tập 2 (Tái Bản)', 'Đời Thay Đổi Khi Chúng Ta Thay Đổi (Tập 4) (Tái Bản)', 'Đời Thay Đổi Khi Chúng Ta Thay Đổi - Tập 5 (Tái Bản)', 'Cảm Nhận Thế Nào, Đời Trao Thế Đó', 'Đời Thay Đổi Khi Chúng Ta Thay Đổi (Tập 3)', 'Đời Thay Đổi Khi Chúng Ta Thay Đổi (Tập 1)', 'Đắc Nhân Tâm - Thuật Đắc Nhân Tâm Dụng Nhân (Tái Bản 2015)', 'Sống Đời Hạnh Phúc - Khắc Phục Lo Âu Để Vui Sống', 'Quẳng Gánh Lo Đi - Vui Sống Trong Mọi Hoàn Cảnh', 'Đắc Nhân Tâm (Phiên Bản Bìa Cứng Đặc Biệt 2015)', 'Vui Sống Và Làm Việc (Tái Bản)', 'Thuật Hùng Biện - Tăng Khả Năng Nói Trước Đám Đông', 'Combo Doraemon Plus (Trọn Bộ 6 Tập) - Phiên Bản Bìa Gập', 'Doraemon Theo Chủ Đề - Tập 5 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 4 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 2 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 8 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 1 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 7 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 10 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 6 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 3 (Tái Bản 2015)', 'Doraemon Theo Chủ Đề - Tập 9 (Tái Bản 2015)', 'Thiếu Niên Thời Đại Mới - Những Ngày Tết Ta', 'Thiếu Niên Thời Đại Mới - Những Ngày Tết Tây', 'Combo Sài Gòn - Chuyện Đời Của Phố (Trọn Bộ 3 Quyển)', 'Phật Pháp Vấn Đáp (Tập 1)', 'Phật Pháp Vấn Đáp (Tập 2)', 'Thiền Sư Khương Tăng Hội', 'Đức Phật Và Phật Pháp'];
/*initiate the autocomplete function on the "myInput" element, and pass along the name sach array as possible autocomplete values:*/
autocomplete(document.getElementById("myInput"), name_sach);
<?php echo '</script'; ?>
>
 <?php
}
}
/* {/block 'script'} */
}
