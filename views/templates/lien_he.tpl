{extends file='layouts/master.tpl'}
{block name='title'}Danh Sách sản phẩm{/block}

{block name='content'}

<style>
.container-right {
  position: relative;
}

.image-right {
  display: block;
  width: 100%;
  height: auto;
}

.overlay-right {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #F7941E;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container-right:hover .overlay-right {
  width: 100%;
}

.text-right {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}


.container-left {
  position: relative;

}

.image-left {
  display: block;
  width: 100%;
  height: auto;
}

.overlay-left {
  position: absolute;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #F7941E;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container-left:hover .overlay-left {
  width: 100%;
  left: 0;
}

.text-left {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>
<body>


<div class="container">
	<div class="row"style="margin-top: 20px; padding-bottom: 20px">
		<div class="col" align="center">
			<h2>Thông tin tác giả</h2>
		</div>
</div>	
	<div class="row">
		<div class="col container-left">
		  <img src="{path}public/img/img_avatar1.jpg" alt="Avatar" class="image-left">
		  <div class="overlay-left">
		    <div class="text-left">
				<a class="text-left" href="https://www.facebook.com/tranthanhhai97" ">TRẦN THANH HẢI<br><br><br></a>
				<p>
					<br>Sinh Ngày: 05-05-1997<br><br>
				</p>
		    	<a class="text-left" href="mailto:tthai@alualpha.com?subject=feedback HQbook" "email me"><br>Email: tthai@alualpha.com</a>
		    </div>
		  </div>
		</div>
		{* <div class="col container-right">
		  <img src="{path}public/img/img_avatar2.jpg" alt="Avatar" class="image-right" >
		  <div class="overlay-right">
		    <div class="text-right">
				<a class="text-left" href="https://www.facebook.com/tranthanhhai97" ">VŨ DUY QUANG<br><br><br></a>
				<p>
					<br>Sinh Ngày: 15-07-1997<br><br>
				</p>
		    	<a class="text-left" href="mailto:vquang1571997@gmail.com?subject=feedback HQbook" "email me"><br>Email: vquang1571997@gmail.com</a>
		    </div>
		   </div>
		</div> *}
	</div>




 <div class="container" style="margin-top: 30px">
  <form action="/action_page.php" method="post">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Việt Nam</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

<div class="container">
	<div class="row">
		<div class="col">
			<h2 align="center">ĐỊA CHỈ GOOGLE MAP ĐẾN CỬA HÀNG</h2>
			<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31359.90326693314!2d106.59371640109381!3d10.735415024920519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d10.7229089!2d106.5986621!4m5!1s0x31752c2e9ad139b3%3A0x13d9a2153896cca0!2zNCwgMzYgUGjDuW5nIFTDoSBDaHUsIEFuIEzhuqFjIEEsIELDrG5oIFTDom4sIEjhu5MgQ2jDrSBNaW5oLCBWaeG7h3QgTmFt!3m2!1d10.755899!2d106.62105439999999!5e0!3m2!1svi!2s!4v1553068647977" width="1235" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>

 </body>
 {/block}