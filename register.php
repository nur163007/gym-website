<?php
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

if(isset($_POST['submit'])){
	$name = $_POST['full_name'];
	$email = $_POST['user_email'];
	$phone = $_POST['user_phone'];
	$address = $_POST['user_address'];
	$password = $_POST['user_pass'];
	$cpassword = $_POST['cpass'];
	$dob = $_POST['date_of_birth'];
	$age = $_POST['user_age'];
	$height = $_POST['user_height'];
	$weight = $_POST['user_weight'];
	$gender = $_POST['gender'];
	$desig = $_POST['designation'];
	$biodata = $_POST['bio'];
	$package = $_POST['packages'];
	$status ="Pending";

	if ($package == 'body building training'){
		$price = 10000;
	}
	elseif ($package == 'fat loss training'){
		$price = 15000;
	}
	elseif ($package == 'muscle building training') {
		$price = 20000;
	}

	if($password != $cpassword){
		$error = "Password not matched";
	}
	else{

   
		$sql = "INSERT INTO users (full_name,user_email,user_phone,user_address,user_pass,date_of_birth,user_age,user_height,user_weight,gender,designation,bio,packages,price,status) VALUES ('$name','$email','$phone','$address','$password','$dob','$age','$height','$weight','$gender','$desig','$biodata','$package','$price','$status')";
		
		$result = mysqli_query($conn,$sql);

		if($result == true){
			$error = "Registration Done Successfully";
		}
		else{
			$error = "Unable To Register";
		}
	}

}
$conn->close();
?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/register.css">

	<title>mygym</title>

</head>
<body style="background-image:url(images/background5.jpg);background-size:cover;">
	<div class="container mt-1">
		<h1 class="alert-info text-center mb-3 p-2">
			Register Here to join
		</h1>
		<div style = "font-size:20px; color:#fff; margin-top:10px;text-align: center;background-color: green;"><?php echo $error; ?></div>
		<form id="myform" method="post" action="">
			<div class="row">
				<div class="col-sm-6">
					<div>
						<label for="nameid" class="form-label font-weight-bold text-white">Full Name </label>
						<input type="text" class="form-control" placeholder="Enter your full name"id="nameid" name="full_name"required/>
					</div>

					<div>
						<label for="emailid" class="form-label font-weight-bold text-white">Email </label>
						<input type="email" class="form-control" placeholder="Enter your Email" id="emailid" name="user_email"required/>
					</div>

					<div>
						<label for="phoneid" class="form-label font-weight-bold text-white">Phone </label>
						<input type="text" class="form-control" placeholder="Enter your Phone no" id="phoneid" name="user_phone"required/>
					</div>

					<div>
						<label for="addressid" class="form-label font-weight-bold text-white">Address </label>
						<input type="text" class="form-control" placeholder="Enter your Address" id="addressid" name="user_address"/>
					</div>

                    <div class="text-white">
						<label for="genderid" class="form-label font-weight-bold mt-3 text-white">Gender </label>
						<input type="radio" id="genderid" value="male" name="gender" class="ml-5"> Male
						<input type="radio" id="genderid" value="female" name="gender" class="ml-5"> Female
					</div>
					<div>
						<label for="passwordid" class="form-label font-weight-bold text-white">Password </label>
						<input type="password" class="form-control" placeholder="Enter Password" id="passwordid" name="user_pass"required/>
					</div>
					<div>
						<label for="passwordid" class="form-label font-weight-bold text-white">Confirm Password </label>
						<input type="password" class="form-control" placeholder="Retype Password" id="cpasswordid" name="cpass"required/>
					</div>

					<div>
						<label for="dobid" class="form-label font-weight-bold text-white">Date of Birth </label>
						<input type="date" class="form-control"  id="dobid" name="date_of_birth"required/>
					</div>

				</div>
				<div class="col-sm-6">
					<div>
						<label for="ageid" class="form-label font-weight-bold text-white">Age </label>
						<input type="text" class="form-control" placeholder="Enter your age" id="ageid" name="user_age"required/>
					</div>

					<div>
						<label for="heightid" class="form-label font-weight-bold text-white">Height </label>
						<input type="text" class="form-control" placeholder="Enter your height" id="heightid"name="user_height"required/>
					</div>

					<div>
						<label for="weightid" class="form-label font-weight-bold text-white">Weight </label>
						<input type="text" class="form-control" placeholder="Enter your weight" id="weightid" name="user_weight"required/>
					</div>

					

					<div>
						<label for="designationid" class="form-label font-weight-bold text-white">Designation </label>
						<select class="form-control" id="designationid" name="designation" required>
							<option selected>--Select designation--</option>
							<option value="student">Student</option>
							<option value="teacher">Teacher</option>
							<option value="doctor">Doctor</option>
							<option value="engineer">Engineer</option>
							<option value="scientist">Scientist</option>
							<option value="others" >Others</option>
						</select>
					</div>


					<div>
						<label for="bioid" class="form-label font-weight-bold text-white">Bio </label>
						<textarea class="form-control" rows="2" id="bioid" name="bio" placeholder="Write Something about yourself..." required></textarea>
					</div>
					<div>
						<label for="packageid" class="form-label font-weight-bold text-white">Packages </label>
						<select class="form-control" id="packageid" name="packages" required>
							<option selected>--Select one package to do--</option>
							<option value="body building training">Body Building Training</option>
							<option value="fat loss training">Fat Loss Training</option>
							<option value="muscle building training">Muscle Building Training</option>
						</select>
					</div>
					<div>
						<input type="submit" name="submit" value="REGISTER"class="btn btn-success mt-4 p-2 col-sm-12 font-weight-bold " id="registerid"/>
					</div>
					<p class="text-white mt-2 foot">Have an account? <a href="login.php" class="login">login now</a> <span> or </span> <a href="index.php"class="home"> Back To Home</a></p>

				</div>
			</div>
		</form>
		
		
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery.min.js"></script>
	<script src="js/poper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!--  <script src="js/jqajax.js"></script> -->
	<!-- <script type="text/javascript">
		$(document).ready( function() {
			$('#notification').delay(3000).fadeOut();
		});
	</script> -->
</body>
</html>