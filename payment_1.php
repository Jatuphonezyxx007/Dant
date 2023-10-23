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
					<form method="post" action="record.php">
						<div class="col-md-7">
							<div class="billing-details">
								<div class="section-title">
									<h3 class="title">ที่อยู่ในการจัดส่ง</h3><br><br>
									<h5 class="sub-title">กรุณากรอกรายละเอียดด้านล่างเพื่อเสร็จสิ้นการสั่งซื้อสินค้า</h5>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="fullname" placeholder="ชื่อ - นามสกุล">
								</div>
								<div class="form-group">
									<input class="input" type="email" name="email" placeholder="อีเมล์">
								</div>
								<div class="form-group">
									<textarea class="input" name="ads" placeholder="ที่อยู่"></textarea>
								</div>
								<div class="form-group">
									<input class="input" type="text" name="zip-code" placeholder="รหัสไปรษณีย์">
								</div>
								<div class="form-group">
									<input class="input" type="tel" name="tel" placeholder="เบอร์โทร" maxlength="10">
								</div>
							</div>
						</div>

						<div class="col-md-5 order-details">
							<div class="section-title text-center">
								<h3 class="title">สินค้าของคุณ</h3>
							</div>

						<div class="order-summary">
							<div class="order-col">
								<div><strong>รายการ</strong></div>
								<div><strong>รวม</strong></div>
							</div>

							<!-- <?php
							if(!empty($_SESSION['sid'])) {
							foreach($_SESSION['sid'] as $pid) {
								@$i++;
								$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
								@$total += $sum[$pid] ;
								?>
								<div class="order-products">
									<div class="order-col">
										<div><?=$_SESSION['sitem'][$pid];?>x <?=$_SESSION['sname'][$pid];?></div>
										<div><?=number_format($sum[$pid],0);?></div>
									</div>
								</div>
								<?php } // end foreach ?>
								<?php 
								} else {
									?>
									<?php } // end if ?> -->






									<?php
									include("connectdb.php");
									// $sql = "SELECT MAX(oid) AS oid FROM order";
									$sql = "SELECT  *  FROM  orders_detail INNER JOIN products ON orders_detail.pid = products.id WHERE orders_detail.oid = '".$_GET['a']."'  ";
									$rs = mysqli_query($conn, $sql) ;
									$i = 0;
									while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
										$i++;
										$sum = $data['price'] * $data['item'] ;
										@$total += $sum;
										?>
										
										<div class="order-products">
											<div class="order-col">
												<div><?=$data['item'];?> x <?=$data['name'];?></div>
												<div><?=number_format($sum,0);?></div>
											</div>
										</div>



										<!-- <tr>
											<td class="text-center"><a href="detail.php?a=<?=$data['oid'];?>">รายละเอียด</a></td>
											<td class="text-center"><?=$data['oid'];?></td>
											<td class="text-center"><?=$data['odate'];?></td>
											<td class="text-center"><?=number_format($data['ototal'],0);?> บาท</td>
											<td class="text-center"><ชื่อ></td>
											<td><a href="clear_product.php?id=<?=$pid;?>" class="btn btn-danger">ลบ</a></td>
										</tr> -->


									<div class="order-col">
									<div>ค่าจัดส่ง</div>
									<div><strong>ฟรี</strong></div>
								</div>

									<div class="order-col">
									<div><strong>ยอดรวม</strong></div>
									<div><strong class="order-total"><?=number_format($total,0);?></strong></div>
								</div>
							</div>


								<div class="payment-method">
									<div class="input-radio">
										<input type="radio" name="payment" id="payment-1">
										<label for="payment-1">
											<span></span>
											โอนเงินผ่านธนาคาร
										</label>
										<div class="caption">
											<p>ชื่อบัญชี : บริษัท Dant จำกัด </p>
											<p>ธนาคาร : กสิกรไทย</p>
											<p>สาขา : สุขุมวิท 107</p>
											<p>เลขบัญชี : 097-3-55636-3</p><br>
											<!-- <div class="mb-3"> -->
											<label for="img_product" class="form-label">แจ้งชำระเงิน</label>
											<input class="form-control" name="slip" type="file" required><br>
											<p>สำคัญ : สามารถอัพโหลดรูปภาพเฉพาะไฟล์ png หรือ jpg เท่านั้น</p>

											<!-- <input class="form-control" name="no_order" placeholder="เลขรายการสั่งซื้อ"><br> -->
										</div>
									</div>
								</div>
								<div class="input-radio">
									<input type="radio" name="payment" id="payment-2">
									<label for="payment-2">
										<span></span>
										เก็บเงินปลายทาง
									</label>
									<div class="caption">
										<p>ลูกค้าจะชำระเงินก็ต่อเมื่อพัสดุที่สั่งไปจัดส่งถึงมือลูกค้าแล้ว !</p>
									</div>
								</div>
							</div>
					</form>
					
					<!-- <?php  
				}  ?> -->



						<a href="record.php" class="primary-btn order-submit" name="submit">ยืนยันการชำระสินค้า</a>
					</div>



					



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

					</blockquote>
					
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



		<div class="container-fluid">
        <div class="card">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-4">รายละเอียดคำสั่งซื้อ</h3>

            <h5>รายละเอียดใบสั่งซื้อ เลขที่ <?=$_GET['a'];?></h5><br>
            <table width="100%" class="table table-striped table-sm-gap">
            <tr>
                <td width="5%" class="text-center">ที่</td>
                <td width="5%" class="text-center">รหัสสินค้า</td>
                <td width="40%" class="text-center">สินค้า</td>
                <td width="10%" class="text-center">จำนวน</td>
                <td width="20%" class="text-center">ราคา/ชิ้น</td>
                <td width="20%" class="text-center">รวม (บาท)</td>
            </tr>
        
            <?php
            include("connectdb.php");
			$sql = "SELECT MAX(oid) AS oid FROM order";
            $rs = mysqli_query($conn, $sql) ;
            $i = 0;
            while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                $i++;
                $sum = $data['price'] * $data['item'] ;
                @$total += $sum;
                ?>
                <tr>
                <td><?=$i;?></td>
                <td class="text-center"><?=@$data['id'];?></td>
                <td><?=$data['name'];?></td>
                <td class="text-center"><?=$data['item'];?></td>
                <td class="text-center"><?=number_format($data['price'],0);?></td>
                <td class="text-center"><?=number_format($sum,0);?></td>
                </tr>
                
                <?php } ?>
                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="text-center">ราคารวม</td>
                <td class="text-center"><?=number_format($total,0);?></td>
                </tr>
            </table>

            <!-- <p class="mb-0">This is a sample page </p> -->
        </div>
        </div>
    </div>



<?php
// if(isset($_POST['submit'])){
// 	$sql2 = "INSERT INTO `cus_address` (`cus_id`, `cus_name`, `cus_email`, `cus_add`, `cus_zip`, `cus_phone`, `oid`) VALUES (NULL, '{$_POST['fullname']}', '{$_POST['email']}', '{$_POST['ads']}', '{$_POST['zip-code']}', '{$_POST['tel']}'), '".$_SESSION['sid'][$pid]."' ;";

// 	mysqli_query($conn, $sql2) or die ("can't add data");
//   mysqli_query($conn, $sql2) or die ("ลองอีกครั้ง");
//   mysqli_insert_id($conn);

//   echo"<script>";
//   echo "alert('เพิ่มข้อมูลสินค้าสำเร็จ');";
//   echo"window.location='index2.php';";
//   echo"</script>";
// }

?>


	</body>
</html>
