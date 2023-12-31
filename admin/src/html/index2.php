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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

  <style>
    body{
      font-family: 'Prompt', sans-serif;
    }
    
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24

      .truncate {
        width: 250px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
}
}

</style>

<script>
  const myModal = document.getElementById('myModal')
  const myInput = document.getElementById('myInput')
  myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})


</script>

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
          <div class="card"></div>
            <div class="card-body">
              <div class="row">
              <h5 class="card-title fw-semibold mb-4">สินค้าของฉัน</h5>

              <form method="post" action="" class="d-flex" role="search">
                    <input class="form-control me-3" type="search" name="src1" placeholder="ค้นหาสินค้า" aria-label="Search">
                    <button class="btn btn-outline-danger" type="submit"><span class="material-symbols-outlined"> search</span>
                  </button>
                </form>

                <?php
                  include("connectdb.php");
                  @$src1 = $_POST['src1'];
                  $sql = "SELECT * FROM `products`  WHERE (`name` LIKE '%{$src1}%' OR `detail` LIKE '%{$src1}%') ORDER BY `products`.`type` ASC";
                  $rs = mysqli_query($conn, $sql);

                  while ($data = mysqli_fetch_array($rs)){
                    ?>   

                    
                    <div class="col-md-4">
                      <br>

                      <div class="card">
                        <img src="../assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>" class="card-img-top" alt="" height="350px">
                        <div class="card-body">
                          <h8 class="card-title d-inline-block text-truncate" style="max-width: 150px;"><?=$data['name'];?></h8>
                          <p class="card-text"><?= number_format($data['price'], );?> บาท</p>
                          <a href="update.php?id=<?=$data['id'];?>" class="btn btn-primary">รายละเอียด / แก้ไข</a>
                          <!-- <a href="update.php?id=<?=$data['id'];?>"class="btn btn-warning">แก้ไข</a> -->
                          <a href="delete.php?id=<?=$data['id'];?>&ext=<?=$data['img'];?>" type="button" class="btn btn-danger" onClick="return confirm('ยืนยันการลบ ?')"; >ลบสินค้า</a>
                        </div>
                      </div>

                  </div>
                  
                  <?php
                  }
                  mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
                  ?> 
                  
                  
                  
                  <a href="#top" class="text-end">กลับไปบนสุด</a>



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