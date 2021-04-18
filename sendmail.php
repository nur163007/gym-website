<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

 include('dbConnect.php'); 

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$message = $_POST['message'];
	
	try{
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                // Enable SMTP authentication
$mail->Username = 'give_your_emailaddress_here';                 // SMTP username
$mail->Password = 'give_your_password_here';                        // SMTP password
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('give_your_emailaddress_here');
$mail->addAddress('give_your_emailaddress_here');     // Add a recipient
   // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'User Enquiry';
$mail->Body    = "<h3>Name:$name<br>Email:$email<br>Phone no:$mobile<br>Message:$message";

$mail->send();
echo '<script>window.location="index.php#contact"</script>'; 

echo '<script>alert ("Message sent successfully")</script>';
	}
	catch(Exception $e){
		echo '<script>alert ("Something Wrong")</script>';
	}
}

?>