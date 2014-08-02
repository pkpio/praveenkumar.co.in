<?php


$from = "iitblit@praveenkumar.co.in";
$to = $_POST["ldap"]."@iitb.ac.in";
$message = "Hello !<br>Your verification code is: ".$_POST["code"];
$subject = "IITB Lit verification";

//this is a path to PHP mailer class you have dowloaded

include("class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // set mailer to use SMTP

$mail->Host = "smtp-auth.iitb.ac.in"; // specify main and backup server

$mail->Port = 25;

$mail->SMTPAuth = true; // turn on SMTP authentication

$mail->SMTPSecure = "tls";

$mail->Username = "praveendath92"; // SMTP username

$mail->Password = "plvsspamar%@%"; // SMTP password

$mail->From = "$from"; //do NOT fake header.

$mail->FromName = "IITB Lit Verification";

$mail->AddAddress("$to"); // Email on which you want to send mail

//$mail->AddReplyTo("Reply to Email ", "Support and Help"); //optional

$mail->IsHTML(true);

$mail->Subject = "$subject";

$mail->Body = "$message";

if(!$mail->Send())

{

echo $mail->ErrorInfo;

}else{

echo "success";

}

?>