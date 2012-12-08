<style>
#Greed4SpeedContent{
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
	font-size:12px;
	color:#999;
	text-decoration:none;
}
</style>
<h2>Greed4Speed</span></h2>
<div id="Greed4SpeedContent">
<h3 id="SubHeading">Idea:</h3>
To make a 7-lane car racing game that can be controlled by an onboard G-sensor using a De0nano FPGA board.<br><br>

<h3 id="SubHeading">Developers:</h3>
Praveen Kumar Pendyala,<br />
Sabareesh Nikhil C<br />
Sanath Kuppa<br/>
as project of EE 214 : Digital Circuits Lab<br><br> 

<h3 id="SubHeading">Working Demos:</h3>
<iframe width="400" height="225" src="http://www.youtube.com/embed/KUl72Uz-bbE" frameborder="0" allowfullscreen></iframe>
<iframe width="400" height="225" src="http://www.youtube.com/embed/8FEzSew81fM" frameborder="0" allowfullscreen></iframe><br><br>

<h3 id="SubHeading">Functionality and Working:</h3>
<ul><li>There will be main car which is to be controlled by the user</li>
<li>Control of the car is done using an 'Onboard G-sensor of FPGA'(accelerometer) which makes it more fun!</li>
<li>AIM is to avoid the on coming traffic to the maximum amount of time he can</li>
<li>There are 7 lanes with on-coming traffic in which user can move his car</li>
<li>Just side ways movement</li></ul><br>


<h3 id="SubHeading">Implementation:</h3>
All the logic to control the game was coded in Verilog and burnt onto a DE0nano FPGA board. We used a Graphics LCD - JHD12864E for display 
and an onboard 2D G-sensor, we are using only one axis for our requirement to control the main car. All the project files can be found as a bundle in the <a href="http://home.iitb.ac.in/~praveendath92/#!/Downloads" target="_blank">Downloads page</a> named as 'Greed4Speed project bundle'
</div>