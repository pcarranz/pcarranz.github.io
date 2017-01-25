<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email
$to = 'pj.carranza4@gmail.com';
$email_subject = "PCarranza.com Contact Form:  $name";
$email_body =
   "A new message has been submitted from the contact form.\n\n".
   "The details:\n\n
   Name: $name\n
   Email: $email_address\n
   Phone: $phone\n\n
   Message:\n
   $message";
$headers = "From: contact@pcarranza.com\n"; // The email address the generated message will be from
$headers .= "Reply-To: $email_address";

mail($to, $email_subject, $email_body, $headers);

return true;
?>
