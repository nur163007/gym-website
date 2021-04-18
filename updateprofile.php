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


	include('dbConnect.php');
   $id = $_SESSION['user_id'];

	if(isset($_POST['submit'])){
		$f_name = $_POST['u_name'];
		$u_email = $_POST['u_email'];
		$u_phone = $_POST['u_phone'];
		$u_address = $_POST['u_address'];
		$u_age = $_POST['u_age'];
		$u_height = $_POST['u_height'];
		$u_weight = $_POST['u_weight'];
		$u_desig = $_POST['u_designation'];
		$u_bio = $_POST['u_bio'];

	  $update = "update users set full_name = '$f_name', user_email = '$u_email', user_phone = '$u_phone', user_address='$u_address', user_age= '$u_age', user_height ='$u_height', user_weight='$u_weight', designation = '$u_desig',bio ='$u_bio' where user_id = '$id' ";

	  $result = mysqli_query($conn,$update);
	  if($result == true){
	  	echo "<script>alert('User Updated Successfully');</script>";
	  }
	  else{
	  	echo "<script>alert('Something Wrong');</script>";
	  }
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
									<li class="active">Update Profile</li>
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
			
			<?php 
			include('dbConnect.php');
			$id = $_SESSION['user_id'];
			$sql = "select * from users where user_id = '$id'";
			$query = mysqli_query($conn,$sql);
			while($row = mysqli_fetch_array($query)){
				$name = $row['full_name'];
				$email = $row ['user_email'];
				$phone = $row ['user_phone'];
				$address = $row ['user_address'];
				$dob = $row['date_of_birth'];
				$age = $row ['user_age'];
				$height = $row ['user_height'];
				$weight = $row ['user_weight'];
				$desig = $row ['designation'];
				$gender = $row ['gender'];
				$bio = $row['bio'];
				$pack = $row['packages'];
				$price = $row['price'];
				$status = $row ['status'];

				?>

				<div class="container">
					<div class="profile card-body">
						<h3>Profile Update</h3>
					</div>
					<form action="" method="post">
						<div class="card">
							<div class="row">
								<div class="col-md-6">
									<label for="u_name">Name</label>
									<input type="text" name="u_name" class="form-control" value="<?php echo $name; ?>" required>
								</div>

								<div class="col-md-6">
									<label for="u_email">Email</label>
									<input type="email" name="u_email" class="form-control" value="<?php echo $email; ?>" required>
								</div>
								<div class="col-md-6">
									<label for="u_phone">Phone</label>
									<input type="text" name="u_phone" class="form-control" value="<?php echo $phone; ?>" required>
								</div>


								<div class="col-md-6">
									<label for="u_address">Address</label>
									<input type="text" name="u_address" class="form-control" value="<?php echo $address; ?>" required>
								</div>

								<div class="col-md-6">
									<label for="age">Age</label>
									<input type="text" name="u_age" class="form-control" value="<?php echo $age; ?>" required>
								</div>

								<div class="col-md-6">
									<label for="height">Height</label>
									<input type="text" name="u_height" class="form-control" value="<?php echo $height; ?>" required>
								</div>

								<div class="col-md-6">
									<label for="weight">Weight</label>
									<input type="text" name="u_weight" class="form-control" value="<?php echo $weight; ?>" required>
								</div>

								<div class="col-md-6">
									<label for="designation">Designation</label>
									<input type="text" name="u_designation" class="form-control" value="<?php echo $desig; ?>" required>
								</div>

								<div class="col-md-12">
									<label for="bio">Bio</label>
									<input type="text" name="u_bio" class="form-control" value="<?php echo $bio; ?>" required>
								</div>
							</div>
							<div class="mt-4">
								<input type="submit" name="submit" class="btn btn-success" value="Update">
							</div>
						</div>

					</form>

				</div>
				<?php
			}
			?>

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
