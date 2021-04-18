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
			<!--/sticky-->


			<div class="col-sm-9">

				<form method="post">
					<table border="0" width="1000px" height="300px" align="center" class="tableshadow">
						<tr><td class="toptd">Order Details</td></tr>
						<tr><td align="center" valign="top" style="padding-top:10px;">
							<table border="0" align="center" width="95%" class="table table-hover text-center">
								<tr><td style="font-size:15px; padding:5px; font-weight:bold;">User Name</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Phone</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Address</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Quantity</td>
									<td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
									
									<td style="font-size:15px; padding:5px; font-weight:bold;">Status</td></tr>


									<?php
									include('../dbConnect.php');
									$s="SELECT orders.* , SUM(quantity) as sum ,SUM(total_amount) as amount,users.full_name,users.user_phone,users.user_address, shop.* from ((orders
									INNER JOIN shop ON orders.shop_id=shop.shop_id) 
									LEFT JOIN users ON orders.user_id=users.user_id) GROUP BY user_id";

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
												<td><?php echo $data['full_name']; ?></td>
												<td><?php echo $data['user_phone']; ?></td>
												<td> <?php echo $data['user_address']; ?></td>
											
												<td><?php echo $data['sum']; ?></td>
												<td> Tk. <?php echo $data['amount']; ?></td>
											<!-- 	<td><img src="shop/<?php echo $data['image']; ?>" width="100px" height="50px"></td> -->
												<td><a href="order_details.php?oid=<?php echo $data['order_id'];?>"style="background-color:green;padding:4px 7px;color:white;">View Details</a></td>

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