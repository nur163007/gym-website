<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html>
<head>
	<title>mygym</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	include('includes/stylesheet.php');
	?>


	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--js--> 
	<script src="assets/js/wow.min.js"></script>

	<!--/js-->
	<!--animated-css-->

	<script>
		new WOW().init();
	</script>
	<!--/animated-css-->
</head>
<body>
	<!--header-->
	<!--sticky-->

	<?php
	if($_SESSION['loginstatus']=="no")
	{
		header("location: login.php");
	}
	?>

	<?php

	include('dbConnect.php');
	$id =  $_SESSION['user_id'];
	if(isset($_POST["sbmt"])){
		
		// var_dump($id);
		// exit();
		
		$ppass = $_POST["pre_pass"];
		$npass = $_POST["password"];
		$cpass = $_POST["cpassword"];

		$s = "SELECT * from users where user_id = '$id'";
		$query = mysqli_query($conn,$s);
		  while($row = mysqli_fetch_array($query)){

		  	$p = $row['user_pass'];
		  	// 	var_dump($p);
		  	// exit();
		if($p == $ppass){
			if($npass == $cpass){
				$sql="UPDATE users set user_pass = '$npass' where user_id='$id' ";
				mysqli_query($conn,$sql);

				echo "<script>alert('Password Changed Successfully');</script>";
			}else{
				echo "<script>alert('Password do not matched);</script>";
			}
		}else{
			echo "<script>alert('Previous password not matched);</script>";
		}
}
		mysqli_close($conn);
	}
	?>


	<?php include ('sidebar.php'); ?>
	<!-- /#left-panel -->
	<!-- Right Panel -->
	<div id="right-panel" class="right-panel">
		<!-- Header-->
		<header id="header" class="header">
			<div class="top-left">
				<div class="navbar-header">
					<a class="navbar-brand ml-auto" href="index.php"><img src="images/logo.jpg" style="height:41px;width:100px;"alt="Logo"></a>
					<a class="navbar-brand hidden" href="./"><img src="images/logo.jpg" style="height:41px;width:100px;"alt="Logo"></a>
					<a id="menuToggle" class="menutoggle mr-auto"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			<div class="top-right">
				<div class="header-menu">
					<div class="user-area dropdown float-right">

						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
						</a>



						<div class="user-menu dropdown-menu">
							<a class="nav-link" href="cart.php" target="_blank"><i class="fa fa-shopping-cart"></i>My Cart</a>

							<a class="nav-link" href="changepass.php"><i class="fa fa-lock"></i>Change Password</a>

							<a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
						</div>
					</div>

				</div>
			</div>
		</header>
		<!-- /#header -->
		<!-- Breadcrumbs-->
		<div class="breadcrumbs">
			<div class="breadcrumbs-inner">
				<div class="row m-0">
					<div class="col-sm-0">

					</div>
					<div class="col-sm-12">
						<div class="page-header float-right">
							<div class="page-title">
								<ol class="breadcrumb text-right">
									<li><a href="dashboard.php">Home</a></li>
									<li class="active">Dashboard</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /.breadcrumbs-->
		<!-- Content -->
		<div class="content">
			<!-- Animated -->

			<div class="col-sm-9">
				<form method="post">
					<table border="0" width="400px" height="300px" align="center" class="tableshadow">
						<tr><td colspan="2" class="toptd text-center"><h4>Change Password</h4></td></tr>

						<tr><td class="lefttxt">Previous Password</td><td><input type="text"  name="pre_pass" required autocomplete="off" /></td></tr>
						<tr><td class="lefttxt">New Password</td><td><input type="password" name="password" required/></td></tr>
						<tr><td class="lefttxt"> Confirm Password</td><td><input type="password"  name="cpassword" required /></td></tr>
						<tr><td>&nbsp;</td><td ><input type="submit" value="Change Password" name="sbmt" /></td></tr>
					</table>
				</form>


			</div>
			<!-- .animated -->
		</div>
		<!-- /.content -->
		<div class="clearfix"></div>
		<!-- Footer -->
		<footer class="fixed-bottom">
			<div class="footer-inner bg-white">
				<div class="row">
					<div class="col-sm-3 col-5 offset-1 offset-sm-3">
						Copyright &copy; 2021 gym
					</div>
					<div class="col-sm-3 col-5 text-right">
						Designed by <a href="#">Developer</a>
					</div>
				</div>
			</div>
		</footer>
		<!-- /.site-footer -->
	</div>

	<?php
	include('includes/styleJs.php');
	?>
</body>
</html>