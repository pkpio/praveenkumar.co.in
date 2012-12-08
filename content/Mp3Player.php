<style>
#Mp3PlayerContent{
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
</style>
<h2>Mp3 Player</h2>
<div id="Mp3PlayerContent">
<h3 id="SubHeading">Project Idea:</h3>
Building a 'Music Player' from scratch, both hardware and Software, using an 89c5132 Microcontroller<br><br>

<h3 id="SubHeading">Features expected:</h3>
<ul><li>Reading Music  filelist/a Music file from SD Card (mostly in FAT16 format)</li>
<li>Playing a selected MP3/WAV file</li>
<li>A 2-line-graphical-display to display the filelist</li>
<li>A Keypad with Up, Down, Play, Pause keys</li>
<li>An  amplifier circuit to control the Volume out levels</li></ul><br>

<h3 id="SubHeading">Time line of work:</h3>
<ul><li>We started off with reading the Datasheet of our Microcontroller (89c5132) and Assembly, C coding specific to its family (8051)</li>
<li>The initial phsae was more about the hardware stuff, as in, We got a PCB design document in EAGLE, with that as a reference we made our Hardware on a bread board</li>
<li>Then we started interfacing our 89c5132 Microcontroller circuit with different Slaves</li>
<li>So far we interaced with Graphical Display, Hexpad using Assembly initially and then we switched to C-language</li>
<li>Presently we are interacing SD card, for which we got a few libraries, we are testing their working and later implement them in our project</li>
<li>Parallelly we are also working on the Audio interacing for playing 'WAV' format files</li>
<li>In parllell with the above two, we are also building our Amplifier circuit for Enchanced Audio out and Volume control</li></ul>

</div>
