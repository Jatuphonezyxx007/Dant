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
		<!-- HEADER -->
		<header>
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

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search">
								<form>
									<select class="input-select">
										<option value="0">ทั้งหมด</option>
										<option value="1">คอมพิวเตอร์</option>
										<option value="1">โน๊ตบุ๊ค</option>
										<option value="1">เมาส์</option>
										<option value="1">คีย์บอร์ด</option>
										<option value="1">ซีพียู</option>
										<option value="1">การ์ดจอ</option>
										<option value="1">เมนบอร์ด</option>
										<option value="1">แรม</option>
										<option value="1">พาวเวอร์ซัพพลาย</option>
										<option value="1">หูฟัง</option>
									</select>
									<input class="input" placeholder="ค้นหาสินค้าที่ต้องการ ...">
									<button class="search-btn">ค้นหา</button>
								</form>
							</div>
						</div>
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
						<li ><a href="index.php">หน้าหลัก</a></li>
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

				<?php
				include("connectdb.php");

				// $sql = "SELECT products , t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE '{$_GET['id']}'";
				$sql = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
				$rs = mysqli_query($conn, $sql,);
				$data = mysqli_fetch_array($rs); 
				?>

<!-- "SELECT p.*, t.t_name as type_name FROM products p INNER JOIN type t ON p.type = t.t_id WHERE '{$_GET['id']}'" -->

					<!-- Product main img -->
					<div class="col-md-5 col-md-push-2">
						<div id="product-main-img">
							<div class="product-preview">
							<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>'>
							
							</div>

							<!-- <div class="product-preview">
								<img src="./img/product03.png" alt="">
							</div> -->

							<!-- <div class="product-preview">
								<img src="./img/product06.png" alt="">
							</div> -->

							<!-- <div class="product-preview">
								<img src="./img/product08.png" alt="">
							</div> -->
						</div>
					</div>
					<!-- /Product main img -->

					<!-- Product thumb imgs -->
					<div class="col-md-2  col-md-pull-5">
						<div id="product-imgs">
							<div class="product-preview">
								<img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>'>
							</div>

							<!-- <div class="product-preview">
								<img src="./img/product03.png" alt="">
							</div> -->

							<!-- <div class="product-preview">
								<img src="./img/product06.png" alt="">
							</div> -->

							<!-- <div class="product-preview">
								<img src="./img/product08.png" alt="">
							</div> -->
						</div>
					</div>
					<!-- /Product thumb imgs -->

					<!-- Product details -->
					<div class="col-md-5">
						<div class="product-details">
							<h2 class="product-name"><?=$data['name'];?></h2>
							<div>
								<h3 class="product-price">฿ <?= number_format($data['price'], );?> 
							</div>
							<!-- <p><?=$data['detail'];?></p> -->
						<form method="post" action="">
							<div class="add-to-cart">
								<!-- <div class="qty-label">
									จำนวน
									<div class="input-number">
										<input class="text-center" type="number" value="1" minlength="5" name="qty">
									</div>
								</div> -->
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>
								<a href="checkout.php?id=<?=$data['id'];?>">เพิ่มใส่รถเข็น</button>
							</div>
						</form>
							<ul class="product-links">
								<!-- <li>หมวดหมู่ :</li> -->
								<li><a><?=$data['t_name'];?></a></li>
							</ul>

							<p><?=nl2br($data['detail']);?></p>
						</div>
					</div>
					<!-- /Product details -->

					<!-- Product tab -->
					<div class="col-md-12">
						<div id="product-tab">
							<!-- product tab nav -->
							<ul class="tab-nav">
								<!-- <li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>
								<li><a data-toggle="tab" href="#tab2">Details</a></li>
								<li><a data-toggle="tab" href="#tab3">Reviews (3)</a></li> -->
							</ul>
							<!-- /product tab nav -->


					<!-- /product tab -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- Section -->
		<!-- <div class="section"> -->
			<!-- container -->
			<!-- <div class="container"> -->
				<!-- row -->
				<!-- <div class="row"> -->

					<!-- <div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title">Related Products</h3>
						</div>
					</div> -->

					<!-- product -->
					<!-- <div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/product01.png" alt="">
								<div class="product-label">
									<span class="sale">-30%</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div> -->
					<!-- /product -->

					<!-- product -->
					<!-- <div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/product02.png" alt="">
								<div class="product-label">
									<span class="new">NEW</span>
								</div>
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								<div class="product-rating"> -->
									<!-- <i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i> -->
								<!-- </div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div> -->
					<!-- /product -->

					<!-- <div class="clearfix visible-sm visible-xs"></div> -->

					<!-- product -->
					<!-- <div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/product03.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								<div class="product-rating"> -->
									<!-- <i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o"></i> -->
								<!-- </div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div> -->
					<!-- /product -->

					<!-- product -->
					<!-- <div class="col-md-3 col-xs-6">
						<div class="product">
							<div class="product-img">
								<img src="./img/product04.png" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#">product name goes here</a></h3>
								<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
								<div class="product-rating">
								</div>
								<div class="product-btns">
									<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
									<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
									<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
								</div>
							</div>
							<div class="add-to-cart">
								<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
							</div>
						</div>
					</div> -->
					<!-- /product -->

				<!-- </div> -->
				<!-- /row -->
			<!-- </div> -->
			<!-- /container -->
		<!-- </div> -->
		<!-- /Section -->

		






		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>



	</body>
</html>
