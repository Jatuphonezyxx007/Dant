<meta charset="utf-8">
<?php
	@session_start();
	include("connectdb.php");
	
		foreach($_SESSION['sid'] as $pid) {
			$sum[$pid] = $_SESSION['sprice'][$pid] * $_SESSION['sitem'][$pid] ;
			@$total += $sum[$pid] ;
		}
	
	$sql = "insert into `orders` values('', '$total', CURRENT_TIMESTAMP, '0');" ;
	mysqli_query($conn, $sql) or die ("insert error") ;
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['sid'] as $pid) {
		$sql2 = "insert into orders_detail values('', '$id', '".$_SESSION['sid'][$pid]."', '".$_SESSION['sitem'][$pid]."');" ;
		mysqli_query($conn, $sql2);
	}

	// $oid = $_GET['oid'];
	// $_SESSION['oid'] = $oid;
	// if(isset($_POST['submit'])){
	// 	$sql3 = "INSERT INTO `cus_address` (`cus_id`, `cus_name`, `cus_email`, `cus_add`, `cus_zip`, `cus_phone`, `oid`) VALUES (NULL, '{$_POST['fullname']}', '{$_POST['email']}', '{$_POST['ads']}', '{$_POST['zip-code']}', '{$_POST['tel']}'), '".$_SESSION['sid'][$pid]."' ;";
	// 	mysqli_query($conn, $sql3) or die ("can't add data");
	// }
	
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=payment_1.php\">";
?>