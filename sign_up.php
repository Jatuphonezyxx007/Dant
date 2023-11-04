<?php
session_start(); //รู้ว่าใครเป็นคนล็อคอิน จะโดนทำลายตอนเราออกจากระบบต้องเข้าระบบใหม่
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		 <title>Dant.co.th - ช้อปปิ้งออนไลน์ลดสูงสุด 50 % ทุกวัน</title>

		 <link rel="icon" href="https://i.ibb.co/nnr5ppn/LOGO.png" />
 
 		<!-- Google font -->
 		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		 <link rel="preconnect" href="https://fonts.googleapis.com">
		 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		 <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai&display=swap" rel="stylesheet">
 

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<script type="text/javascript">
		$(function () {
			$('#datetimepicker1').datetimepicker();
		});
		</script>



    </head>
	<body>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> บัญชีของฉัน</a></li>
						<li><a href="./admin/src/html/index.php"><i class="fa fa-lock"></i> ADMIN</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="#" class="logo">
									<img src="img/DANT.png" alt="icon" width="250px">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form method="post" action="store1.php">
									<select class="input-select" name="select">
										<option value="0">ทั้งหมด</option>
										<option value="1">คอมพิวเตอร์</option>
										<option value="2">ซีพียู</option>
										<option value="3">การ์ดจอ</option>
										<option value="4">แรม</option>
										<option value="6">พาวเวอร์ซัพพลาย</option>
										<option value="7">เมาส์</option>
										<option value="8">คีย์บอร์ด</option>
										<option value="9">หูฟัง</option>
										<option value="10">หน้าจอ</option>
										<option value="11">โน๊ตบุ๊ค</option>
									</select>
									<input class="input" name="src" placeholder="ค้นหาสินค้าที่ต้องการ ...">
									<button class="search-btn" type="submit" name="Submit">ค้นหา</button>
								</form>

								<?php
								include("connectdb.php");
								@$src = $_POST['src'];
								$sql = "SELECT * FROM `products`  WHERE (`name` LIKE '%{$src}%' OR `detail` LIKE '%{$src}%') ORDER BY `products`.`type` ASC";

								$rs = mysqli_query($conn, $sql);
								while ($data = mysqli_fetch_array($rs)){
									?>   

							</div>
						</div>
						<?php
						}
						mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
						?> 
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
								<!-- Wishlist -->
								<!-- <div>
									<a href="#">
										<i class="fa fa-heart-o"></i>
										<span>Your Wishlist</span>
										<div class="qty">2</div>
									</a>
								</div> -->
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									<a class="dropdown-toggle" href="checkout.php">
										<i class="fa fa-shopping-cart"></i>
										<span>รถเข็น</span>
									</a>
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								<div class="menu-toggle">
									<a href="#">
										<i class="fa fa-bars"></i>
										<span>Menu</span>
									</a>
								</div>
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.php">หน้าหลัก</a></li>
						<li><a href="store_pop.php">ยอดนิยม</a></li>
						<li><a href="store_com.php">คอมพิวเตอร์</a></li>
						<li><a href="store_laptop.php">โน๊ตบุ๊ค</a></li>
						<li><a href="store_mouse.php">เมาส์</a></li>
						<li><a href="store_keyboard.php">คีย์บอร์ด</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->


		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="col-md-3">
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">สมัครบัญชี</h3> <br><br>
							<h6 class="sub-title">ยินดีต้อนรับลูกค้าทุกท่านเข้าสู่ครอบครัวของเรา Dant</h6>
						</div>
						<form method="post" action="" enctype="multipart/form-data">
							<input type="text" class="form-control" name="c_name" placeholder="ชื่อ - นามสกุล" autofocus><br>
							<input type="tel" class="form-control"name="c_tel"placeholder="เบอร์โทร" maxlength="10"><br>
							<input type="email" class="form-control" name="c_email" placeholder="อีเมล์"><br>
							<input type="password" class="form-control"name="c_pwd"placeholder="รหัสผ่าน"><br>

							<button class="primary-btn order-submit"name="submit">สมัครสมาชิก</button>
						<!-- <a href="#" class="primary-btn order-submit" name="submit">สมัครสมาชิก</a> -->
						</form>

						<?php
						if(isset($_POST['submit'])){
							include("connectdb.php");


							// รับค่าข้อมูลที่กรอกมา
							$name = $_POST['c_name'];
							$phone = $_POST['c_tel'];
							$email = $_POST['c_email']; 
							$password = $_POST['c_pwd'];

							// เข้ารหัสรหัสผ่านด้วยฟังก์ชัน bcrypt
							// $mem_pwd = password_hash($_POST['mem_pwd'], PASSWORD_DEFAULT);

							$sql = "INSERT INTO `member` (`mem_id`, `mem_name`, `mem_email`, `mem_pwd`, `mem_phone`) VALUES (Null,'{$_POST['c_name']}','{$_POST['c_email']}', '$mem_pwd', '{$_POST['c_tel']}');";
							mysqli_query($conn, $sql) or die ("ไม่สามารถสมัครบัญชีได้");

							echo"<script>";
							echo"alert ('สมัครสมาชิกเรียบร้อยแล้ว');";
							echo"window.location='index.php';";
							echo"</script>";
						}
						?>

					</div>

	

<!-- <script>
function checkPassword() {
	 // รับค่ารหัสผ่านจาก input ทั้งสองช่อง
	const password = document.querySelector("input[name='c_pwd']").value;
	const confirmPassword = document.querySelector("input[name='con_pwd']").value;
	// เปรียบเทียบค่าทั้งสองช่อง
	if (password === confirmPassword) {
		// รหัสผ่านตรงกัน
		return true;
	} else {
		// รหัสผ่านไม่ตรงกัน
		return false;
	}
}
// เพิ่ม event listener ให้กับ input type="submit"
document.querySelector("input[type='submit']").addEventListener("click", function() {
	// ตรวจสอบว่ารหัสผ่านตรงกันหรือไม่
	if (!checkPassword()) {
		// รหัสผ่านไม่ตรงกัน แสดงข้อความแจ้งเตือน
		alert("รหัสผ่านไม่ตรงกัน");
		return false;
    }
});
</script> -->

					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- LINE FOOTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
			</div>
			<!-- /container -->
		</div>
		<!-- /LINE FOOTER -->



		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<img src="img/DANT.png" alt="" width="200px"><br>
								<br>
								<p>ช้อปปิ้งสินค้าไอทีออนไลน์ 24 ชั่วโมง</p>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">About Us</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categories</h3>
								<ul class="footer-links">
									<li><a href="#">Hot deals</a></li>
									<li><a href="#">Laptops</a></li>
									<li><a href="#">Smartphones</a></li>
									<li><a href="#">Cameras</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Information</h3>
								<ul class="footer-links">
									<li><a href="#">About Us</a></li>
									<li><a href="#">Contact Us</a></li>
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Orders and Returns</a></li>
									<li><a href="#">Terms & Conditions</a></li>
								</ul>
							</div>
						</div>

						<!-- <div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Service</h3>
								<ul class="footer-links">
									<li><a href="#">My Account</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">Wishlist</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div> -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
		</footer>
		<!-- /FOOTER -->





		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
