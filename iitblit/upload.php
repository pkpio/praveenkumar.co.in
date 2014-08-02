<?php
require_once './include/functions.php';
$uploadCode = "<uploadcode>";

$rucode = "";//Received upload code
if(!empty($_POST['ucode']))
  $rucode = $_POST['ucode'];

//Check for password
if($rucode == $uploadCode){
  for($cat=1; $cat<5; $cat++){
    for($ques=1; $ques<5; $ques++){
      echo "C" . $cat . "Q" . $ques . " :    ";

      //File name
      $curFile = "c".$cat."q".$ques;

      //All files may not be uploaded
      if(!empty($_FILES[$curFile]["name"])){

        //File type checking. Allow only images. Size limit 1MB
        if ((($_FILES[$curFile]["type"] == "image/gif")
        || ($_FILES[$curFile]["type"] == "image/jpeg")
        || ($_FILES[$curFile]["type"] == "image/jpg")
        || ($_FILES[$curFile]["type"] == "image/pjpeg")
        || ($_FILES[$curFile]["type"] == "image/x-png")
        || ($_FILES[$curFile]["type"] == "image/png"))
        && ($_FILES[$curFile]["size"] < 1000000)){

          //Error checking
          if ($_FILES[$curFile]["error"] > 0){
            echo "Return Code: " . $_FILES[$curFile]["error"];
          }

          //No error reported. Copy (and replace if necessary) uploaded file in questions folder 
          else{
            move_uploaded_file($_FILES[$curFile]["tmp_name"],
            "questions/" . $curFile . ".jpg");
            echo "Success ! <br>";

            // Update database that this question exists
            unDeleteQues($cat, $ques);
              
            }
          }

        //File restrictions test failed
        else{
          echo "Invalid file ! Possible issues: format (only jpg), size (max. 1MB). Use paint to resize and save it in right format. <br>";
        }

      }
      //A particular question is not uploaded
      else{
        //No file attached !
        echo "No file attached! <br>";
      }

    }
    //Line break after each category
    echo "<br><br>";
  }

  //Answers updating
  for($i=1;$i<17;$i++)
    if(!empty($_POST['ans'][$i]))
      // Make everything case insensitive. Remove few punctuations.
      updateAns($i, strtolower(str_replace($notAlloweds, $replacers, $_POST['ans'][$i])));

  //Delete questions
  for($i=1;$i<17;$i++){
    if(!empty($_POST['del'][$i])){
      if($_POST['del'][$i] == 1){
        deleteQues($i);
        echo "Deleted question: " . $i . "<br>";
      }
    }
  }

  //Backup existing scores and reset them if starting a new session
  if(!empty($_POST['start_new_session'])){
    if($_POST['start_new_session'] == 1){
      doScoresBackup();
      resetScores();
    }
  }


  
}
//No ucode received. Redirect back
else{
  echo "No ucode received";
}
  
?>
