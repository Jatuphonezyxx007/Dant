<?php
@session_start();
if(empty($_SESSION['aid'])){
	echo"Access Denied !!!";
	exit;
	
	
	}
	// echo $_SESSION['aname'];



?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dant Seller Center</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />
  <link rel="stylesheet" href="../assets/css/themeify-icons.css" />

  <link rel="icon" href="https://i.ibb.co/nnr5ppn/LOGO.png" />



  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Prompt&display=swap" rel="stylesheet">


  <style>
    body{
      font-family: 'Prompt', sans-serif;
    }
  </style>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index2.php" class="text-nowrap logo-img">
            <img src="../assets/images/logos/DANT1.png" width="200" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">สินค้า</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index2.php" aria-expanded="false">
                <span>
                  <i class="ti ti-list-check"></i>
                </span>
                <span class="hide-menu">สินค้าของฉัน</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-forms.php" aria-expanded="false">
                <span>
                  <i class="ti ti-basket"></i>
                </span>
                <span class="hide-menu">เพิ่มสินค้าใหม่</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-alerts.php" aria-expanded="false">
                <span>
                  <i class="ti ti-alert-circle"></i>
                </span>
                <span class="hide-menu">คำสั่งซื้อ</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <!-- <span class="hide-menu">AUTH</span> -->
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../assets/images/profile/admin-1.png" alt="" width="40" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <div class="text-center">
                  <?php
                  echo $_SESSION['aname'];
                  ?>
                  </div>
                    <a href="./logout.php" class="btn btn-outline-danger mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">รายการคำสั่งซื้อ</h5>
              <div class="card mb-0">
                <div class="card-body p-4">


                <!--border="1" cellspacing="1" cellpadding="1"-->

                <table class="table table-striped table-sm-gap" width="100%">
                  <tr>
                    <td width="10%" class="text-center">&nbsp;</td>
                    <td width="30%" class="text-center">เลขที่ใบสั่งซื้อ</td>
                    <td width="20%" class="text-center">วันที่</td>
                    <td width="20%" class="text-center">ราคารวม</td>
                    <td width="20%" class="text-center">ลูกค้า</td>
                    <!-- <th width="5%">&nbsp;</th> -->
                  </tr>
                  
                  <?php
                  include("connectdb.php");
                  $sql = "select  *  from  `orders`  order by oid  desc ";
                  $rs = mysqli_query($conn, $sql) ;
                  while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                  ?>
                  
                  <tr>
                  <td class="text-center"><a href="detail.php?a=<?=$data['oid'];?>">รายละเอียด</a></td>
                  <td class="text-center"><?=$data['oid'];?></td>
                  <td class="text-center"><?=$data['odate'];?></td>
                  <td class="text-center"><?=number_format($data['ototal'],0);?> บาท</td>
                  <td class="text-center"><ชื่อ></td>
                  <!-- <td><a href="clear_product.php?id=<?=$pid;?>" class="btn btn-danger">ลบ</a></td> -->
                </tr>
                
                <?php  
              }  ?>



                  <!-- <div class="alert alert-primary" role="alert">
                    A simple primary alert—check it out!
                  </div> -->
                  <!-- <div class="alert alert-secondary" role="alert">
                    A simple secondary alert—check it out!
                  </div> -->

                  <!-- <div class="alert alert-info" role="alert"> -->
                    <!-- <a href="view_order_detail.php?a=<?=$data['oid'];?>">ดูรายละเอียด</a>
                    <p><?=$data['oid'];?></p> -->
                  <!-- </div> -->

                  <!-- <div class="alert alert-danger" role="alert">
                    A simple danger alert—check it out!
                  </div> -->
                  <!-- <div class="alert alert-warning" role="alert">
                    A simple warning alert—check it out!
                  </div> -->
                  <!-- <div class="alert alert-info" role="alert">
                    A simple info alert—check it out!
                  </div> -->
                  <!-- <div class="alert alert-light" role="alert">
                    A simple light alert—check it out!
                  </div> -->
                  <!-- <div class="alert alert-dark" role="alert">
                    A simple dark alert—check it out!
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>