<?php
//if(!empty($_GET['accessCode'])&&$_GET['accessCode']=="showThyself"){
?>
<head>
<link href='../praveen.ico' rel='icon' type='image/x-icon'/>
<title>Praveen's Resume</title>
</head>
<body style="height:100%; width:99%">
<a href="../" style="color:#000; float:left;">Visit Praveen's Site</a>
<p align="center" style="color:#0076CD; font:16px arial,sans-serif;">Praveen Kumar Pendyala's Resume</p>
<iframe src="resume.pdf" height="95%" width="100%" frameborder="0">Loading resume..Please wait...</iframe>
</body>

<?php
//}else{
?>
<head>
<link href='../praveen.ico' rel='icon' type='image/x-icon'/>
<title>Praveen's Resume - Authenication</title>
<style>
#blueButton {
	font-size: 12px;
	position:relative;
	top:-36px;
	background: #0b8fb5;
	color: white;
	font-weight: 500;
	font-style: normal;
	border: 0;
	cursor: pointer;
	width: 120px;
	height: 30px;
	appearance:none;
	-webkit-appearance:none;
}
#blueButton:hover {
	background: #119dc4;
	-moz-box-shadow: 0px 0px 6px #3F9BBF;
	-webkit-box-shadow: 0px 0px 6px #3F9BBF;
	box-shadow: 0px 0px 6px #3F9BBF;
}
</style>
<body style="width:99%">
<p align="center" style="background-color:#3F9BBF; padding:5px; margin:0px 20px; color:#FFFFFF;">Need an access code to view this document!</p>
<div align="center">
<form action="../resume/" method="get">
<input name="accessCode" type="text" style="padding:10px;width:300px;text-align:center;margin:60px;font:16px arial,sans-serif" placeholder="Access code"/><br />
<input type="submit" id="blueButton" value="Grant access" />
</form>
</div>
</body>
<?php
//}
?>
