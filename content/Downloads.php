<?php
function _format_bytes($size)
{
    if ($size < 1024) {
		$sizeString = $size." Bytes";
    } elseif ($size < 1048576) {
		$sizeString = round($size/1024, 2)." KB";
    } else {
		$sizeString = round($size/1048576, 2)." MB";
    }
	return $sizeString;
}

function isDownloadFile($file){
	$flag = false;
	
	// -TODO- Make an array of non-allowed files and loop
	if($file != ".")
		$flag = true;
		
	if($flag && $file != "..")
		$flag = true;
	else
		$flag = false;
		
	if($flag && $file != '.htacess.txt')
		$flag = true;
	else
		$flag = false;
		
	if($flag && $file != 'index.php')
		$flag = true;
	else
		$flag = false;
		
	return $flag;	
	
}
?>
<style>
#downloads {
	position: absolute;
	top: 175px;
	left: 68px;
	text-align: left;
	height: 290px;
	overflow-x: hidden;
	overflow-y: scroll;
	width: 421px;
}
#downloads a:hover {
	text-decoration:none;
}
#downloadItem {
	color: #000000;
	padding:5px 5px 5px 5px;
	margin:4px 4px 4px 6px;
}
#downloadItem:hover {
	-moz-box-shadow: 0px 0px 12px #3F9BBF;
	-webkit-box-shadow: 0px 0px 12px #3F9BBF;
	box-shadow: 0px 0px 12px #3F9BBF;
	background-color: #3F9BBF;
	color: white;
}
.fileSize {
	font-size:11px;
	text-align:left;
}
.dateModified {
	font-size:11px;
	position: absolute;
	right: 8px;
}
</style>
<h2>Downloads Listing</h2>
<div id="downloads">
<a href="http://home.iitb.ac.in/~sanath.kuppa/Android%20development%20kit%20complete.zip" target="_blank"><div id="downloadItem"><span class="fileName">Android development session</span><br/>
<span class="fileSize">489.05 MB</span><span class="dateModified">23 January 2013 16:52</span></div></a>
<?php
	$dir = './../files/';
	$i=0;
	if ($handle = opendir($dir)) {
    while (false !== ($entry = readdir($handle))) {
        //if ($entry != "." && $entry != ".." && $entry != '.htacess.txt') {
		if(isDownloadFile($entry)){
			$filePath = $dir.$entry;
			$file[$i] = '<a href="http://files.praveenkumar.co.in/'.$entry.'" target="_blank">
			<div id="downloadItem"><span class="fileName">'.$entry.'</span><br/>
			<span class="fileSize">'._format_bytes(filesize($filePath)).'</span>
			<span class="dateModified">'.date ("d F Y H:i", filemtime($filePath)).'</span>
			</div>
			</a>';//Relative path is different becoz tis file is always viewed from Index!
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
