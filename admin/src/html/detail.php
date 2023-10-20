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
              <span class="hide-menu">หน้าหลัก</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index2.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">ภาพรวม</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">สินค้า</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-card.php" aria-expanded="false">
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
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-buttons.php" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Buttons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./ui-typography.php" aria-expanded="false">
                <span>
                  <i class="ti ti-typography"></i>
                </span>
                <span class="hide-menu">Typography</span>
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
                  <img src="../assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->

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
              $sql = "SELECT  *  FROM  orders_detail
              INNER JOIN products ON orders_detail.pid = products.id
              WHERE orders_detail.oid = '".$_GET['a']."'  ";
              $rs = mysqli_query($conn, $sql) ;
              $i = 0;
              while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                $i++;
                $sum = $data['price'] * $data['item'] ;
                @$total += $sum;
                ?>
                <tr>
                  <td><?=$i;?></td>
                  <!-- <td><img src="images/<?=$data['p_picture'];?>" width="80"> <br> -->
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


    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>