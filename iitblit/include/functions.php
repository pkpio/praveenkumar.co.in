<?php
require_once 'database.php';

$notAlloweds = array(
    '\'',
    '"',
    ',',
    '-'
);
$replacers   = array(
    '',
    '',
    '',
    ''
);

function dbQuery($sql) {
	$result = mysql_query($sql) or die('Encountered an unexpected error. Please try again, If problem persists please contact the <a href="#">administrator</a>' . mysql_error());
    return $result;
}

function getNRows($result){
    return mysql_num_rows($result);
}

function isEmpty(){
    $result = dbQuery("SELECT * FROM answers");
    $rows = getNRows($result);
    if($rows > 0)
        return false;
    else
        return true;
}

function updateAns($ansNum, $ansVal) {
    if(isEmpty())        
        $sql = "INSERT INTO answers (a" . $ansNum . ")  VALUES (' . $ansVal . ')";
    else
        $sql = "UPDATE answers SET a" . $ansNum . " = '" . $ansVal . "'";
    dbQuery($sql);
}

function deleteQues($i){
    if(isEmpty())
        $sql = "INSERT INTO answers (e" . $i . ") VALUES ('0')";
    else
        $sql = "UPDATE answers SET e" . $i . " = '0'";
    dbQuery($sql);

    // Delete actual file.
    $catNum = floor(($i-1)/4 + 1);
    $qNum = $i%4;
    if($qNum == 0)
        $qNum = 4;
    $file = "c" . $catNum . "q" . $qNum;
    $file = "questions/" . $file . ".jpg";
    if(file_exists($file))
        unlink($file);
}

function unDeleteQues($cat, $ques){
    $i = ($cat-1)*4 + $ques;
    if(isEmpty())
        $sql = "INSERT INTO answers (e" . $i . ") VALUES ('1')";
    else
        $sql = "UPDATE answers SET e" . $i . " = '1'";
    dbQuery($sql);
}

function getAvailQues(){
    if(isEmpty())
        return "0000000000000000";
    else{
        $sql = "SELECT * FROM answers";
        $result = dbQuery($sql);
        $row = mysql_fetch_assoc($result);
        $val = "";
        for($i=1;$i<17;$i++)
            $val = $val . $row['e' . $i];
        return $val;
    }
}

function isExistQues($i){
    if(isEmpty())
        return false;
    else{
        $sql = "SELECT e" . $i . " FROM answers";
        $result = mysql_query($sql);
        $row = mysql_fetch_assoc($result);
        if($row['e'.$i])
            return true;
        else
            return false;
    }

}

function getAns($i){
    $sql = "SELECT a" . $i . " FROM answers";
    $result = dbQuery($sql);
    $row = mysql_fetch_assoc($result);
    return $row['a'.$i];
}

function saveScores($ldap, $scores){
    // Compute total score
    $total = $scores[0] + $scores[1] + $scores[2] + $scores[3];

    // Check if there is already an entry for this ldap.
    $sql = "SELECT * FROM scores WHERE ldap = '" . $ldap . "'";
    $result = dbQuery($sql);
    $nRows = getNRows($result);
    if($nRows > 0)
        $sql = "UPDATE scores SET 
                    sec1 = '" . $scores[0] . "', 
                    sec2 = '" . $scores[1] . "', 
                    sec3 = '" . $scores[2] . "', 
                    sec4 = '" . $scores[3] . "', 
                    total = '" . $total . "' 
                    WHERE ldap = '" . $ldap . "'";
    else
        $sql = "INSERT INTO scores (ldap, sec1, sec2, sec3, sec4, total) VALUES (
                                    '" . $ldap . "', 
                                    '" . $scores[0] . "', 
                                    '" . $scores[1] . "', 
                                    '" . $scores[2] . "', 
                                    '" . $scores[3] . "', 
                                    '" . $total . "')";
    dbQuery($sql);

}

function getScoresJson(){
    // Get all data in highscores table
    $result = dbQuery("SELECT * FROM scores");
    $nRows = getNRows($result);

    // Check if the table is not empty
    if($nRows > 0){

        // Initialise json string for each section. Section 5 is for high scores.
        $jsonSec1 = "\"section0\": [";
        $jsonSec2 = "\"section1\": [";
        $jsonSec3 = "\"section2\": [";
        $jsonSec4 = "\"section3\": [";
        $jsonSec5 = "\"section4\": [";

        for($i=0; $i < $nRows; $i++){
            $row = mysql_fetch_assoc($result);      

            // Start building jsons for each
            $jsonSec1 = $jsonSec1 . "{\"uname\": \"" . $row['ldap'] . "\",\"score\": \"" . $row['sec1'] . "\"}";
            $jsonSec2 = $jsonSec2 . "{\"uname\": \"" . $row['ldap'] . "\",\"score\": \"" . $row['sec2'] . "\"}";
            $jsonSec3 = $jsonSec3 . "{\"uname\": \"" . $row['ldap'] . "\",\"score\": \"" . $row['sec3'] . "\"}";
            $jsonSec4 = $jsonSec4 . "{\"uname\": \"" . $row['ldap'] . "\",\"score\": \"" . $row['sec4'] . "\"}";
            $jsonSec5 = $jsonSec5 . "{\"uname\": \"" . $row['ldap'] . "\",\"score\": \"" . $row['total'] . "\"}";

            //An additional "," if it is not the last element
            if($i != $nRows-1){
                $jsonSec1 = $jsonSec1 . ",";
                $jsonSec2 = $jsonSec2 . ",";
                $jsonSec3 = $jsonSec3 . ",";
                $jsonSec4 = $jsonSec4 . ",";
                $jsonSec5 = $jsonSec5 . ",";
            }
        }

        // Combine sections
        $json = "{" . $jsonSec1 . "]," . $jsonSec2 . "]," . $jsonSec3 . "]," . $jsonSec4 . "]," . $jsonSec5 . "]}";

        return $json;

    }
    // Empty table. DO nothing.
    else{
        $noData = "";

        return $noData;
    }
}

function doScoresBackup(){
    // Score directory
    $scores_dir = "./scores/";

    // Get scores json into a string
    $scores_json = getScoresJson();

    // Build a file name based on time - Until seconds should be unique
    date_default_timezone_set('Asia/Calcutta'); // For proper timezone
    $backup_file_name = $scores_dir . "scores_backup_" . date('Y-m-d H-i-s');

    // Create a file for backup
    $handle = fopen($backup_file_name, 'w') or die('Cannot open file:  ' . $backup_file_name);

    // Write json contents to the file
    fwrite($handle, $scores_json);
}

function resetScores(){
    $sql = "TRUNCATE TABLE scores";
    dbQuery($sql);
}
?>