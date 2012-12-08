<html>
<head>
<title>Fake Mailer by Praveen</title>
</head>
<body>
<?php
if(!empty($_POST['to'])&&!empty($_POST['body'])&&!empty($_POST['subject'])&&!empty($_POST['from'])){
$to      = $_POST['to'];
$subject = $_POST['subject'];
$message = $_POST['body'];
$headers = 'From: ' . $_POST['from'] . "\r\n" .
    'Reply-To: ' . $_POST['from'] . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo "mail sent ! " ;
}
else{
?>
<form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">
<table align="center">
<tr><td>To :</td><td><input name="to" type="text" size="50" /></td></tr>
<tr><td>Subject :</td><td><input name="subject" type="text" size="50" /></td></tr>
<tr><td>Body :</td><td><textarea name="body" cols="50" rows="50"></textarea></td></tr>
<tr><td>From :</td><td><input name="from" type="text" size="50" /></td></tr>
<tr><td align="center"><input name="" type="reset" /></td><td align="center"><input name="" type="submit" /></td></tr>
</table>
</form>
<?php
}
?>
<h3 align="center">Developed by :: <a href="http://www.facebook.com/pamarru">Praveen Kumar Pendyala</a></h3>
</body>
</html>