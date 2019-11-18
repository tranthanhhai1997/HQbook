{extends file='layouts/master.tpl'}

{block name='title'}HQBook{/block}
{block name='content'}

        <!-- header 4 -->
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="block-title" >
                    <div id="ves-verticalmenu">
                        <span style="color: #fff">Danh Mục</span>   
                    </div>
                    
                    <div class="orange-left">
                        <ul class="nav first left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Trong Nước</span>
                                <div class="dropdown-content dropdown-menu">
                                  <div class='row'>
                                     {foreach from=$sach_trong_nuoc item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                     
                                     {/foreach}
                                  </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav  left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Truyện - Tiểu Thuyết</span>
                                <div class="dropdown-content dropdown-menu">
                                   <div class='row'>
                                     {foreach from=$truyen_tieu_thuyet item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                    
                                     {/foreach}
                                  </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Kinh Doanh</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     {foreach from=$sach_kinh_doanh item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                     
                                     {/foreach}
                                  </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Tuyển Tập</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     {foreach from=$sach_trong_nuoc item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                     
                                     {/foreach}
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Theo NXB</span>
                                <div class="dropdown-content dropdown-menu">
                                   <div class='row'>
                                     {foreach from=$sach_nxb item=nxb}
                                       <div class='col-6'>
                                        <a href='{path}nxb/{$nxb->ten_nha_xuat_ban_url}-{$nxb->id}'>{$nxb->ten_nha_xuat_ban}</a>
                                        </div>                                     
                                     {/foreach}
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Theo Tác Giả</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     {foreach from=$sach_tac_gia item=tac_gia}
                                       <div class='col-6'>
                                        <a href='{path}tac-gia/{$tac_gia->ten_tac_gia_url}-{$tac_gia->id}'>{$tac_gia->ten_tac_gia}</a>
                                        </div>                                     
                                     {/foreach}
                                    </div>
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Top 100 Best Sellers</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     {foreach from=$best_seller item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                     
                                     {/foreach}
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Sách Cho Thiếu Nhi</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     {foreach from=$sach_thieu_nhi item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                     
                                     {/foreach}
                                    </div>
                                </div>  
                            </li>
                        </ul>
                        
                        <ul class="nav left">
                            <li class="nav-item dropdown dropbtn dropright">
                                <span>Kỹ Năng Sống</span>
                                <div class="dropdown-content dropdown-menu">
                                    <div class='row'>
                                     {foreach from=$ky_nang_song item=sach}
                                       <div class='col-6'>
                                        <a href='{path}sach/{$sach->ten_loai_sach_url}-{$sach->id}'>{$sach->ten_loai_sach}</a>
                                        </div>                                     
                                     {/foreach}
                                    </div>
                                </div>  
                            </li>
                        </ul>
                    </div>
                </div>  
            </div>
            
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="orange"><span>ĐỒ ÁN BÁN SÁCH</span></div>
                    <div id="demo" class="carousel slide" data-ride="carousel">

                      <!-- Indicators -->
                      <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                      </ul>
                      
                      <!-- The slideshow -->
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{$path}public/img/slide/1.jpg" >
                        </div>
                        <div class="carousel-item">
                          <img src="{$path}public/img/slide/2.jpg" >
                        </div>
                        <div class="carousel-item">
                          <img src="{$path}public/img/slide/3.jpg">
                        </div>
                      </div>
                      
                      <!-- Left and right controls -->
                      <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                      </a>
                      <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                      </a>
                    </div>
            </div>
        </div>
    </div>


        <!-- khuyen mai -->
    <div class="container ">
        <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <div class="banner-home-inner ">
                                    <a href="">
                                                                    <img src="{$path}public/img/khuyenmai1.png" alt="">
                                                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6 banner-home-inner-mid">
                        <div class="banner-home-inner ">
                                    <a href="">
                                                                    <img src="{$path}public/img/khuyenmai2.png" alt="">
                                                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-3 col-md-3 col-xs-6">
                        <div class="banner-home-inner ">
                                    <a href="">
                                                                    <img src="{$path}public/img/khuyenmai3.png" alt="">
                                                            </a>
                        </div>
                    </div>              
        </div>
    </div>



    <!-- body-web -->
    <div class="container ">
        <div class="row " style="margin: 40px 31px 0 15px;">
            <div  class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <h2 style="color: #F7941E;">SÁCH NỔI NẬT TRONG TUẦN</h2>
                <div class="row slide-border">
                  {$i = 1}
                {foreach from=$sach_noi_bat item=value}
                  {if $i == 1}     
                     <div class=" carousel-item active">
                     <div class="row">
                      {elseif $i % 4 == 1}
                        <div class=" carousel-item">
                        <div class="row">
                        
                  {/if}
                    <div class="col-3 "  style="padding:15px; background-color:#E1D6C5;">
                      <img class="card-img-top img-sach"  src="{path}public/img/sach/{$value->hinh}" alt="{$value->ten_sach}" style="height: 50%">
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
                  
                  {if $i % 4 == 0}
                     </div>
                   </div>
                  {/if}
                  {$i = $i + 1}

                {/foreach}       
              </div>
              
        
          </div>
          <!----------------------->
          <div class="row">
            <div class="col-12">
                <div class="banner-home-inner">
                    <a href="{path}">
                   <img src="{path}public/img/free-ship.png" alt="">
                                            </a>
                </div>
            </div>
          </div>
       

        {* sach ban chay *}
        <div class="row " style="margin: 40px 0px 50px 0px;">
            <div  class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <h2 style="color: #F7941E;">SÁCH BÁN CHẠY NHẤT TRONG THÁNG</h2>
                <div class="row slide-border">
                  {$i = 1}
                {foreach from=$sach_ban_chay item=value}
                  {if $i == 1}     
                     <div class=" carousel-item active">
                     <div class="row">
                      {elseif $i % 4 == 1}
                        <div class=" carousel-item">
                        <div class="row">
                        
                  {/if}
                    <div class="col-3 "  style="padding:15px; background-color:#C2D8C0;">
                      <img class="card-img-top img-sach"  src="{path}public/img/sach/{$value->hinh}" alt="{$value->ten_sach}" style="height: 50%">
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
                  
                  {if $i % 4 == 0}
                     </div>
                   </div>
                  {/if}
                  {$i = $i + 1}

                {/foreach}       
              </div>
              
        
          </div>

 <!----------------------->
          <div class="row">
            <div class="col-12">
                <div class="banner-home-inner">
                    <a href="{path}">
                   <img src="{path}public/img/qua-tang.png" alt="">
                                            </a>
                </div>
            </div>
          </div>
        {* truyen tranh *}
        <div class="row" style="margin: 40px 0px 50px 0px;">
            <div  class="carousel slide " data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <h2 style="color: #F7941E;">SÁCH DOANH NHÂN 2019</h2>
                <div class="row slide-border">
                  {$i = 1}
                {foreach from=$truyen_tranh item=value}
                  {if $i == 1}     
                     <div class=" carousel-item active">
                     <div class="row">
                      {elseif $i % 4 == 1}
                        <div class=" carousel-item">
                        <div class="row">
                        
                  {/if}
                    <div class="col-3 "  style="padding:15px; background-color:#CCDEE1;">
                      <img class="card-img-top img-sach"  src="{path}public/img/sach/{$value->hinh}" alt="{$value->ten_sach}" style="height: 50%">
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
                  
                  {if $i % 4 == 0}
                     </div>
                   </div>
                  {/if}
                  {$i = $i + 1}

                {/foreach}       
              </div>
              
        
          </div>
        </div>
    </div>

{/block}


