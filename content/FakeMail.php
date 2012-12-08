<head>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25507987-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<h2>Fake mailer!</h2>
<style>
#FakeMailContent{
	position: absolute;
	top: 170px;
	left: 80px;
	width: 420px;
	height: 300px;
	overflow-x: hidden;
	overflow-y: scroll;
	word-spacing: 3px;
	letter-spacing: 0px;
	line-height: 22px;
	font-size:15px;
}
#AdditionalDescription{
	font-size:9px;
	color:#999;
	text-decoration:none;
}
#SubHeading{
	font-size:18px;
	color:#018ebc;
	line-height:0px;
}
#FakeMailContentInput{
	padding:7px 15px 7px 15px;
	width:250px;
	border-width: 1px;
	border-radius: 7px;
}
.sendbutton {
	font-size: 12px;
	background: #00C400;
	color: white;
	font-weight: 500;
	font-style: normal;
	border: 0;
	cursor: pointer;
	width: 90px;
	height: 20px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	position: relative;
	left: 25px;
}
.sendbutton:hover {
	background: #008400;
	}
.resetbutton {
	font-size: 12px;
	background: #FF5151;
	color: white;
	font-weight: 500;
	font-style: normal;
	border: 0;
	cursor: pointer;
	width: 90px;
	height: 20px;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	position: relative;
	left: 64px;
}
.resetbutton:hover {
	background: #F00000;
	}	
</style>
<div id="FakeMailContent">
<form action="http://praveenkumarpendyala.in/fakemail.php" method="post">
<table align="center">

<tr><td style="color:#FF4848">From :</td>
	<td><input name="from" type="text" id="FakeMailContentInput" style="color:#FF4848;border-color: #FF4848;" /></td></tr>

<tr><td style="color:#00BF60">To :</td>
	<td><input name="to" type="text"id="FakeMailContentInput" style="color:#00BF60;border-color: #00BF60;" /></td></tr>

<tr><td style="color:#0076CD">Subject :</td>
	<td><input name="subject" type="text" id="FakeMailContentInput" style="color:#0076CD;border-color: #0076CD;" /></td></tr>

<tr><td style="color:#0076CD">Body :</td>
	<td><textarea name="body" id="FakeMailContentInput" style="height:122px;color:#0076CD;border-color: #0076CD; resize: none;"></textarea></td></tr>

<tr><td align="center"><input value="Reset" type="reset" class="resetbutton" /></td>
	<td align="center"><input type="submit" value="Send" class="sendbutton" /></td></tr>
    
<tr><td colspan="2">Developed by :: Praveen Kumar Pendyala</td></tr>
</table>
</form>
</div>