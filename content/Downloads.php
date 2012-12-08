<style>
#downloads{
	position: absolute;
	top: 220px;
	left: 90px;
	text-align: center;
	height: 226px;
	overflow-x: hidden;
	overflow-y: scroll;
	width: 370px;
}
#downloads a {
	line-height:40px;
	color:#000;
}
#downloads a:hover{
	text-decoration:underline;
}
#downloadInfo{
	color:#666;
	font-size:10px;
	position:absolute;
	top:176px;
	left:90px;
	width:420px;
}
</style>
<h2>Downloads Listing</h2>
<span id="downloadInfo">Click on file for download. If it fails then Right click on the file and select 'Save link as'</span>
<div id="downloads"><?php
	$dir = './../filesForDownload/';
	$i=0;
	if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != '.htacess.txt') {
			$file[$i] = '<a href="./filesForDownload/'.$entry.'" target="downloadFrame">'.$entry.'</a><br>';//Relative path is different becoz tis file is always viewed from Index!
			$i++;
        }
    }
	
	for($i=sizeof($file);$i>0;$i--){
		echo $file[$i-1];
	}
    closedir($handle);
}
?>
<iframe src="" frameborder="0" width="0px;" height="0px;" name="downloadFrame"></iframe>