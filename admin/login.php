
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

$_SESSION['loginstatus']="no";
if(isset($_POST['submit'])){
	 $email = $_POST['username'];
      $mypassword = $_POST['password'];
    
	  $sql =("SELECT * FROM admin WHERE admin_email = '$email' and admin_pass = '$mypassword'");
	  $result = mysqli_query($conn,$sql);
	  
if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
 
	      $_SESSION['admin_email']=$email;
        $_SESSION['admin_type']=$row['admin_type'];
        $_SESSION['loginstatus']="yes";
       
          header("location:index.php");
         
    }
} else {
         $error = "Your Username or Password is invalid";
      }
}
$conn->close();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>mygym</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">
  </head>
  <body style="background-image:url(../images/gallery3.jpg);background-size:cover;">
      
  <div class="login-div">
     <form action="" method="post">
      <div class="logo"></div>
      <div class="title">My Gym</div>
      <div class="sub-title">Time to Fit</div>
      <div style = "font-size:12px; color:red; margin-top:15px" align="center"><?php echo $error; ?></div>
		<div class="fields">
          <div class="username"><img src="../images/username.png" alt="">
              <input type="username" name="username" class="user-input" placeholder="Enter Username"required>
          </div>
          <div class="password"><img src="../images/password.jpg" alt="">
              <input type="password" name="password" class="user-input" placeholder="Enter Password"required>
          </div>
          
      </div>
      <input type="submit" class="sign-in" name="submit"value="Login">
      <div class="link">
          <a href="adminforgot.php" class="forgot">Forgot Password? </a>
      </div>
      </form>
    
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery.min.js"></script>
  <script src="../js/poper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>
</html>