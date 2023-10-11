<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email  = filter_email_header($email);

$subject = "Inquiry from $name";
$headers = "From $email";

$sent = mail('delta.robocraft@gmail.com', $subject, $text, $headers);

if($sent){
	header('Location: index.html');
}
?>