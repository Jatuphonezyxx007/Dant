<?php
error_reporting(E_NOTICE);

	@session_start();
	include("connectdb.php");
	$sql = "select * from products where id ='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['sid'][$id] = $data['id'];
		$_SESSION['sname'][$id] = $data['name'];
		$_SESSION['sprice'][$id] = $data['price'];
		$_SESSION['sdetail'][$id] = $data['detail'];
		$_SESSION['spicture'][$id] = $data['img'];
		@$_SESSION['sitem'][$id]++;
	}
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
						<!-- <li><a href="#"><i class="fa fa-dollar"></i> USD</a></li> -->
						<li><a href="sign_up.php"><i class="fa fa-user-o"></i> บัญชีของฉัน</a></li>
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
									<button class="search-btn" name="Submit">ค้นหา</button>
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
										<!-- <div class="qty"></div> -->
									</a>
									<!-- <div class="cart-dropdown">
										<div class="cart-list">
											<div class="product-widget">
												<div class="product-img">
													<img src="./img/product01.png" alt="">
												</div> -->
												<!-- <div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
												</div> -->
												<!-- <button class="delete"><i class="fa fa-close"></i></button> -->
											<!-- </div> -->

											<!-- <div class="product-widget">
												<div class="product-img">
													<img src="./img/product02.png" alt="">
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">product name goes here</a></h3>
													<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
												</div>
												<button class="delete"><i class="fa fa-close"></i></button>
											</div> -->
										<!-- </div> -->
										<!-- <div class="cart-summary">
											<small>3 Item(s) selected</small>
											<h5>SUBTOTAL: $2940.00</h5>
										</div> -->
										<!-- <div class="cart-btns"> -->
											<!-- <a href="#"></a> -->
											<!-- <a href="#">ดูรถเข็นของฉัน  <i class="fa fa-arrow-circle-right"></i></a>
										</div> -->
									<!-- </div> -->
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
						<li class="active"><a href="index.html">หน้าหลัก</a></li>
						<li><a href="#">ยอดนิยม</a></li>
						<li><a href="#">คอมพิวเตอร์</a></li>
						<li><a href="#">โน๊ตบุ๊ค</a></li>
						<li><a href="#">เมาส์</a></li>
						<li><a href="#">คีย์บอร์ด</a></li>
						<li><a href="#">อุปกรณ์เสริม</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<!-- <div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div> -->
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<div class="section-title text-center">
					<h3 class="title">รายการคำสั่งซื้อของฉัน</h3>
				</div>

				<!-- row -->
				<div class="row">

					<div class="col-md-1">
					</div>


					<table width="100%" class="table">
					<div  class="text-center">
						<tr>
							<th width="8%">รายการที่</th>
							<!-- <th width="19%">สินค้า</th> -->
							<th width="39%" class="pull-center">ชื่อสินค้า</th>
							<th width="14%" class="pull-center">ราคา/ชิ้น</th>
							<th width="16%" class="pull-center">จำนวน (ชิ้น)</th>
							<th width="14%">รวม</th>
							<th width="9%">&nbsp;</th>
						</tr>
					</div>
<?php
if(!empty($_SESSION['sid'])) {
	foreach($_SESSION['sid'] as $pid) {
		@$i++;
		$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
		@$total += $sum[$pid] ;
?>
	<tr>
		<td><div class="text-center"> <?=$i;?></div></td>
		<!-- <td><img src='./admin/src/assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>' height="100"></td> -->
		<!-- <td><img src="./admin/src/assets/images/imgs/<?=$_SESSION['spicture'][$pid];?>" width="120"></td> -->
		<td><?=$_SESSION['sname'][$pid];?></td>
		<td><?=number_format($_SESSION['sprice'][$pid],0);?></td>
		<td> <?=$_SESSION['sitem'][$pid];?></td>
		<td><?=number_format($sum[$pid],0);?></td>
		<td><a href="clear_product.php?id=<?=$pid;?>" class="btn btn-danger">ลบ</a></td>
	</tr>
	<?php } // end foreach ?>
	<tr>
		<td colspan="5" align="right"><strong>รวมทั้งสิ้น</strong> &nbsp; </td>
		<td><strong><?=number_format($total,0);?></strong></td>
		<td><strong>บาท</strong></td>
	</tr>
<?php 
} else {
?>
	<tr>
		<td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
	</tr>
<?php } // end if ?>
</table>




					<!-- Order Details -->
					<!-- <div class="col-md-10 order-details">
						<div class="section-title text-center">
							<h3 class="title">รายการคำสั่งซื้อของฉัน</h3>
						</div>
						<div class="order-summary">
							<div class="order-col">
								<div><strong>รายการ</strong></div>
								<div><strong>รวม</strong></div>
							</div>

							<?php
							if(!empty($_SESSION['sid'])) {
								foreach($_SESSION['sid'] as $pid) {
									@$i++;
									$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
									@$total += $sum[$pid] ;
									?>

							<div class="order-products">
								
								<div class="order-col">
									<div><?=$_SESSION['sname'][$pid];?></div>
									<div><?=number_format($_SESSION['sprice'][$pid],0);?></div>
								</div>
							</div>

							<?php } // end foreach ?>

							<div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total"><?=number_format($sum[$pid],0);?></strong></div>
							</div>
						</div>
						<a href="#" class="primary-btn order-submit">Place order</a>
					</div> -->
					<!-- /Order Details -->



<?php 
} else {
	?>
	<div class="section-title text-center">
		<h3 class="sub-title">ไม่มีสินค้าใด ๆ ในรถเข็น</h3>
	</div>

	<?php } // end if ?>
	</blockquote>
	

	<a href="store1.php" class="btn btn-info">เลือกสินค้าต่อ</a> 
	<a href="clear.php" class="btn btn-warning">ลบทั้งหมด</a> 
	<a href="payment.php" class="btn btn-danger">ชำระเงิน</a>

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
