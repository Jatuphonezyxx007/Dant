<?php
@session_start();
if(empty($_SESSION['aid'])){
	echo"Access Denied !!!";
	exit;
	
	
	}
	// echo $_SESSION['aname'];



?>


<?php
                include("connectdb.php");
                $sql = "SELECT * FROM `products` WHERE `id` = '{$_GET['id']}'";
                $rs = mysqli_query($conn, $sql);
                $data = mysqli_fetch_array($rs); 
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


  <style type="text/css">
    body{
      font-family: 'Prompt', sans-serif;
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

      <!-- START CARD -->

      <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title fw-semibold mb-4">แก้ไขรายการสินค้า</h5>
              <h6 class="card-subtitle fw-normal mb-4">สำคัญ : โปรดตรวจสอบว่าได้กรอกชื่อสินค้า รายละเอียด ราคาสินค้า อัปโหลดรูปภาพสินค้า และเลือกหมวดหมู่ที่ถูกต้องก่อนทำการเผยแพร่สินค้า</h6>

              <div class="card">
                <div class="card-body">

              <form method="post" action="" enctype="multipart/form-data">

                  <div class="container">
                    <div class="row">
                      <div class="col text-center">
                        <div class="card" style="width: 18rem;">
                        <img src="../assets/images/imgs/<?=$data['id'];?>.<?=$data['img'];?>" class="card-img-top rounded mx-auto d-block" alt="" height="300px">
                      </div>
                    </div>

                    <div class="col">
                    <!-- <div class="mb-3"> -->
                      <label for="img_product" class="form-label">รูปภาพสินค้า</label>
                      <input class="form-control" type="file" name="p_pics"><br>
                      <h6 class="card-subtitle fw-normal mb-4">สำคัญ : สามารถอัพโหลดรูปภาพเฉพาะไฟล์ png, jpg, gif, tfif และ webp</h6>
                    <!-- </div> -->
                    </div>
                  </div>
                </div>


                <div class="mb-3">
                  <label for="n_product" class="form-label">ชื่อสินค้า</label>

                      <div class="input-group">

                        <input name="p_name" id="txtForJs1" type="text" class="form-control" size="10" onkeyup="countTextJs1()" maxlength="100" placeholder="ใส่ค่าข้อมูล" value="<?=$data['name'];?>"> 

                        <span class="input-group-text" id="rs_txtForJs1">0</span>
                        <span class="input-group-text">/ 100</span>
                      </div>
                      <br>

                  <label for="d_product" class="form-label">รายละเอียดสินค้า</label>
                  <div class="form-floating">
                    <textarea name="p_detail" class="form-control" style="height: 250px"><?=$data['detail'];?></textarea>
                    <label for="detail_product">รายละเอียดสินค้า</label>
                  </div>
                    <br>


                    <label for="p_product" class="form-label">ราคาสินค้าต่อชิ้น : ขายปลีก</label>
                    <div class="row g-2">
                      <div class="col-md">
                        <div class="form-floating">
                          <input type="text" name="p_price" class="form-control" required value="<?=$data['price'];?>">
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



                    <button type="submit" name="submit" class="btn btn-primary" style="float:right">บันทึกข้อมูล</button>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                </div>
              </form>

                  </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
<!-- END CARD -->

</div>

<?php
if(isset($_POST['submit'])){
    if($_FILES['p_pics']['name']!=""){
        $allowed = array('gif', 'png', 'jpg', 'jpeg', 'jfif', 'webp');
        $filename = $_FILES['p_pics']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if (!in_array($ext, $allowed)) {
          echo "<script>";
          echo "alert('แก้ไขข้อมูลสินค้าไม่สำเร็จ! ไฟล์รูปต้องเป็น jpg gif หรือ png เท่านั้น');";
          echo "</script>";
          exit;
        } 
        @copy($_FILES['p_pics']['tmp_name'], "..\assets/images/imgs/".$_GET['id'].".".$ext);

        $sql = "UPDATE `products` SET `name`='{$_POST['p_name']}', `detail`='{$_POST['p_detail']}', `price`='{$_POST['p_price']}', `img`='{$ext}', `type`='{$_POST['p_type']}' WHERE `id`='{$_GET['id']}';";
    } else {
        $sql = "UPDATE `products` SET `name`='{$_POST['p_name']}', `detail`='{$_POST['p_detail']}', `price`='{$_POST['p_price']}', `type`='{$_POST['p_type']}' WHERE `id`='{$_GET['id']}';";
    }
    //var_dump($s
    mysqli_query($conn, $sql) or die("แก้ไขข้อมูลสินค้าไม่ได้");
    echo"<script>";
    echo "alert('แก้ไขข้อมูลสำเร็จ');";
    echo "window.location=ui-card.php';";
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