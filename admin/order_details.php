<?php if(!isset($_SESSION)) { session_start(); } ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
	<title>gygym</title>
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	include('includes/stylesheet.php');
	?>

	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--js--> 
	<script src="assets/js/wow.min.js"></script>

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
		header("location:login.php");
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
					<a class="navbar-brand ml-auto" href="index.php"><img src="../images/logo.jpg" style="height:41px;width:100px;" alt="Logo"></a>
					<a class="navbar-brand hidden" href="./"><img src="../images/logo.jpg" style="height:41px;width:100px;" alt="Logo"></a>
					<a id="menuToggle" class="menutoggle mr-auto"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			<div class="top-right">
				<div class="header-menu">
					<div class="user-area dropdown float-right">
						<a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="user-avatar rounded-circle" src="../images/admin.jpg" alt="User Avatar">
						</a>

						<div class="user-menu dropdown-menu">
							<a class="nav-link" href="../index.php" target="_blank"><i class="fa fa-user"></i>Preview website</a>

							<a class="nav-link" href="updateuser.php"><i class="fa fa-lock"></i>Change Password</a>

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
									<li><a href="index.php">Home</a></li>
									<li class="active">View Invoice</li>
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
			<!--/sticky-->


			<div class="col-md-12">
				<?php
				include('../dbConnect.php');
				$user="SELECT orders.* ,SUM(quantity) as sum ,SUM(total_amount) as amount,users.full_name,users.user_phone,users.user_email,users.user_address, shop.* from ((orders
				INNER JOIN shop ON orders.shop_id=shop.shop_id) 
				LEFT JOIN users ON orders.user_id=users.user_id) GROUP BY user_id";

				$output=mysqli_query($conn,$user);
									// echo "<pre>";
									// var_dump($result);
									// exit();
				while($done=mysqli_fetch_assoc($output))
				{

					?>
					<div class="profile card-body">
						<h3 class="text-center">Invoice No: <?php echo $done['order_id']; ?></h3>
					</div>
					<div class="col-md-11 m-auto card bg-success"><h3 class="text-white m-auto h4">Customer Details</h3></div>
					
					<div class="card col-md-11 m-auto ">

						<div class="check" style="padding: 20px 30px;">

							<h6>Name: <?php echo $done['full_name']; ?></h6>
							<h6>Email: <?php echo $done['user_email']; ?></h6>
							<h6>Phone: <?php echo $done['user_phone']; ?></h6>
							<h6>Address:<?php echo $done['user_address']; ?></h6>
							<h6>Total quantity: <?php echo $done['sum']; ?></h6>
							<h6>Total amount: Tk.<?php echo $done['amount']; ?></h6>

						</div>
					</div>
				<?php }
				?>
				<form method="post">
					<table border="0" width="905px" align="center" class="tableshadow">
						<tr><td class="toptd">Product Details</td></tr>
						<tr><td align="center" valign="top" style="padding-top:10px;">
							<table border="0" align="center" width="95%" class="table text-center">
								<tr>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Product Name</td>

									<td style="font-size:15px; padding:5px; font-weight:bold;">Quantity</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Image</td>

								</tr>


								<?php
								include('../dbConnect.php');
								$s="SELECT orders.* ,users.full_name,users.user_phone,users.user_address, shop.* from ((orders
								INNER JOIN shop ON orders.shop_id=shop.shop_id) 
								LEFT JOIN users ON orders.user_id=users.user_id)";

								$result=mysqli_query($conn,$s);
									// echo "<pre>";
									// var_dump($result);
									// exit();
								while($data=mysqli_fetch_assoc($result))
								{

										// echo "<pre>";
										// var_dump($data);
										// exit();
										// $uname = $data['full_name'];
									?>
									<tbody>

										<tr>

											<td> <?php echo $data['name']; ?></td>
											<td><?php echo $data['quantity']; ?></td>
											<td> Tk. <?php echo $data['total_amount']; ?></td>
											<td><img src="shop/<?php echo $data['image']; ?>" width="100px" height="50px"></td>
										</tr>
									<?php } 

									$order="SELECT orders.* ,users.full_name,users.user_phone,users.user_address, shop.* from ((orders
									INNER JOIN shop ON orders.shop_id=shop.shop_id) 
									LEFT JOIN users ON orders.user_id=users.user_id) GROUP BY user_id";

									$res=mysqli_query($conn,$order);
									// echo "<pre>";
									// var_dump($result);
									// exit();
									while($row=mysqli_fetch_assoc($res))
									{

										?>
										<tr >
											<td></td>
											<td></td>
											<td></td>
											<td>
												<a href="checkorder.php" style="background-color:green;padding:8px 10px;color:white; border-radius: 5px;margin-right: 10px;">Back</a>
												<a href="ordercheck.php?oid=<?php echo $row['order_id'];?>" style="background-color:green;padding:8px 10px;color:white; border-radius: 5px;">Place Order</a></td>
										</tr>



									</tbody>

									<?php
								}
								?>

							</table>
						</td></tr></table>

					</form>

				</div>

			</div>
			<!-- /.content -->
			<div class="clearfix"></div>
			<!-- Footer -->
			<footer class="fixed-bottom">
				<div class="footer-inner bg-white">
					<div class="row">
						<div class="col-sm-3 col-5 offset-1 offset-sm-3">
							Copyright &copy; 2021 tourism
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