<?php
$title = $_POST['title'];
$lat = $_POST['lat'];
$lng = $_POST['lng'];
$phoneno = $_POST['phoneno'];
$website = $_POST['website'];
$otherinfo = $_POST['otherinfo'];
$website = $_POST['website'];
$otherinfo = $_POST['otherinfo'];
$ldapid = $_POST['ldapid'];
$ldap_pass = $_POST['ldappswd'];
$ldap_uid = $ldapid;

//Blocking spamming LDAP's
if($ldap_uid=='ravindra.m'){
	die("This LDAP id is blocked from adding any data. Good try though :P");
}

//LDAP validation
$ds = ldap_connect("ldap.iitb.ac.in") or die("Unable to connect to LDAP server. Please try again later.");
if($ldap_uid=='') {
	 die("You have not entered any LDAP ID. Please go back and fill it up.");
}
$sr = ldap_search($ds,"dc=iitb,dc=ac,dc=in","(uid=$ldap_uid)");
$info = ldap_get_entries($ds, $sr);
$ldap_uid = $info[0]['dn'];
$do_bind = @ldap_bind($ds,$ldap_uid,$ldap_pass) or die("Wrong Username and/or Password. Please go back and try again.");

$dbFile = 'dbFile.txt';
$handle = fopen($dbFile, 'r') or die('Cannot open file:  '.$dbFile);
$dbFileData = fread($handle,filesize($dbFile));

$specialChar  = array(':', "\r\n", "\r", "\n");
$saveAs = array('-', '<br>', '<br>', '<br>');

$newdbFile = substr($dbFileData, 0, -2);
$newdbFile = $newdbFile.",{\"name\" : \"".$title."\",\n\"lat\" : \"".$lat."\",\"lng\" : \"".$lng."\",\"ldapid\" : \"".$ldapid."\",\"website\" : \"".$website."\",\"phone\" : \"".$phoneno."\",\"info\" : \"".str_replace($specialChar,$saveAs,$otherinfo)."\"}]}";

$dbFileWriteHandle = fopen($dbFile, 'w') or die('Cannot open file:  '.$dbFile);
fwrite($dbFileWriteHandle, $newdbFile);
fclose($dbFileWriteHandle);
echo "Marker added!";

?>