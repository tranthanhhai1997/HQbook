{extends file='admin/master.tpl'}
{block name='title'}Đăng nhập{/block}
{block name='content'}
  <body>
    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="offset-3 col-md-4">
                <form class="form-signin" method="POST">
                    <img class="offset-4 col-4" src="{$path}public/img/icon-user.png" alt="" width="72" height="100">
                    <h1 style="margin-top: 30px" class="h3 mb-3 font-weight-normal">Vui Lòng Đăng Nhập</h1>
                    
                    <input type="text" id="tenDN" name="tenDN" class="form-control" value="{$tenDN}" placeholder="Tên tài khoản" required autofocus>
                   
                    <input type="password" id="matkhau" name="matkhau" value="{$matkhau}" class="form-control" placeholder="Mật Khẩu" required>
                    <div class="checkbox mb-3">
                        <label>
                        <input type="checkbox" value="remember-me"> Remember
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng Nhập</button>
                    {$err}
                </form>   
            </div>
        </div>
    </div>
    {/block}
    
  
    {block name='script'}{/block}
  </body>
</html>