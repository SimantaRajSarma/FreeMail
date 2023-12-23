<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;									 
	$mail->isSMTP();										 
	$mail->Host	 = 'smtp.gmail.com';					// Use Gmail SMTP server
	$mail->SMTPAuth = true;							 
	$mail->Username = 'simantarajsarma07@gmail.com';			// Your Gmail email address
	$mail->Password = 'gtdx tvwl sgnt uksw';					// Your Gmail password
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	// Modify the email content to include form data
	$mail->Subject = 'Contact Form Submission';
	$mail->Body = "Name: $name<br>Email: $email<br>Message: $message";
	// Other mail settings

	// Set the sender's email address dynamically
	$mail->setFrom('arupsarmah21@gmail.com', 'Dr. Arup Sarmah');

	// Add recipient email addresses (you can customize this based on your needs)
	$mail->addAddress('simantarajsarma@gmail.com', 'SIMANTA');
	$mail->addAddress($email, $name);


	// Send the email
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
} else {
    // Redirect or handle non-POST requests as needed
    echo "Invalid request method.";
}



?>
