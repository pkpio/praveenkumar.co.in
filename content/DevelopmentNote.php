<style>
#DevelopmentNoteContent{
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
#SubHeading{
	font-size:18px;
	color:#018ebc;
	line-height:0px;
}
#AdditionalDescription{
	font-size:9px;
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
    $('#DevelopmentNoteContent').scrollTo( $('#' + $(this).attr('class')), 800 );
});
});
</script>
<h2>Development Note</h2>
<div id="DevelopmentNoteContent">
<h3 id="SubHeading">What do you find here?</h3>
This section will give you the following information, about this site ofcourse.<br/>

<div id="List">
<ul id="ListOfDetails">

<li><a href="javascript:void(0);" class="Inspiration">Insipiration</a><span id="AdditionalDescription"> (for Developing this)</span></li>

<li><a href="javascript:void(0);" class="WhatsSpecial">Whats Special?</a> <span id="AdditionalDescription"> (Visually and Techincally)</span></li>

<li><a href="javascript:void(0);" class="TechnologiesUsed">Technologies and Tools</a></li>

<li><a href="javascript:void(0);" class="WhereUsed">Where are they used?</a><span id="AdditionalDescription"> (Technologies and Tools, I mean)</span></li>

<li><a href="javascript:void(0);" class="KnownBugs">Known Bugs</a> <span id="AdditionalDescription"> (In site's behaviour)</span></li>

<li><a href="javascript:void(0);" class="Credits">Credits</a></li>

<li><a href="javascript:void(0);" class="Disclaimer">Disclaimer</a></li>

<li><a href="javascript:void(0);" class="DeveloperSpeaks">Developer Speaks</a> <span id="AdditionalDescription"> (As though I never did ;))</span></li>

</ul></div>


<div id="Inspiration"><br>
<h3 id="SubHeading">Inspiration:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
There is nothing that has particularly inspired me to build this site. Its more of self interest or I better say its my wish to have one like this, that has greatly motivated me to come up with this piece of work!
</div><br>

<div id="WhatsSpecial"><br>
<h3 id="SubHeading">Whats Special?:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
<ul>
<li>A score of 91(out of 100) in Google PageSpeed report <span id="AdditionalDescription">(<a href="https://developers.google.com/speed/pagespeed/insights#url=http_3A_2F_2Fhome.iitb.ac.in_2F~praveendath92&mobile=false" target="_blank">Click here for report</a>)</span> while Facebook has 98 <span  id="AdditionalDescription">(close enough for this solo dev site. Admit it ;))</span></li>
<li>No client side high priority issues as mentioned in Google PageSpeed report</li>
<li>Ajax load of contents and avoiding an unnecessary full reload unlike many sites</li>
<li>Self made counter <span id="AdditionalDescription">Easy to make though</span></li>
<li>Optimised images size</li>
<li>Use of many different web technologies</li>
<li>Umm...looks cool <span id="AdditionalDescription">Doesn't it?</span></li>
</ul>
</div><br>

<div id="TechnologiesUsed"><br>
<h3 id="SubHeading">Technologies and Tools:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
<ul>
<li>HTML</li>
<li>css/css3</li>
<li>js</li>
<li>jquery library</li>
<li>jqueryscrollto <span id="AdditionalDescription">(written using Jquery library)</span></li>
<li>php</li>
<li>Google Maps API v3</li>
<li>Feed burner</li>
<li>WOW Slider</li>

</div><br>

<div id="WhereUsed"><br>
<h3 id="SubHeading">Where are they used?:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
<ul>
<li>AJAX - In loading contents of any section</li>
<li>JQuery - for all the animations and AJAX requests</li>
<li>Google Maps API - Contact me</li>
<li>Feed burner - Blog</li>
<li>WOWSlider - Gallery</li>
<li>jqueryscrollto - For scrolling effects</li>
<li>php - Presently just for site count using fread, fwrite</li>
</ul>


</div><br>

<div id="KnownBugs"><br>
<h3 id="SubHeading">Known Bugs:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
<ul>
<li>Doesn't look alike in all resolutions</li>
<li>Bad behaviour on zoom-in, zoom-out</li>
<li>Undesired overlapping on resizing</li>
<li>Animates doesn't run smoothly <span id="AdditionalDescription">(Some times)</span></li>
<li>Hovering +1 button brings up a side scroll bar</li>
</ul>
Found a bug? Not in the above list? Nice! you are just a step away from doing a great job! report to the Dev and claim your credit!
<span id="AdditionalDescription">Condition apply* :P</span>
</div><br>

<div id="Credits"><br>
<h3 id="SubHeading">Credits:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
Though I'm the solo developer of the entire site there is someone who helped in the content verification. Someone who doesn't want their name to be quoted! I'm so thankful to that person!
</div><br>

<div id="Disclaimer"><br>
<h3 id="SubHeading">Disclaimer:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
All the Techonologies and Tools used in the development are either OpenSources or made freely available for non-commercial usage by their developers. However if you find any piece of content in the site that is/are against their terms of use and if you think you possess its rights on usage (:P) Please contact the Dev.
</div><br>

<div id="DeveloperSpeaks"><br>
<h3 id="SubHeading">Developer speaks:<a href="javascript:void(0);" class="List"><span id="AdditionalDescription"> (<u>Back to list</u>)</span></a></h3>
Wanna say something out of my experience, Not specific to this site though. General to any cool peice of work. Did you ever want to develop something? There are many ways to do it ofcourse. However If you wanna make something cool, remember, though its a pain in the ass for the dev to bother even for the minute things, You(as the dev) better get over that and comeup with a solution where you won't 'compromise' on your actual idea. Be it a small thing! But remember NOT to compromise on the functionality you thought of!<br><br>

If you find any errors in the site, Kindly bring to my notice. <br><br>
EmailID: praveendath92@praveenkumarpendyala.in
</div><br>

</div>