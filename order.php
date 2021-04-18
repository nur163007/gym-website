<?php 
session_start();
include('dbConnect.php');

// if($_SESSION['loginstatus']=="no")
// {

// 	header("location: login.php?action=order");
// }
// elseif ($_SESSION['loginstatus']=="yes") {
// 	header("location: order.php");
// }
// if($_SESSION['loginstatus']=="no")
// {

// 	header("location: login.php");
// }

// else
// {
// echo "<pre>";

// 	var_dump($_SESSION["shopping_cart"]);
// 	exit();
// if (isset($_POST["order_submit"])) {


$uid = $_SESSION['user_id'];
	// var_dump($uid);
	// exit();
$oid = rand(100000,999999);
$status = "Pending";

$total=0;
// $insert = "";
$data = $_SESSION["shopping_cart"];

// echo "<pre>";

// var_dump($data);
// exit();

if (!empty($data)) {

	foreach($data as $values){
		// echo "<pre>";
		// var_dump($values);
		// exit();
		$item_id          =  $values["item_id"];
		$item_name        =  $values["item_name"];
		$item_price       =  $values["item_price"];
		$item_quantity    =   $values["item_quantity"];
		$total            =  $total+($values["item_quantity"]*$values["item_price"]);


		$insert = "INSERT INTO orders (order_id,user_id,shop_id,quantity,total_amount,status) VALUES('$oid','$uid','$item_id','$item_quantity','$total','$status')";
		// 	var_dump($insert);
		// exit();
		$result = mysqli_multi_query($conn,$insert);
	}

	if ($result == true) {
		echo '<script>alert ("You have Successfully place an order....Thank you")</script>'; 
		unset($_SESSION["shopping_cart"]); 
		echo '<script>window.location="orderlist.php"</script>';
	}
	else{
		var_dump($result);
		exit();
		echo '<script>alert ("Something Wrong to place order")</script>'; 
		echo '<script>window.location="cart.php"</script>';
	}

}

// echo "<pre>";
// var_dump($values);
// exit();


		// var_dump($result);
		// exit();



// }
// }


// else{
// 	header("location: login.php");
// }

?>
