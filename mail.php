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
	// $mail->SMTPDebug = 2; 									 
	$mail->isSMTP();										 
	$mail->Host = 'smtp.gmail.com';					// Gmail SMTP server
	$mail->SMTPAuth = true;							 
	$mail->Username = 'example@gmail.com';			// Your email address
	$mail->Password = 'your app password';					// Your App password
	$mail->SMTPSecure = 'tls';							 
	$mail->Port = 587; 

	// Modify the email content to include form data
	$mail->Subject = 'Hi ' . $name;
	$mail->Body = $message;
	// Other mail settings

	// Add recipient email addresses (you can customize this based on your needs)
	$mail->addAddress('example@gmail.com', 'SIMANTA');
	$mail->addAddress($email, $name);


	// Send the email
	$mail->send();
	// Output HTML with JavaScript alert
	echo '<script>';
	echo 'alert("Mail has been sent successfully!");';
	echo 'window.location.href = "index.html";'; // Redirect after showing the alert
	echo '</script>';
	
} catch (Exception $e) {
	// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	echo '<script>';
	echo 'alert("Mail could not be send. Try Again!");';
	echo 'window.location.href = "index.html";'; // Redirect after showing the alert
	echo '</script>';
}
} else {
    // Redirect or handle non-POST requests as needed
    echo "Invalid request method.";
}

?>
