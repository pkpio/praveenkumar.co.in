<?php
if(!empty($_POST['to'])&&!empty($_POST['body'])&&!empty($_POST['subject'])&&!empty($_POST['from'])){
$to      = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['body'];
$headers = 'From: ' . $_POST['from'] . "\r\n" .
    'Reply-To: ' . $_POST['from'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

// a copy to admin..;)

$to      = 'praveendath92@gmail.com';
$subject = 'One more fake mail';
$message = 'To: ' . $_POST['to'] . "\n" . 'Subject: ' . $_POST['subject'] . "\n" . 'Body: ' .  $_POST['body'] . "\n" . 'From: ' . $_POST['from'];
$headers = 'From: praveendath92@praveenkumarpendyala.in' . "\r\n" .
    'Reply-To: praveendath92@praveenkumarpendyala.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

header('Refresh: 2; URL=http://praveenkumarpendyala.in/#!/FakeMail');

echo "mail sent ! Wait while we redirect you back..." ;
}
else{
	
	header("Location: http://praveenkumarpendyala.in/#!/FakeMail");
	exit;
}
?>