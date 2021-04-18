<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>mygym</title>
</head>

<body>
	<?php 
	include('../dbConnect.php');
	?>

	<?php
	use PHPMailer\PHPMailer\PHPMailer;
	require_once '../phpmailer/Exception.php';
	require_once '../phpmailer/PHPMailer.php';
	require_once '../phpmailer/SMTP.php';

	$mail = new PHPMailer(true);

	include('../dbConnect.php');
	$s="update users set status='Confirm' where user_id='" . $_GET["uid"] . "'";
	mysqli_query($conn,$s);
	
	// header("location:viewenquiry.php");


	if(isset($_GET['uid'])){

		$emailquery ="select * from users where user_id='" . $_GET["uid"] . "'";
		$emails=mysqli_query($conn, $emailquery);
		while($emailsent = mysqli_fetch_assoc($emails)) {
			$emailacc=$emailsent['user_email'];
			$name = $emailsent['full_name'];
			$mobile = $emailsent['user_phone'];
			$address = $emailsent['user_address'];
			$dob = $emailsent['date_of_birth'];
			$age = $emailsent['user_age'];
			$height = $emailsent['user_height'];
			$weight =$emailsent['user_weight'];
			$gender =$emailsent['gender'];
			$designation =$emailsent['designation'];
			$bio =$emailsent['bio'];
			$package =$emailsent['packages'];
			$price =$emailsent['price'];
			$status =$emailsent['status'];


// $email_to = $emailacc;
// $subject = 'Confirmation of booking tour';
// $body = "<h3><b>Tourism</b><br> Arranged a tour for you.<br> Your name: $name.<br>Phone: $mobile.<br>No of days: $days.<br> No of nights: $nights.<br> No of child: $child.<br> No of adults: $adults.<br>Booking status: $status.<br><br>You are most welcome to our services. We provide this tour timely you have to join the with us<br><br><br><br> Thank you.</h3>";
// $headers = "From: redhuanislamron@gmail.com";

// if(mail($email_to,$subject,$body,$headers)){
// 	echo '<script>alert ("Confirmation sent successfully")</script>';
//     echo '<script>window.location="viewenquiry.php"</script>'; 
// }else{
// 	echo '<script>alert ("Something Wrong")</script>';
// 	echo '<script>window.location="viewenquiry.php"</script>';
// }

			try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'give_your_emailaddress_here';                 // SMTP username
$mail->Password = 'give_your_password_here';                         // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('give_your_emailaddress_here');
$mail->addAddress($emailacc);     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Confirmation of Approval';
$mail->Body    = "<h3><b>Eaasy Fitness Club</b><br> Welcome to our gym services.<br> Your name: $name.<br>Phone: $mobile.<br>Address: $address.<br> Gender: $gender.<br> Date of Birth: $dob.<br> Age: $age.<br> Height: $height.<br>Weight: $weight.<br>Designation: $designation.<br>Bio: $bio.<br>Package: $package.<br>Price: $price.<br>Approval status: $status.<br><br>You are most welcome to our services. We provide this tour timely you have to join the with us<br><br><br><br> Thank you.</h3>";

$mail->send();
echo '<script>alert ("Confirmation sent successfully")</script>';
echo '<script>window.location="user-enquery.php"</script>'; 
}
catch(Exception $e){
	echo '<script>alert ("Something Wrong to sent Mail")</script>';
	echo '<script>window.location="user-enquery.php"</script>'; 
}
}
}
// mysqli_close($cn);
?>
</body>
</html>