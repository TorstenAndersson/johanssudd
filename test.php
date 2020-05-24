<?php

    require "C:\wamp64\www\Johanssudd.se\PHP_Mailer\wendor\phpmailer\phpmailer\src\PHPMailer.php";
    require "C:\wamp64\www\Johanssudd.se\PHP_Mailer\wendor\phpmailer\phpmailer\src\SMTP.php";
    require "C:\wamp64\www\Johanssudd.se\PHP_Mailer\wendor\phpmailer\phpmailer\src\Exception.php";
	
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 

    $mail->CharSet="UTF-8";
    $mail->Host = "ssl://smtp.google.com";
    $mail->SMTPDebug = 2; 
    $mail->Port = 587; //465 or 587

    $mail->SMTPAuth = true; 
    $mail->IsHTML(true);

    //Authentication
    $mail->Username = "torsten.andersson.peppa.pig@gmail.com";
    $mail->Password = "Mikael123";

    //Set Params
    $mail->SetFrom("torsten.andersson.peppa.pig@gmail.com");
    $mail->AddAddress("mikael.deverdier@gmail.com");
    $mail->Subject = "Test";
    $mail->Body = "<p>hey</p>";

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
	 
	 phpinfo();
?>