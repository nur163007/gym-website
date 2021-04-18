<?php if(!isset($_SESSION)) { session_start(); } ?>

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

<?php
if(isset($_POST["sbmt"]))
{
	include('../dbConnect.php');
	$npass = $_POST["password"];
	$cpass = $_POST["cpass"];
	if($npass == $cpass){
	$s="update admin set full_name='" . $_POST["a_name"] ."',admin_email='" . $_POST["email"] . "',admin_pass='" . $_POST["password"] . "',admin_type='" . $_POST["type"] . "' where admin_id='" . $_POST["id"] . "'";
	mysqli_query($conn,$s);
	
	echo "<script>alert('Record Update');</script>";
}else{
	echo "<script>alert('Password do not matched);</script>";
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
									<li class="active">Update User</li>
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
<table border="0" width="400px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update User</td></tr>
<tr><td class="lefttxt">Select Admin</td><td><select name="name" required/><option value="">--Select name--</option>

<?php
include('../dbConnect.php');
$s="select * from admin";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data['full_name']==$_POST["name"])
	{
		echo"<option value=$data[1] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[1]>$data[1]</option>";
	}
}
mysqli_close($conn);



?>

</select>

<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
include('../dbConnect.php');

$s="select * from admin where full_name='" .$_POST["name"] ."'";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
// echo '<pre>';
// var_dump($data);
// exit();
$id =$data['admin_id'];
$name=$data['full_name'];
$email = $data['admin_email'];
$pass=$data['admin_pass'];
$type=$data['admin_type'];

mysqli_close($conn);

}

?>

</td></tr>
<tr><td class="lefttxt"></td><td><input type="hidden"  value="<?php if(isset($_POST["show"])){ echo $id ;} ?>" name="id"></td></tr>
<tr><td class="lefttxt">Name</td><td><input type="text"  value="<?php if(isset($_POST["show"])){ echo $name ;} ?>" name="a_name" required/></td></tr>
<tr><td class="lefttxt">Username</td><td><input type="email"  value="<?php if(isset($_POST["show"])){ echo $email ;} ?>" name="email" required/></td></tr>
<tr><td class="lefttxt">Password</td><td><input type="password"  value="<?php if(isset($_POST["show"])){ echo $pass ;} ?>" name="password" required title"Please Enter Only Characters and numbers between 1 to 10 for Password"/></td></tr>
<tr><td class="lefttxt">Confirm Password</td><td><input type="password" value="<?php if(isset($_POST["show"])){ echo $pass ;} ?>" name="cpass" required title"Please Enter Only Characters and numbers between 1 to 10 for Password"/></td></tr>
<tr><td class="lefttxt">Type of Admin</td><td><select name="type" required /><option value="">Select</option>
<option value="admin" <?php if(isset($_POST["show"])&& $type=="admin"){ echo "selected"; } ?>>Admin</option>
<option value="general" <?php if(isset($_POST["show"])&& $type=="general"){ echo "selected"; } ?>>General</option>
</select></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>
</table>
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