<?php
require_once './../include/functions.php';

//Initialise scores to all zeros;
$scores = array(0, 0, 0, 0);

/*
$_POST['c1q1'] = "pendy";
$_POST['c4q4'] = "praveendath92";
$_POST['c4q2'] = "14";
$_POST['ldap'] = "jbas";
*/

// Response string. Will be used by the android app to display colors for answers
$resp = "";

for($c=1; $c<5; $c++){
	for($q=1; $q<5; $q++){
		$num = ($c-1)*4 + $q;
		// Check if that question exist for quiz. Else proceed to next question and set resp to 0 for that question.
		if(isExistQues($num)){

			// Get actual answer for that question.
			$aAns = getAns($num);

			// Get users answer for that question.
			$sAns = "";
			//Check  for variable set or not. To avoid throwing warnings.
			if(!empty($_POST['c' . $c . 'q' . $q]))
				$sAns = $_POST['c' . $c . 'q' . $q];

			// Make it few charecters and case insensitive
			$sAns = strtolower(str_replace($notAlloweds, $replacers, $sAns));

			// If answeres match increase that section scores.
			if($sAns == $aAns){
				$scores[$c-1]++;
				$resp = $resp . "1";
			}
			else
				$resp = $resp . "0";
		}
		else
			$resp = $resp . "0";


	}
}

// Save scores for the ldap
$ldap = $_POST['ldap'];

if(!empty($ldap))
	saveScores($ldap, $scores);

echo $resp;
?>