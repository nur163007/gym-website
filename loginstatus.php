<?php 
session_start();
include('dbConnect.php');

if($_SESSION['loginstatus']=="no")
{

	header("location: login.php?action=order");
}
elseif ($_SESSION['loginstatus']=="yes") {
	header("location: order.php");
}
?>
