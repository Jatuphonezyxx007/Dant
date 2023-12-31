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
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>


		<style>
			.truncate {
				white-space: nowrap;         /* Prevent text from wrapping to the next line */
				overflow: hidden;            /* Hide the overflowed text */
				text-overflow: ellipsis;     /* Display an ellipsis (...) for the truncated text */
				width: 200px;                /* Adjust the width as needed */
			}
		</style>



		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-right">
						<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
						<li><a href="sign_in.php"><i class="fa fa-user-o"></i> บัญชีของฉัน</a>
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
									<img src="admin/src/assets/images/logos/dant.png" alt="icon" width="250px">
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
									<input class="input" name="src" placeholder="ค้นหาสินค้าที่ต้องการ ..." autofocus>
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
		<a href="store_com.php"><img src="./admin/src/assets/images/img_board/1.jpg" width="100%"></a>

			<!-- container -->
			<div class="container">
				<!-- row -->
				

				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="admin/src/assets/images/img_board/ComputerCollection.jpg" alt="" height="250">
							</div>
							<div class="shop-body">
								<h3>Computer<br>Collection</h3>
								<a href="store_com.php" class="cta-btn">สั่งซื้อเลย <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="admin/src/assets/images/img_board/LaptopCollection.jpg" alt="" height="250">
							</div>
							<div class="shop-body">
								<h3>Laptops<br>Collection</h3>
								<a href="store_laptop.php" class="cta-btn">สั่งซื้อเลย <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="admin/src/assets/images/img_board/AssCollection.png" alt="" height="250">
							</div>
							<div class="shop-body">
								<h3>Accessories<br>Collection</h3>
								<a href="store1.php" class="cta-btn">สั่งซื้อเลย <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">



					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">สินค้าขายดียอดนิยม</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<!-- <li class="active"><a data-toggle="tab" href="store1.php">ดูทั้งหมด</a></li> -->
									<!-- <li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li> -->
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<!-- <div class="row"> -->
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">

										<!-- product -->


										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 1";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->


										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 144";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->


										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 109";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->


										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 142";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 139";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->


										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 74";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 27";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->


										

									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>




								<!-- /tab -->
						</div>
					</div>

						
					<!-- Products tab & slick -->
		</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<a href="store_laptop.php"><img src="./admin/src/assets/images/img_board/2.jpg" width="100%"></a>
		<!-- HOT DEAL SECTION -->
		<!-- <div id="hot-deal" class="section"> -->
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- row -->
				<!-- <div class="row">
					<div class="col-md-12">
						<div class="hot-deal"> -->
							<!-- <ul class="hot-deal-countdown">
								<li>
									<div>
										<h3>02</h3>
										<span>Days</span>
									</div>
								</li>
								<li>
									<div>
										<h3>10</h3>
										<span>Hours</span>
									</div>
								</li>
								<li>
									<div>
										<h3>34</h3>
										<span>Mins</span>
									</div>
								</li>
								<li>
									<div>
										<h3>60</h3>
										<span>Secs</span>
									</div>
								</li>
							</ul> -->
							<!-- <h2 class="text-uppercase">hot deal this week</h2>
							<p>New Collection Up to 50% OFF</p>
							<a class="primary-btn cta-btn" href="#">Shop now</a>
						</div>
					</div>
				</div> -->
				<!-- /row -->
			<!-- </div> -->
			<!-- /container -->
		<!-- </div> -->
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">รวมการ์ดจอขายดี !</h3>
							<!-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab2">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab2">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab2">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab2">Accessories</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">

										<!-- product -->
										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 27";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 29";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 34";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 31";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
										<?php
										include("connectdb.php");
										$sql = "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE p.id = 38";
											$rs = mysqli_query($conn, $sql);
											while ($data = mysqli_fetch_array($rs)){
											?>  
											<a href="product.html">
												<div class="product-img">
												<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="250">
												</div>
											</a>
											<div class="product-body">
												<p class="product-category"><?=$data['type_name'];?></p>
												<h3 class="product-name truncate"><a href="product.php?id=<?=$data['id'];?>"><?=$data['name'];?></a></h3>
												<h4 class="product-price">฿ <?= number_format($data['price'], );?></h4>
												<div class="product-btn">
												</div>
											</div>
											<?php
											}
											mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
											?> 
											</div>
										<!-- /product -->

									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
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
		<!-- <script src="js/bootstrap.min.js"></script> -->
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> -->

	</body>
</html>
