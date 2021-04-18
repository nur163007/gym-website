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
									<li class="active">Add User</li>
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
<tr><td class="toptd">View Enquiry</td></tr>
<tr><td align="center" valign="top" style="padding-top:10px;">
<table border="0" align="center" width="95%">
<tr><td style="font-size:15px; padding:5px; font-weight:bold;" >Name</td>
<td style="font-size:15px; padding:5px; font-weight:bold; ">Email</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Phone</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Gender</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Address</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Porfession</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Package</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Price</td>
<td style="font-size:15px; padding:5px; font-weight:bold;">Status</td></tr>
<?php
include('../dbConnect.php');
$s="select * from users";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{

	
		echo "<tr><td style=' padding:5px;'>$data[1]</td>
		<td style=' padding:5px;'>$data[2]</td>
		<td style=' padding:5px;'>$data[3]</td>
		<td style=' padding:5px;'>$data[10]</td>
		<td style=' padding:5px;'>$data[4]</td>
		<td style=' padding:5px;'>$data[11]</td>
		<td style=' padding:5px;'>$data[13]</td>
		<td style=' padding:5px;'>$data[14]</td>
		<td style=' padding:5px;'><a href='checkstatus.php?uid=$data[0]' style='margin-right:15px; padding:6px 8px; background-color:green;color:white;border-radius:5px;'>Active</a> <a href='checkstatus.php?uid=$data[0]'style='padding:6px 8px; background-color:green;color:white;border-radius:5px;'>Remove</a></td>
		</tr>";

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