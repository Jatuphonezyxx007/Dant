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


  <style type="text/css">
    body{
      font-family: 'Prompt', sans-serif;
    }

    .color-red{
      color: #red;
    }
  </style>

  

  <script type="text/javascript">
  function countTextJs1(){//ฟังก์ชั่นนับจำนวนตัวอักษรรวมช่องว่าง
    var txtForJs1=document.getElementById('txtForJs1').value;
    var countTxt=txtForJs1.length;
    document.getElementById('rs_txtForJs1').innerHTML=countTxt
}
function countTextJs2(){//ฟังก์ชั่นนับจำนวนตัวอักษรไม่รวมช่องว่าง
  var txtForJs2=document.getElementById('txtForJs2').value;
  var countTxtNull=0;
  var countTxt=0;
  try{
    countTxtNull=txtForJs2.match(/\s/g).length;//นับจำนวนช่องว่าง
}catch(e){}
countTxt=txtForJs2.length-countTxtNull;//จำนวนตัวอักษรทั้งหมด-จำนวนช่องว่าง=จำนวนตัวอักษรไม่รวมช่องว่าง
document.getElementById('rs_txtForJs2').innerHTML=countTxt
}

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
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
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">เพิ่มสินค้า</h5>
              <h6 class="card-subtitle fw-normal mb-4">สำคัญ : กรอกข้อมูลให้ครบทุกช่อง ใช้คำสุภาพ และอย่าใช้คำโฆษณาชวนเชื่อในการขายสินค้า</h6>
              <div class="card">
                <div class="card-body">

                  <form method="post" action="" enctype="multipart/form-data">
                    <div class="mb-3">

                      <label for="n_product" class="form-label">ชื่อสินค้า</label>
                      <div class="input-group">
                      <input name="p_name" id="txtForJs1" type="text" class="form-control" size="10" onkeyup="countTextJs1()" maxlength="100" placeholder="ใส่ค่าข้อมูล" autofocus required> 
                      <span class="input-group-text" id="rs_txtForJs1">0</span>
                      <span class="input-group-text">/ 100</span>
                      </div>
                      <br>

                    <label for="d_product" class="form-label">รายละเอียดสินค้า</label>
                    <div class="form-floating">
                      <textarea class="form-control" name="p_detail" placeholder="p_detail" id="detail_product" style="height: 150px" required></textarea>
                      <label for="detail_product">รายละเอียดสินค้า</label>
                    </div>
                    <br>

                    <label for="p_product" class="form-label">ราคาสินค้าต่อชิ้น : ขายปลีก</label>
                    <div class="row g-2">
                      <div class="col-md">
                        <div class="form-floating">
                          <input type="text" name="p_price" class="form-control" id="p_product" placeholder="ราคา" required>
                          <label for="floatingInputGrid">ราคา / บาท</label>
                        </div>
                      </div>
                      <br>

                      <div class="col-md">
                        <div class="form-floating">
                          <select class="form-select" id="type_product" aria-label="type_product" name="p_type">
                            <?php
                            include("connectdb.php");
                            $sql2 = "SELECT * FROM `type`";
                            $rs2 = mysqli_query($conn, $sql2);
                            while ($data2 = mysqli_fetch_array($rs2)){
                              ?>
                              <option value="<?=$data2['t_id'];?>"<?=($data2['t_id']==$data['type'])?"selected":"";?>>
                              <?=$data2['t_name'];?></option>  
                              <?php } ?>
                          </select>
                          <label for="floatingSelectGrid">ประเภทสินค้า</label>
                          
                        </div>
                      </div>
                    </div>
                    <br>


                    <div class="mb-3">
                      <label for="img_product" class="form-label">รูปภาพสินค้า</label>
                      <input class="form-control" name="p_pics" type="file"><br>
                      <h6 class="card-subtitle fw-normal mb-4">สำคัญ : สามารถอัพโหลดรูปภาพเฉพาะไฟล์ png, jpg, gif, tfif และ webp</h6>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary" style="float:right">บันทึกข้อมูล</button>     

                    </div>
                  </form>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
if(isset($_POST['submit'])){
  $allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif', 'webp');
  $filename = $_FILES['p_pics']['name'];
  $ext = pathinfo($filename, PATHINFO_EXTENSION);
  if (!in_array($ext, $allowed)) {
    echo "<script>";
    echo "alert('บันทึกข้อมูลสินค้าไม่สำเร็จ! ไฟล์รูปต้องเป็น png, jpg, gif, tfif, หรือ webp เท่านั้น');";
    echo "</script>";
    exit;
  }
  $sql2 = "INSERT INTO `products` (`id`, `name`, `price`, `img`, `detail`, `type`) VALUES (NULL, '{$_POST['p_name']}', '{$_POST['p_price']}', '{$ext}', '{$_POST['p_detail']}', '{$_POST['p_type']}');";
  mysqli_query($conn, $sql2) or die ("เพิ่มข้อมูลสินค้าไม่สำเร็จ");
  mysqli_insert_id($conn);
  $idd = mysqli_insert_id($conn);

  @copy($_FILES['p_pics']['tmp_name'], "../assets/images/imgs/".$idd.".".$ext);
  echo"<script>";
  echo "alert('เพิ่มข้อมูลสินค้าสำเร็จ');";
  echo"window.location='ui-card.php';";
  echo"</script>";
}

?>


  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>