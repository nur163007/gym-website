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
									<li class="active">Add Cart</li>
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

<form method="post" enctype="multipart/form-data">
<table border="0" width="480px" height="430px" align="center" class="tableshadow">
<tr><td colspan="2" class="toptd">Add Shopping Cart</td></tr>

<tr><td class="lefttxt">Product Name</td><td><input type="text" name="name" /></td></tr>
<tr><td class="lefttxt">Product Price</td><td><input type="text" name="price" /></td></tr>
<tr><td class="lefttxt">Product Stock</td><td><input type="text" name="quantity" /></td></tr>
<tr><td class="lefttxt">Product Image</td><td><input type="file" name="image" /></td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="submit" /></td></tr>

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
<?php
if(isset($_POST["submit"]))
{
	session_start();
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "mygym";

$conn= new mysqli($servername, $username, $dbpassword,$dbname);
$error="";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

	$f1=0;

	$target_dir = "shop/";
	//t4
	$target_file = $target_dir.basename($_FILES["image"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["image"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["image"]["size"]>700000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif" && $imagefiletype != "PNG"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
			$f1=1;
	} else{
			echo "sorry there was an error uploading your file.";
		}
	}
	
	
		if($f1>0)
		{
	
	$s="insert into shop(name,price,stock,image) values('" . $_POST["name"] ."','" . $_POST["price"] ."','" . $_POST["quantity"] ."','" . basename($_FILES["image"]["name"])  ."')";
	$result = mysqli_query($conn,$s);
	mysqli_close($conn);
	if(result == true){
	echo "<script>alert('Data Stored Successfully');</script>";
		}
		else{
			echo "<script>alert('Something Wrong');</script>";
		}
	}
	
		
}
?>
</body>
</html>