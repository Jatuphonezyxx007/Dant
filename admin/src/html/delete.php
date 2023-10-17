<meta charset="UTF-8">

<?php
if(isset($_GET['id'])){
    include("connectdb.php");
    $sql = "DELETE FROM `products` WHERE `id` = '{$_GET['id']}' ";
    mysqli_query($conn, $sql) or die("ลบสินค้าไม่สำเร็จ");
    //ลบข้อมูลจาก DATABASE

    if(isset($_GET['ext'])){
        unlink("../assets/images/imgs/{$_GET['id']}.{$_GET['ext']}");
    }


    echo"<script>";
    echo"window.location='ui-card.php?reload=1';";
    echo"</script>";
}
?>