<?php

ini_set("SMTP","smtp.1and1.com");
ini_set("smtp_port","587");
ini_set("sendmail_from","torsten.andersson.peppa.pig@gmail.com");
ini_set("auth_username", "torsten.andersson.peppa.pig@gmail.com");
ini_set("auth_password", "Mikael123");

$name = $_POST['name'];
$visitor_email = $_POST['email'];
$vilja = $_POST['vilja'];
$anledning = $_POST['anledning'];
$info = $_POST['info'];
  
$to_email = 'name @ company . com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';

if(empty($name)||empty($visitor_email)||empty($vilja)||empty($anledning))
{
	echo "Fyll i alla obligatoriska rutor, tack";
	exit;
	}

$email_from = 'torsten.andersson.peppa.pig@gmail.com';

$email_subject = "Förmulär ifyllt!";

$email_body = "Förmulär ifyllt av $name: $visitor_email, $vilja, $anledning, $info";

$to = "torsten.andersson.peppa.pig@gmail.com";

$headers = "From: $email_from \r \n";

$headers .= "Reply-to: $visitor_email \r \n";

mail('$to', '$email_subject', '$email_body', '$headers'); 

?>
