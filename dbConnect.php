<?php $servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "mygym";

$conn= new mysqli($servername, $username, $dbpassword,$dbname);
$error="";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
?>
