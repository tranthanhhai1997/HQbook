<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="{path}/public/css/style.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

 <meta property="og:url"           content="{path}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="HQBook Trang Web Thương Mại Điện Tử Bán Sách Lớn Nhất Thế Giới" />
  <meta property="og:description"   content="HQBook Trang Web Thương Mại Điện Tử Bán Sách Lớn Nhất Thế Giới" />
  <meta property="og:image"         content="{path}public/img/logo.png" />
    <title>{block name='title'}
       <!-- top banner head 1-->
    
    {/block}</title>
  </head>

  <div class="top-banner-block">
            <p><img src="{path}public/img/banner-top.jpg" alt=""/></p>
    </div>


    <!-- header 2 -->
    <div class="container">
        <div class="row">
            <div class=" col-lg-5 col-md-5 col-sm-12 col-xs-12 header-left hidden-xs">
              <ul class="nav ">
                <li class="nav-item disabled">
                  <a class="nav-link" >info@HQBook.com &nbsp &nbsp | &nbsp  &nbsp 0399066199</a>
                </li> 
              </ul>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 header-right hidden-xs">
                <ul class="nav header-right">
                    <li class="nav-item ">
                        {if !isset($smarty.session.fullname)}
                            <a href="{$path}tao-tai-khoan/" class="nav-link" >Tạo tài khoản</a>
                        {/if}  
                      
                    </li> 
                    <li class="nav-item ">
                        {if isset($smarty.session.fullname)}
                            <a href="{$path}thong-tin-user" class="nav-link">Xin Chào {$smarty.session.fullname}</a>
                            {elseif !isset($smarty.session.fullname)}
                            <a href="{path}dang-nhap" class="nav-link" >Đăng Nhập</a>
                        {/if}        
                    </li> 
                    <li class="nav-item ">
                      <a href="{path}lien-he/" class="nav-link" >Liên Hệ</a>
                    </li> 
                </ul>
            </div>
        </div>
    </div>   

        {block name='content'}   {/block}
            
     
    
  
    {block name='script'}{/block}
 
</body>
</html>
   
