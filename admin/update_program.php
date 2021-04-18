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

	$s="update program set program_name='" . $_POST["p_name"] ."',short_description='" . $_POST["short"] . "',long_description='" . $_POST["long"] . "'  where program_id='" . $_POST["id"] . "'";
	mysqli_query($conn,$s);
	
	echo "<script>alert('Record Updated');</script>";

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
									<li class="active">Update Program</li>
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
<table border="0" width="550px" height="300px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Update Program</td></tr>
<tr><td class="lefttxt">Select Program Name</td><td><select name="pid" required/><option value="">--Select name--</option>

<?php
include('../dbConnect.php');
$s="select * from program";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["pid"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
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

$s="select * from program where program_id='" .$_POST["pid"] ."'";
$result=mysqli_query($conn,$s);
$r=mysqli_num_rows($result);
//echo $r;

$data=mysqli_fetch_array($result);
// echo '<pre>';
// var_dump($data);
// exit();
$id =$data['program_id'];
$name=$data['program_name'];
$short = $data['short_description'];
$long=$data['long_description'];
$pic=$data['image'];

mysqli_close($conn);

}

?>

</td></tr>
<tr><td class="lefttxt"></td><td><input type="hidden"  value="<?php if(isset($_POST["show"])){ echo $id ;} ?>" name="id"></td></tr>
<tr><td class="lefttxt">Program Name</td><td><input type="text"  value="<?php if(isset($_POST["show"])){ echo $name ;} ?>" name="p_name" required/></td></tr>
<tr><td class="lefttxt">Short Description</td><td><textarea type="text" name="short"><?php if(isset($_POST["show"])){ echo $short ;} ?></textarea></td></tr>
<tr><td class="lefttxt">Long Description</td><td><textarea type="text" name="long"><?php if(isset($_POST["show"])){ echo $long ;} ?></textarea></td></tr>
<tr><td class="lefttxt">Previous Image</td><td><img src="program/<?php echo $pic; ?>" width="150px" height="50px" /></td></tr>

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