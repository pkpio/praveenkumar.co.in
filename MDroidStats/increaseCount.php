<?php
$countFile = 'MDroidStats.txt';
$handle = fopen($countFile, 'r') or die('Cannot open file:  '.$countFile);
$count = fread($handle,filesize($countFile));
$count++;
fclose($handle); 
$handle2 = fopen($countFile, 'w') or die('Cannot open file:  '.$countFile);
fwrite($handle2, $count);
fclose($handle2);
if($_GET['firstTime']==1){
	$usersCountFile = 'MDroidUsersStats.txt';
	$handle3 = fopen($usersCountFile, 'r') or die('Cannot open file:  '.$usersCountFile);
	$usersCount = fread($handle3,filesize($usersCountFile));
	$usersCount++;
	fclose($handle3);
	$handle4 = fopen($usersCountFile, 'w') or die('Cannot open file:  '.$usersCountFile);
	fwrite($handle4, $usersCount);
	fclose($handle4);
}
?>