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
									<li class="active">View Orderlist</li>
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
			
			

				<div class="container">
					<div class="profile card-body">
						<h3>My Package</h3>
					</div>
					<div class="card col-md-10">
						<table class="table table-hover">
							<thead>
								<th>Product Name</th>
								<th>Quantity</th>
								<th>Price</th>
								<th>Image</th>
								<th>Status</th>

							</thead>
							<?php 
			include('dbConnect.php');
			$id = $_SESSION['user_id'];
			$sql = "SELECT orders.* , shop.name as shop_name,shop.image as pic from orders
			INNER JOIN shop ON orders.shop_id=shop.shop_id where orders.user_id ='$id'";

			// var_dump($sql);
			// exit();
			$query = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_assoc($query)){
				// echo "<pre>";
				// var_dump($row);
				// exit();
				$product = $row['shop_name'];
				$quantity = $row['quantity'];
				$total = $row['total_amount'];
				$pic = $row['pic'];
				$status = $row['status'];
				?>
							<tbody>

								<tr>
									<td><?php echo $product; ?></td>
									<td><?php echo $quantity; ?></td>
									<td> Tk. <?php echo $total; ?></td>
									<td> <img src="admin/shop/<?php echo $pic; ?>" width="100px" height="50px" /></td>
									<td><?php echo $status; ?></td>
								</tr>
							</tbody>
								<?php
			}
			?>
						</table>
					</div>
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
