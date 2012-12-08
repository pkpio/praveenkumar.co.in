<?php
$countFile = './../MDroidStats/MDroidStats.txt';
$handle = fopen($countFile, 'r') or die('Cannot open file:  '.$countFile);
$count = fread($handle,filesize($countFile));
fclose($handle);
$usersCountFile = './../MDroidStats/MDroidUsersStats.txt';
$handle3 = fopen($usersCountFile, 'r') or die('Cannot open file:  '.$usersCountFile);
$usersCount = fread($handle3,filesize($usersCountFile));
fclose($handle3);
?>
<style>
#MDroidContent{
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
#bugIssue{
	word-spacing:2px;
	font-size:13px;
}
#SubHeading{
	font-size:18px;
	color:#018ebc;
	line-height:0px;
}
#AdditionalDescription{
	font-size:12px;
	color:#999;
	text-decoration:none;
}
#ListOfDetails a:hover{
	cursor: pointer;
	text-decoration:underline;
}
#ListOfDetails li{
	padding:4px 0px;
}
#ListOfDetails a{
	text-decoration:none;
	color:#000;
}
</style>

<script>
/*Animated scroller*/

$(document).ready(function(){
	$('a').click(function(){
    $('#MDroidContent').scrollTo( $('#' + $(this).attr('class')), 800 );
});
});
</script>

<h2>MDroid <span id="AdditionalDescription">(Moodle for Android)</span></h2>
<div id="MDroidContent">
<br/>
Tentative release date: 3rd week of July '12<br/>
So far <b><?php echo $count; ?></b> logins from <b><?php echo $usersCount; ?></b> Users. Thanks to all.
<div id="List">
<ul id="ListOfDetails">

<li><a href="javascript:void(0);" class="whatIsMDroid">What's MDroid?</a></li>

<li><a href="javascript:void(0);" class="features">Features</a></li>

<li><a href="javascript:void(0);" class="compatibilityAndDeviceTested">Compatibility</a></li>

<li><a href="javascript:void(0);" class="bestUsageAndDataWarning">Data warning</a><span id="AdditionalDescription"> (work around)</span></li>

<li><a href="javascript:void(0);" class="knownIssues">Known issues and bugs</a></li>

<li><a href="javascript:void(0);" class="Credits">Credits</a></li>

</ul>

<img src="./images/mdroidLogo.png" style="position:absolute; top: 12px; width: 295px;left: 145px;" />
</div>


<div id="whatIsMDroid"><br/>
<h3 id="SubHeading">What's MDroid?:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
MDroid is Moodle for Android. It gives access to all your Moodle contents on your Android phone in a easy to access manner
</div><br>

<div id="features"><br>
<h3 id="SubHeading">Features:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
<ul>
<li>Expected to work on all Moodle servers
	<ul><li>Tested on <a href="http://moodle.iitb.ac.in" target="_blank">IIT Bombay Moodle</a></li>
    <li>Tested on <a href="http://www.cse.iitm.ac.in/moodle" target="_blank">IIT Madras CSE Moodle</a></li></ul></li>
<li>Listing all courses</li>
<li>Listing course files
	<ul><li>From Resources</li>
    <li>From forums</li>
    </ul></li>
<li>Access to forums
	<ul><li>Listing all discussion threads</li>
    	<li>Viewing the complete discussion of any thread</li>
        </ul></li>
<li>Showing the date times
	<ul>
    <li>Date time of each activity on forums</li>
    <li>Last modified dates for offline files</li>
    </ul></li>
<li>Displaying author names</li>
	<ul><li>In forum threads</li>
    <li>In forum dicussions</li></ul>
<li>Parllel downloads (up to 2 at a time)</li>
<li>Save your username and password and autologin on next usage(only if you wish)</li>
<li>Offline mode</li><br />
And a few others which include<br /><br />
<li>No FC issues</li>
<li>No UI freezes</li>
<li>Simple look and user friendly</li>
</ul>
</div>

<div id="compatibilityAndDeviceTested"><br>
<h3 id="SubHeading">Compatibility and Devices Tested:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription">(<u>Up</u>)</span></a></h3>
MDroid works on 99.3% of the Android devices in the world as seen from stats on <a href="http://developer.android.com/about/dashboards/index.html" target="_blank">Android Developers site</a>. which I believe would be like 100% of Android devices in the Institute<br/>

<h3 id="SubHeading" style="font-size:15px">Compatible Android Versions:</h3>
<table align="center">
<tr><td>Android 2.1</td><td width="20px">-</td>
<td>Eclair</td></tr>

<tr><td>Android 2.2</td><td width="20px">-</td>
<td>Froyo</td></tr>

<tr><td>Android 2.3 - 2.3.7</td><td width="20px">-</td>
<td>Gingerbread</td></tr>

<tr><td>Android 3.1 - 3.2</td><td width="20px">-</td>
<td>Honeycomb</td></tr>

<tr><td>Android 4.0 - 4.0.4</td><td width="20px">-</td>
<td>Ice Cream Sandwich</td></tr>

<tr><td>Android 4.1</td><td width="20px">-</td>
<td>Jelly bean (up coming)</td></tr></table>

<h3 id="SubHeading" style="font-size:15px">Tested devices:</h3>
<ul>
<li>Samsung Galaxy S2 - running on ICS 4.0.3, ICS 4.0.4, GB 2.3.3</li>
<li>HTC One X - running on ICS 4.0.4</li>
<li>Xperia X10 - running on GB 2.3.3</li></ul>
I'm still running tests on other devices. However we strongly believe that it works fine on all devices
</div><br/>


<div id="bestUsageAndDataWarning"><br/>
<h3 id="SubHeading">Data usage warning:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
<h3 id="SubHeading" style="font-size:15px; color:#F00; padding-top:10px;">Data warning!</h3>
MDroid fetches contents by going through the required Moodle webpages. So, it will have a slightly heavy data usage depending upon your usage<br />
Don't panic! We have a work around for that!<br/>
<h3 id="SubHeading" style="font-size:15px;">Work around</h3>
It is highly recommended for the users to make use of the Institute Internet speeds/Wifi connection on your phone<br/>
How? very simple! Just follow below steps<br/>
<ul><li>Lemme tell, you do NOT have to ROOT your phone for this</li>
<li>Connect to any of the institute Wifi's or create one for yourself using connectify</li>
<li>Expecting more? sorry to disappoint but that is it! Just connect and use the app!</li></ul>
</div><br/>

<div id="knownIssues"><br/>
<h3 id="SubHeading">Bugs and Known issues<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
No bugs/issues presently! Thanks to Raghavendra.<br /><br />
Bugs/issues history:
<ul><li>FC issue#1 - <span id="bugIssue">(as on 03/07/12 18:00 by Developer)</span><br /><br />
<b>Description: </b>App FCs on scrolling the downloading file out of screen <br/>
<b>Status: </b>Resolved <span id="bugIssue">(by 4th June '12 3:00 AM)</span><br />
<b>Solution: </b> Just fixed a NULLPOINTER exception
</li><br/>

<li>Parllel/ serializing downloads - <span id="bugIssue">(as on 03/07/12 18:00 by Developer)</span><br /><br />
<b>Description: </b>Downloading a new file while another downloading ongoing will stop the ongoing download and states as downloaded!<br/>
<b>Status: </b>Resolved <span id="bugIssue">(by 4th June '12 3:00 AM)</span><br />
<b>Solution: </b> Parllel downloading added. Upto 2 files at a time
</li><br/>

<li>FC issue#2 - <span id="bugIssue">(as on 03/07/12 18:00 by Developer)</span><br /><br />
<b>Description: </b>MultiThreading problem! Going back and opening a course when a web request is ongoing will FC the app<br/>
<b>Status: </b>Resolved <span id="bugIssue">(by 4th June '12 3:00 AM)</span><br />
<b>Solution: </b> It was not a multithreading problem as mentioned, Its problem with httpConnectionManager. Resolved by adding ThreadSafeConnectionManager
</li>

</ul>


These are the bugs I found till now. If you find any bug(s) or have suggestions to make please mail me.<br/>
Email Id : praveendath92@praveenkumarpendyala.in
</div><br/>

<div id="Credits"><br/>
<h3 id="SubHeading">Credit<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
MDroid and all its related data, which include video demos, snaps shots, website data, logos and the application, are developed by Praveen Kumar Pendyala. Special thanks to Raghavendra Bommaraju, Dept. of CSE, IIT Madras and all my friends who helped me in this work.
</div>


</div>