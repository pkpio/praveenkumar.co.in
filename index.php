<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="description" content="Awesome page! Praveen Kumar Pendyala's Home page. Undergraduate from department of Electrical Engineering, IIT Bombay. Contents:  Fakemailer, Home, About me, Interests : coding and electronics, How is this developed? A cool page!" />
<meta name="keywords" content="praveen,kumar,pendyala,miki,iitb,iit,iitbombay,electrical,ee,iit bombay,ece,eee,ee,fake,mailer,script,web,developer,android" />
<meta name="author" content="Praveen Kumar Pendyala" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='praveen.ico' rel='icon' type='image/x-icon'/>
<link href='http://fonts.googleapis.com/css?family=Average' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/MainPage.css" />
<!--<link rel="stylesheet" type="text/css" href="css/fonts.css" />-->
<style>
/*   FOr loading fonts  */
@font-face {
  font-family: 'Short Stack';
  font-style: normal;
  font-weight: 400;
  src: local('Short Stack'), local('ShortStack'), url('http://themes.googleusercontent.com/static/fonts/shortstack/v3/6Lbgh4PDdLpSiP41rQoGa4bN6UDyHWBl620a-IRfuBk.woff') format('woff');
}
</style>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/js-styling.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
<title>Praveen's Site</title>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=262803340451000";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<img src="loader.gif" id="loadingImage" style="
	position:absolute;
	visibility:visible;
	top:260px;
	left:585px;
	z-index:99999;" />
    
<div id="loadingStatus">
Loading main scripts.
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-30714465-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<div id="Main">
<a href="#"><div id="Profile"></div></a>


<a href="#"><div id="Home" class="MainLink"><div class="MainLinkText" style="position:relative;top:64px;left:50px;">Home</div></div></a>

<a href="#"><div id="ContactMe" class="MainLink"><div class="MainLinkText" style="position:relative;top:64px;left:40px;">Contact Me</div></div></a>

<a href="#"><div id="AboutMe" class="MainLink"><div class="MainLinkText" style="position:relative;top:70px;left:36px;">About Me</div></div></a>

<a href="#"><div id="Blog" class="MainLink"><div class="MainLinkText" style="position:relative;top:70px;left:60px;">Blog</div></div></a>

<a href="#"><div id="Works" class="MainLink"><div class="MainLinkText" style="position:relative;top:75px;left:50px;">Works</div></div></a>

<a href="#"><div id="Gallery" class="MainLink"><div class="MainLinkText" style="position:relative;top:75px;left:50px;">Gallery</div></div></a>

<div id="Content"><div id="ContentText"></div>

<script>
/*-------------------Loading status messages!!----------------------*/
$(document).ready(function() {
	  document.getElementById("loadingStatus").innerHTML="<span id='presentLoading'>Loading main scripts..</span>";
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....';", 150);
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....done!;", 300);
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....done!<br>Loading Framework..';", 400);
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....done!<br>Loading Framework....';", 550);
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....done!<br>Loading Framework....done!';", 800);
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....done!<br>Loading Framework....done!<br>Fetching Images and page content..';", 950);
	  setTimeout("document.getElementById('loadingStatus').innerHTML='Loading main scripts....done!<br>Loading Framework....done!<br>Fetching Images and page content....done!<br>Loading social plugins..';", 1400);
	}); </script>

</div>
<script>
function start() {
	  document.getElementById("loadingStatus").innerHTML="Loading main scripts....done!<br>Loading Framework....done!<br>Fetching Images and page content....done!<br>Loading social plugins....done!<br>All done!";
	  setTimeout("document.getElementById('loadingImage').style.visibility='hidden';", 400);	
	  setTimeout("document.getElementById('loadingStatus').style.visibility='hidden';", 400);	
	  setTimeout("document.getElementById('Main').style.visibility='visible';", 600);
	  $url = document.location.href.split("#!/");
	  $url = $url[1];
	  if(document.location.href.indexOf("#!/")>0){
	  
	  /*content loading and error reporting */
	  $('#ContentText').load('content/'+$url+'.php', function(response, status, xhr) {
  			if (status == "error") {
    		var msg = "Sorry but we couldn't fetch the page your are looking for! there was an error: ";
    		$("#ContentText").html("<span id='error'>" + msg + "<h3 style='color:#F00;' align='center'>" +xhr.status + " " + xhr.statusText + "</h3><br/>If you have got here following a link somewhere please notify <a href='http://home.iitb.ac.in/~praveendath92/#!/ContactMe' target='_new' >Praveen Kumar</a> (<a href='https://www.facebook.com/pamarru'>Alternative contact</a>)</span>");}});
			
	  /*Animate now...*/
	  	setTimeout("contentShowAnimation();", 400);
		  
			
	  }
			
			
}
window.onload = start; 
</script>

<div id="Facebook" class="social"><img src="FacebookIcon.png" style="width:48px; height:44px;" />
	<div class="fb-like" data-href="http://home.iitb.ac.in/~praveendath92/" data-layout="button_count" data-width="450" data-show-faces="false" data-font="verdana" style="position:relative; top:-28px; left:-1px; z-index:-1;"></div>
    <div class="fb-like" data-href="http://home.iitb.ac.in/~praveendath92/" data-layout="button_count" data-width="450" data-show-faces="false" data-font="verdana" style="position:relative; top:-48px; left:84px"></div>
</div>
	
<div id="GooglePlus" class="social"><img src="google+.png" style="width:48px; height:44px;" />
	<div style="position:relative; top:-34px; left:11px; z-index:-1"><g:plusone></g:plusone></div>
    <div style="position:relative; top:-97px; left:84px;"><g:plusone size="tall"></g:plusone></div>
</div>
	
<div id="Twitter" class="social"><img src="twitter.png" style="width:48px; height:44px;" />
	<div style="position:relative; top:-32px; left:-12px; z-index:-1"><a href="https://twitter.com/share" class="twitter-share-button" data-via="twitterapi" data-lang="en">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
    <div style="position:relative; top:-52px; left:82px;"><a href="https://twitter.com/share" class="twitter-share-button" data-via="praveendath92" data-dnt="true">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
</div>

<div id="siteHits" class="social"><img src="hits.png" style="width:48px; height:44px;" />
<!--Counter read and write after increasing-->
<?php
$countFile = 'count.txt';
$handle = fopen($countFile, 'r') or die('Cannot open file:  '.$countFile);
$count = fread($handle,filesize($countFile));
$count++;
fclose($handle); 
$handle2 = fopen($countFile, 'w') or die('Cannot open file:  '.$countFile);
fwrite($handle2, $count);
fclose($handle2); 
?>
	<div style="position:relative; top:-32px; left:45px; z-index:-1"><img src="counter.png" style="width:66px; height:20px;" /></div>
    <div style="position:relative; top:-49px; left:58px;font-family: monospace;font-size: 12px;"><?php echo $count; ?></div>
    <div style="position:relative;top: -65px;left: 110px;font-family: monospace;font-size: 12px;">Hits</div>
</div>

</div>

<div id="footer1"><hr/>
<div id="footerText">
<ul class="credit">
    <li><a id="DevelopmentNote" class="MainLink" style="cursor: pointer;">Development Note</a></li>
    <li> | </li> 
    <li><a id="Downloads" class="MainLink" style="cursor: pointer;">Downloads</a></li>
    <li> | </li> 
    <li><a id="FakeMail" class="MainLink" style="cursor: pointer;">Fake Mailer</a></li></ul>
<ul class="social">
					<li><a href="http://www.facebook.com/pamarru" target="_new">Facebook</a></li>
                    <li> | </li>
					<li><a href="https://twitter.com/#!/praveendath92" target="_new">Twitter</a></li>
                    <li> | </li>
					<li class="last"><a href="https://plus.google.com/107979446898822449848/posts" target="_new">Google +</a></li>
</ul>
<p style="position: absolute;top: 25px;left: 40%;">Developed from scratch by : Praveen Kumar Pendyala</p>
<script>
/*Animated scroller*/

$(document).ready(function(){
	$('li.ScrollDirect').click(function() {
	  $.scrollTo($('div#Inspiration'), 500);
	  })
});
</script>
</div>
</div>
</div>

</body>
</html>