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
								<a href="index.php" class="logo">
									<img src="img/DANT.png" alt="icon" width="250px">
								</a>
							</div>
						</div>
						<!-- /LOGO -->


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
								<!-- <div class="dropdown">
									<a class="dropdown-toggle" href="checkout.php">
										<i class="fa fa-shopping-cart"></i>
										<span>รถเข็น</span>
									</a>
								</div> -->
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
						<li><a href="index.php">หน้าหลัก</a></li>
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

					<div class="col-md-4">
					
					</div>

					<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<!-- Order Details -->
					<div class="col-md-4 order-details">
						<div class="section-title text-center">
							<h3 class="title">เข้าสู่ระบบ</h3> <br><br>
							<h6 class="sub-title">ยินดีต้อนรับลูกค้าทุกท่านเข้าสู่ครอบครัวของเรา Dant</h6>
						</div>
						<form method="post" action="index.php" enctype="multipart/form-data">
							<input type="email" class="form-control" name="c_email" placeholder="อีเมล์"><br>
							<input type="password" class="form-control"name="c_pwd"placeholder="รหัสผ่าน"><br>
							
							<!-- <a href="#" class="primary-btn order-submit" name="submit">เข้าสู่ระบบ</a> -->
								<button class="primary-btn"name="submit">เข้าสู่ระบบ</button> <br><br><br>
								<a href="sign_up.php" > สมัครสมาชิก</a>


						</form>

					</div>
					
					

						<!-- // include("connectdb.php");
						// $sql = "SELECT * FROM `member` WHERE `mem_email`='{$_POST['c_email']}' AND `mem_pws`='".md5($_POST['c_pwc'])."' LIMIT 1 ";
						// $rs = mysqli_query($conn, $sql) or die ("select ไม่ได้");
						// $num = mysqli_num_rows($rs);
						// //var_dump($num); 
						// if($num>0){
						// 	$data = mysqli_fetch_array($rs);
						// 	$_SESSION['aid'] = $data['a_id'];
						// 	$_SESSION['aname'] = $data['a_name'];
						// 	echo "<script>";
						// 	echo "window.location='index2.php';";
						// 	echo "</script>";
						// } else {
						// 	echo "<script>";
						// 	echo "alert('Username หรือ Password ไม่ถูกต้อง');";
						// 	echo "</script>";
						// 	exit;
						}
}
?> -->


	


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
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->
		</footer>
		<!-- /FOOTER -->


		<?php
		include("connectdb.php");
		if(isset($_POST['submit'])){
			// ตรวจสอบว่าผู้ใช้กรอกข้อมูลครบถ้วนหรือไม่
			if(empty($_POST['c_email']) || empty($_POST['c_pwd'])){
    echo"<script>";
    echo"alert ('กรุณากรอกข้อมูลให้ครบถ้วน');";
    echo"window.location='index.php';";
    echo"</script>";
    }

    // ตรวจสอบชื่อผู้ใช้และรหัสผ่าน
    $sql = "SELECT * FROM `member` WHERE `c_email` = '{$_POST['mem_email']}' AND `c_pwd` = '{$_POST['mem_pwd']}';";
    $result = mysqli_query($conn, $sql);

    // หากพบข้อมูลผู้ใช้
    if(mysqli_num_rows($result) > 0){
      // ตั้งค่า session สำหรับผู้ใช้
    $row = mysqli_fetch_assoc($result);
    $_SESSION['mem_id'] = $row['mem_id'];
    $_SESSION['mem_name'] = $row['mem_name'];

      // แจ้งเตือนผู้ใช้ว่าเข้าสู่ระบบสำเร็จ
    echo"<script>";
    echo"alert ('เข้าสู่ระบบสำเร็จ');";
    echo"window.location='index2.php';";
    echo"</script>";
    }

    // หากไม่พบข้อมูลผู้ใช้
    else{
      // แจ้งเตือนผู้ใช้ว่าชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง
    echo"<script>";
    echo"alert ('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');";
    echo"window.location='sign_in.php';";
    echo"</script>";
    }
}
?>



		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
