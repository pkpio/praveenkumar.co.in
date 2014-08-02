<?php
$oCode = "<opencode>";
$rCode = "";
?>


<!-- 	**********************************************************************************	
		
								Start of common headers		

		**********************************************************************************-->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 TranWsitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IITB Lit admin</title>
<link rel="stylesheet" type="text/css" href="styles/style.css" />
</head>
<body>
	<div class="header">
		<img src="./logo.png" / id="logoImg">
		<h1 id="headerTitle">Admin interface</h1>
	</div>

	<div class="content">


<!-- 	**********************************************************************************	
		
								End of common headers

		**********************************************************************************-->


<?php
if(!empty($_POST['ocode']))
	$rCode = $_POST['ocode'];

if($rCode == $oCode){
?>

<!-- 	**********************************************************************************	
		
								Start of upload interface		

		**********************************************************************************-->


		<form action="./upload.php" method="post" enctype="multipart/form-data">

			<!-- Notice card-->
			<div class="card">
				<h1>Instructions</h1>
				<ol>
					<li><b>Uploading Questions: </b> You are advised to upload all the questions corresponding to a week's quiz at a time. 
						Should there be any network issues in doing this, you may upload them seperatly or a few questions at a time.</li>
					<li><b>Uploading Answers: </b> When you are uploading a question please ensure that you provide 
						answer for the same in the box next to it.</li>
					<li><b>Deleting unwanted questions: </b> By default each question and its corresponding answer will
						be their corresponding values in the previous week's quiz. However, if you choose to delete a question or upload fewer number of 
						questions in a section, delete the unwanted questions by checking delete option next to each question you want to be removed.</li>
					<li><b>Starting a new set of questions: </b> There is a checkbox at the end of all sections to do this. Please go through the instructions 
						written in 'start a new quiz?' section at least once before you exercise this option.</li>
				</ol>
			</div>

			<!-- Section 1 card-->
			<div class="card">
				<h1>Cryptics</h1>
				<!-- Q1 -->
				<div id="qDiv">
					<label for="file">Question 1:</label>
					<input type="file" name="c1q1">

					<label for="file">Answer:</label>
					<input type="text" name="ans[1]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[1]" value="1">
				</div>
				<!-- Q2 -->
				<div id="qDiv">
					<label for="file">Question 2:</label>
					<input type="file" name="c1q2">

					<label for="file">Answer:</label>
					<input type="text" name="ans[2]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[2]" value="1">
				</div>
				<!-- Q3 -->
				<div id="qDiv">
					<label for="file">Question 3:</label>
					<input type="file" name="c1q3">

					<label for="file">Answer:</label>
					<input type="text" name="ans[3]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[3]" value="1">
				</div>
				<!-- Q4 -->
				<div id="qDiv">
					<label for="file">Question 4:</label>
					<input type="file" name="c1q4">

					<label for="file">Answer:</label>
					<input type="text" name="ans[4]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[4]" value="1">
				</div>
			</div>

			<!-- Section 2 card-->
			<div class="card">
				<h1>Ditloids</h1>
				<!-- Q1 -->
				<div id="qDiv">
					<label for="file">Question 1:</label>
					<input type="file" name="c2q1">

					<label for="file">Answer:</label>
					<input type="text" name="ans[5]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[5]" value="1">
				</div>
				<!-- Q2 -->
				<div id="qDiv">
					<label for="file">Question 2:</label>
					<input type="file" name="c2q2">

					<label for="file">Answer:</label>
					<input type="text" name="ans[6]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[6]" value="1">
				</div>
				<!-- Q3 -->
				<div id="qDiv">
					<label for="file">Question 3:</label>
					<input type="file" name="c2q3">

					<label for="file">Answer:</label>
					<input type="text" name="ans[7]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[7]" value="1">
				</div>
				<!-- Q4 -->
				<div id="qDiv">
					<label for="file">Question 4:</label>
					<input type="file" name="c2q4">

					<label for="file">Answer:</label>
					<input type="text" name="ans[8]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[8]" value="1">
				</div>
			</div>

			<!-- Section 3 card-->
			<div class="card">
				<h1>Anagrams</h1>
				<!-- Q1 -->
				<div id="qDiv">
					<label for="file">Question 1:</label>
					<input type="file" name="c3q1">

					<label for="file">Answer:</label>
					<input type="text" name="ans[9]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[9]" value="1">
				</div>
				<!-- Q2 -->
				<div id="qDiv">
					<label for="file">Question 2:</label>
					<input type="file" name="c3q2">

					<label for="file">Answer:</label>
					<input type="text" name="ans[10]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[10]" value="1">
				</div>
				<!-- Q3 -->
				<div id="qDiv">
					<label for="file">Question 3:</label>
					<input type="file" name="c3q3">

					<label for="file">Answer:</label>
					<input type="text" name="ans[11]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[11]" value="1">
				</div>
				<!-- Q4 -->
				<div id="qDiv">
					<label for="file">Question 4:</label>
					<input type="file" name="c3q4">

					<label for="file">Answer:</label>
					<input type="text" name="ans[12]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[12]" value="1">
				</div>
			</div>

			<!-- Section 4 card-->
			<div class="card">
				<h1>Rebuses</h1>
				<!-- Q1 -->
				<div id="qDiv">
					<label for="file">Question 1:</label>
					<input type="file" name="c4q1">

					<label for="file">Answer:</label>
					<input type="text" name="ans[13]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[13]" value="1">
				</div>
				<!-- Q2 -->
				<div id="qDiv">
					<label for="file">Question 2:</label>
					<input type="file" name="c4q2">

					<label for="file">Answer:</label>
					<input type="text" name="ans[14]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[14]" value="1">
				</div>
				<!-- Q3 -->
				<div id="qDiv">
					<label for="file">Question 3:</label>
					<input type="file" name="c4q3">

					<label for="file">Answer:</label>
					<input type="text" name="ans[15]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[15]" value="1">
				</div>
				<!-- Q4 -->
				<div id="qDiv">
					<label for="file">Question 4:</label>
					<input type="file" name="c4q4">

					<label for="file">Answer:</label>
					<input type="text" name="ans[16]">

					<label for="file">Delete</label>
					<input type="checkbox" name="del[16]" value="1">
				</div>
			</div>

			<!-- New session card -->
			<div class="card">
				<h1 style="color:#FF0000"><b>Start as a new quiz ?</b></h1>
				<div id="newQuizInstructions">
					<p style="color:#FF0000" align="center">Use this with extreme caution. Please read below.</p>
					<ol>
						<li>Check the box below if you want to start a new quiz - A fresh set of questions</li>
						<li>Why do I need this ? - To ensure that the highscores from previous week for any user won't continue for the next week.</li>
						<li>What does this do ? - It will reset the highscores of the current week and starts fresh for a new set of questions. </li>
						<li>BTW, we create a backup everytime we reset the high scores but I highly encourage you to NOT rely on the backups and 
							use this with extreme caution</li>
					</ol>
				</div>

				<div align="center">
					<label for="file"><b>Do you want to start as a new quiz ?</b></label>
					<input type="checkbox" name="start_new_session" value="1">
					<br><br>
				</div>
			</div>

			<!-- Submit card -->
			<div class="card">
				<h1>Upload</h1>
				<p align="center">Enter upload code</p>
				<input type="password" id="pswdField" name="ucode" /><br/>
				<input type="submit" name="submit" value="Upload" id="submitBtn">
			</div>

		</form>

<!-- 	**********************************************************************************	
		
								End of upload interface		

		**********************************************************************************-->

<?php
	}
	//No oCode or wrong Ocode received. Open password entering interface again.
	else{
?>

<!-- 	**********************************************************************************	
		
								Start of passcode interface		

		**********************************************************************************-->

		<form action="./" method="post" enctype="multipart/form-data">

			<!-- Notice card-->
			<div class="card">
				<h1 style="color:#FF0000">Restricted Access !</h1>
				<p align="center">Enter open code for access</p>
				<input type="password" id="pswdField" name="ocode" /><br/>
				<input type="submit" name="submit" value="Let me in" id="submitBtn">				
			</div>

		</form>


<!-- 	**********************************************************************************	
		
								End of passcode interface		

		**********************************************************************************-->

<?php
	}
?>

	</div>
</body>
</html>

<html>
<body>
