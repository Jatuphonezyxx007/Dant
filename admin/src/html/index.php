<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Seller Center</title>


  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo.png" />
  <link rel="stylesheet" href="../assets/css/styles.min.css" />

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
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/dant_seller.png" width="180" alt="">
                </a>
                <p class="text-center">ยินดีต้อนรับเข้าสู่ระบบการจัดการข้อมูล</p>

                <form method="post" action="">
                  <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" name="usr" class="form-control">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control">
                  </div>
                    <div class="text-end">
                      <p>หากลืมรหัสผ่านกรุณาติดต่อเจ้าหน้าที่</p>
                    </div>
                    <button class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2" type="submit" name="Submit">เข้าสู่ระบบ</button>
                    <div class="text-end">
                      <a href="..\..\..\index.php">Homepage Dant</a>
                    </div>
                  <!-- <a href="./index.php" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">เข้าสู่ระบบ</a> -->
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <?php
if(isset($_POST['Submit'])){
    include("connectdb.php");
    $sql = "SELECT * FROM `admin` WHERE `a_usr`='{$_POST['usr']}' AND `a_pwd`='".md5($_POST['pwd'])."' LIMIT 1 ";
    $rs = mysqli_query($conn, $sql) or die ("select ไม่ได้");
    $num = mysqli_num_rows($rs);
    //var_dump($num); 
    if($num>0){
        $data = mysqli_fetch_array($rs);
        $_SESSION['aid'] = $data['a_id'];
        $_SESSION['aname'] = $data['a_name'];
        echo "<script>";
        echo "window.location='index2.php';";
        echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Username หรือ Password ไม่ถูกต้อง');";
        echo "</script>";
        exit;
    }
}
?>

</body>

</html>