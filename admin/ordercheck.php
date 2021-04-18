<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>mygym</title>
</head>

<body>
	<?php 
	include('../dbConnect.php');
// var_dump($_GET["oid"]);
// exit();
	$s="update orders set status='Confirm' where order_id='" . $_GET["oid"] . "'";
	$r = mysqli_query($conn,$s);
	if ($r) {
			echo '<script>window.location="checkorder.php"</script>';
		}
	// header("location:viewenquiry.php");


	if(isset($_GET['oid'])){

		$check ="select * from orders where order_id='" . $_GET["oid"] . "'";
		$query=mysqli_query($conn, $check);
		
		while($result = mysqli_fetch_assoc($query)) {
			// var_dump($result);
			// exit();
			$id=$result['order_id'];
			$quantity = $result['quantity'];
			$sid = $result['shop_id'];	
		}
		$shop = "select * from shop where shop_id = '$sid'";
		$ok = mysqli_query($conn,$shop);
		while($row = mysqli_fetch_assoc($ok)) {
			// var_dump($row);
			// exit();
			$stock = $row['stock'];
		}
		$add = $stock - $quantity;

		$shop_update = "update shop set stock='$add' where shop_id='$sid'";
		$shop_ok = mysqli_query($conn,$shop_update);
	}
// mysqli_close($cn);
	?>
</body>
</html>