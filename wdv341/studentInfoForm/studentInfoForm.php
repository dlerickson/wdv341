<?php
//set default values
$inEmailToLogin = "";
$inFirstName = "";
$inLastName = "";
$inProgram = "";
$inProgram2 = "";
$inWebsiteAddress = "";
$inEmail = "";
$inLinkedIn = "";
$inWebsiteAddress2 = "";
$inHometown = "";
$inCareerGoals = "";
$inThreeWords = "";

//set error messages
$inEmailToLoginErrMsg = "";
$inFirstNameErrMsg = "";
$inLastNameErrMsg = "";
$inProgramErrMsg = "";
$inProgram2ErrMsg = "";
$inWebsiteAddressErrMsg = "";
$inEmailErrMsg = "";
$inLinkedInErrMsg = "";
$inWebsiteAddress2ErrMsg = "";
$inHometownErrMsg = "";
$inCareerGoalsErrMsg = "";
$inThreeWordsErrMsg = "";

$valid_Form = "false";
$inInRobotest = "";
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>DMACC Portfolio Day Bio Form</title>
  <meta name="author" content="">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  
  <!-- css3-mediaqueries.js for IE less than 9 -->

<script src="css3-mediaqueries.js"></script>
<script src="jquery-3.2.1.js"></script>
<script>

	$(document).ready(function(){
		if( $("select[name=program]	option:selected").val() == "webDevelopment")
		{
			$(".secondWeb").css("display", "inline");
		}
		else
		{
			$(".secondWeb").css("display", "none");
		}
		
		$("select#program").change(function(){
			if( $("select#program option:checked").val() == "webDevelopment")
			{
				$(".secondWeb").css("display", "inline");
			}
			else
			{
				$(".secondWeb").css("display", "none");
			}
		});
		
		function resetForm(){
			$("#firstName").val("");
			$("#lastName").val("");
			$("#program").val("default");
			$("#websiteAddress").val("");
			$("#websiteAddress2").val("");
			$("#email").val("");
			$("#hometown").val("");
			$("#careerGoals").val("");
			$("#threeWords").val("");
		}
	});
	
	
	</script>
  
  <style>
	img{
		display: block;
		margin: 0 auto;
	}
	.frame{
		background-image: url("orange popsicle.jpg");
		padding: 1em;	
	}
	.frame2{
		background-image: url("citrus.jpg");
		padding: 1.3em;	
	}	
	body{
		background-image: url("bodacious.png");
		margin: 1.5em;
	}
	
	.main {
		padding: 1em;
		background-color: white;
	}
	form{
		text-align: center;
	}
	h2 {
		text-align: center;
	}
	.robotic{
		display: none;
	}

	.form {
		background-color:white;
		padding-left: 5em;
	}
	p {
		align:left;
	}	
	.citrus{
		margin: auto;
		background-image: url("raspberry.jpg");
		padding: 1.3em;	
		width: 70%;
	}
	.bamboo{
		background-image: url("bamboo.jpg");
		padding: 1em;	
	}	
	.violet{
		background-image: url("ultra violet.png");
		padding: .5em;	
	}	
	.secondWeb{
		display: none;
	}
	table{
		margin: auto;
	}
	table td{
		padding-bottom: .75em;
	}
	.error{
		font-style: italic;
		color: #d42a58;
		font-weight: bold;
	}
	  .hide-bot{
		  display: none;
	  }

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  img {
    width:100%;
  }
  .form {
	width:100%; 
	padding-left: .1em;
	padding-top: .1em;
  }
  .citrus {
	background-image:none;  
  }
  .bamboo {
	background-image:none;  
  } 
  .violet {
	background-image:none;  
  }  
  .secondWeb{
		display: none;
	}  
  table{
		margin: auto;
	}
  table td{
		padding-bottom: .5em;
	}
	.hide-bot{
		  display: none;
	  }
}
	
  </style>

<?php
  
//Input Field validations. 

//validateFirstName
	// valid first name should only include letters, numbers, and spaces
	// ... must be present
function validateFirstName()
{
	global $inFirstName, $valid_form, $inFirstNameErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
	$inFirstNameErrMsg = "";								//Clear the error message. 
	if($inFirstName=="")
	{
		$valid_form = false;					//Invalid name so the form is invalid
		$inFirstNameErrMsg = "Name is required";	//Error message for this validation	
	}
	elseif (!preg_match("/^[a-z0-9A-Z]*$/",$inFirstName)) {
		$inFirstNameErrMsg = "Only letters, numbers, and white space allowed";
	}
}

//validateLastName
	// valid last name should only include letters, numbers and spaces
	// ... must be present
function validateLastName()
	{
		global $inLastName, $valid_form, $inLastNameErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inLastNameErrMsg = "";								//Clear the error message. 
		if($inLastName=="")
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inLastNameErrMsg = "Name is required";	//Error message for this validation	
		}
		elseif (!preg_match("/^[a-z0-9A-Z]*$/",$inLastName)) {
			$inLastNameErrMsg = "Only letters, numbers and white space allowed";
		}
	}

//validateProgram
	//valid program must not be default options
function validateProgram()
	{
		global $inProgram, $valid_form, $inProgramErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inProgramErrMsg = "";								//Clear the error message. 
		if($inProgram=="default")
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inProgramErrMsg = "Program is required";	//Error message for this validation	
		}
	}

function validateProgram2()
	{
		global $inProgram2, $valid_form, $inProgram2ErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inProgram2ErrMsg = "";								//Clear the error message. 
		if($inProgram2=="none")
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inProgram2ErrMsg = "Program is required";	//Error message for this validation	
		}
	}

//validateWebsiteAddress
	//valid URL format
function validateWebsiteAdress()
	{
		global $inWebsiteAddress, $valid_form, $inWebsiteAddressErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inWebsiteAddressErrMsg = "";								//Clear the error message. 
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$inWebsiteAddress))
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inWebsiteAddressErrMsg = "Not a valid URL";	//Error message for this validation	
		}
	}

//validateWebsiteAddress2
	//valid URL format	
function validateWebsiteAdress2()
	{
		global $inWebsiteAddress2, $valid_form, $inWebsiteAddress2ErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inWebsiteAddress2ErrMsg = "";								//Clear the error message. 
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$inWebsiteAddress2))
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inWebsiteAddress2ErrMsg = "Not a valid URL";	//Error message for this validation	
		}
	}

//validateLinkedIn
	//valid URL to linkedin.com
function validateLinkedIn()
	{
		global $inLinkedIn, $valid_form, $inLinkedInErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inLinkedInErrMsg = "";								//Clear the error message. 
		if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.linkedin)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$inLinkedIn))
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inLinkedInErrMsg = "Not a valid LinkedIn URL";	//Error message for this validation	
		}
	}

//validateEmail
	//valid email should be in a proper format  
	//Matches: bob@aol.com | bob@wrox.co.uk | bob@domain.info |123@123.123
	//Non-Matches: a@b | notanemail | bob@@.
function validateEmail()
	{
		global $inEmail, $valid_form, $inEmailErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inEmailErrMsg = "";								//Clear the error message. 
		if (!filter_var($inEmail, FILTER_VALIDATE_EMAIL)) 
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inEmailErrMsg = "Not a valid email address";	//Error message for this validation	
		}
	}

//validateHometown
	// valid name should only include letters, numbers, spaces, and commas
	// ... must be present
function validateHometown()
	{
		global $inHometown, $valid_form, $inHometownErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inHometownErrMsg = "";								//Clear the error message. 
		if($inHometown=="")
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inHometownErrMsg = "Hometown is required";	//Error message for this validation	
		}
		elseif (!preg_match("/^[a-z0-9A-Z, ]*$/",$inHometown)) {
			$inHometownErrMsg = "Only letters, numbers, and white space allowed";
		}
	}

//validateCareerGoals
	//valid career goals should include only numbers, letters, spaces, and basic punctuation
function validateCareerGoals()
	{
		global $inCareerGoals, $valid_form, $inCareerGoalsErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inCareerGoalsErrMsg = "";								//Clear the error message. 
		if (!preg_match("/^[a-z0-9A-Z., ]*$/",$inCareerGoals))
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inCareerGoalsErrMsg = "Only letters, numbers, and white space allowed";	//Error message for this validation	
		}
	}

//validateThreeWords
	//valid three-words should include only numbers, letters, spaces, and basic punctuation
function validateThreeWords()
	{
		global $inThreeWords, $valid_form, $inThreeWordsErrMsg;		//Use the GLOBAL Version of these variables instead of making them local
		$inThreeWordsErrMsg = "";								//Clear the error message. 
		if (!preg_match("/^[a-z0-9A-Z., ]*$/",$inThreeWords))
		{
			$valid_form = false;					//Invalid name so the form is invalid
			$inThreeWordsErrMsg = "Only letters, numbers, and white space allowed";	//Error message for this validation	
		}
	}


if( isset($_POST['submitBio']) )
{	
	$honeypot = $_POST['middleName'];
	
		if ( !empty($honeypot)){
			return;
		} else {
	echo "<h1>Thank you for submitting this form.</h1>";

	$inEmailToLogin = $_POST['emailToLogin'];       
	$inFirstName = $_POST['firstName'];
	$inLastName = $_POST['lastName'];
	$inProgram = $_POST['program'];
	$inProgram2 = $_POST['program2'];
	$inWebsiteAddress = $_POST['websiteAddress'];
	$inEmail = $_POST['email'];
	$inLinkedIn = $_POST['linkedIn'];
	$inProgram = $_POST['program'];
	$inWebsiteAddress2 = $_POST['websiteAddress2'];
	$inHometown = $_POST['hometown'];
	$inCareerGoals = $_POST['careerGoals'];
	$inThreeWords = $_POST['threeWords'];

	$valid_form = true;		//set validation flag assume all fields are valid

		validateFirstName ();
		validateLastName ();
		validateProgram ();
		validateProgram2 ();
		validateWebsiteAdress();
		validateWebsiteAdress2();
		validateLinkedIn();
		validateEmail();
		validateHometown();
		validateCareerGoals();
		validateThreeWords();
		}
} 
else 
{
	echo "<h1>Please enter your information</h1>";
}

?>

</head>

<section class="orange">
<body>
<div class="frame2">
<div class="frame">

  <div class="main">
  <div><img src="madonna.gif" alt="Mix gif" ></div>
  <br>

<!--<a href = 'dmaccPortfolioDayLogout.php'>Log Out</a>-->

<section class="citrus">
<section class="bamboo">
<section class="violet">

	<div class="main form">
	
	<h2></h2>
	</table>
	<!--<form id="portfolioBioForm" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"-->
	<form id="portfolioBioForm" method="post" action="studentInfoForm.php">
		
		<table>
		<tr>
		<td>Login Email:<br> <input type="text" id="emailToLogin" name="emailToLogin" value="<?php echo $inEmailToLogin; ?>"/></td>
		</tr>
		<tr>
		<td>First Name:<br> 
		<input type="text" id="firstName" name="firstName" value="<?php echo $inFirstName; ?>"/><br>
		<span class="error" id="firstNameError"></span></td>
		<td width="210" class="error"><?php echo "$inFirstNameErrMsg"; //place error message on form  ?></td>
		</tr> 
			<!--honeypot-->
		<input type="text" id="middleName" name="middleName" class="hide-bot"/><br>
		<tr>
		<td>Last Name:<br> <input type="text" id="lastName" name="lastName" value="<?php echo $inLastName; ?>" /><br>
		<span class="error" id="lastNameError"></span></td>
		<td width="210" class="error"><?php echo "$inLastNameErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td >Program:<br>
		 <select id="program" name="program">
				<option value="default" <?php if (isset($inProgram) && $inProgram =="none") echo "selected";?>>---Select Your Program---</option>
				<option value="animation" <?php if (isset($inProgram) && $inProgram =="animation") echo "selected";?>>Animation</option>
				<option value="graphicDesign" <?php if (isset($inProgram) && $inProgram =="graphicDesign") echo "selected";?>>Graphic Design</option>
				<option value="photography" <?php if (isset($inProgram) && $inProgram =="photography") echo "selected";?>>Photography</option>
				<option value="videoProduction" <?php if (isset($inProgram) && $inProgram =="videoProduction") echo "selected";?>>Video Production</option>
				<option value="webDevelopment" <?php if (isset($inProgram) && $inProgram =="webDevelopment") echo "selected";?>>Web Development</option>
			</select><br>
			<span class="error" id="programError"></span><td>
			<td width="210" class="error"><?php echo "$inProgramErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td >Secondary Program:<br> <select id="program2" name="program2">
				<option value="none" <?php if (isset($inProgram2) && $inProgram2 =="none") echo "selected";?> >---No Secondary Program---</option>
				<option value="animation" <?php if (isset($inProgram2) && $inProgram2 =="animation") echo "selected";?> >Animation</option>
				<option value="graphicDesign" <?php if (isset($inProgram2) && $inProgram2 =="graphicDesign") echo "selected";?> >Graphic Design</option>
				<option value="photography" <?php if (isset($inProgram2) && $inProgram2 =="photography") echo "selected";?> >Photography</option>
				<option value="videoProduction" <?php if (isset($inProgram2) && $inProgram2 =="videoProduction") echo "selected";?> >Video Production</option>
				<option value="webDevelopment" <?php if (isset($inProgram2) && $inProgram2 =="webDevelopment") echo "selected";?> >Web Development</option>
			</select><br>
			
			<script type="text/javascript">
				document.getElementById('program2'.value = "<?php echo $_GET['program2']; ?>";
			</script>

			<span class="error" id="program2Error"></span><td>
			<td width="210" class="error"><?php echo "$inProgram2ErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td>Website Address:<br> <input type="text" id="websiteAddress" name="websiteAddress" value="<?php echo $inWebsiteAddress; ?>"/><br>
		<span class="error" id="websiteAddressError"></span></td>
		<td width="210" class="error"><?php echo "$inWebsiteAddressErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td>Personal Email:<br><input type="text" id="email" name="email" value="<?php echo $inEmail; ?>" /><br>
		<span class="error" id="emailError"></span></td>
		<td width="210" class="error"><?php echo "$inEmailErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td>LinkedIn Profile:<br><input type="text" id="linkedIn" name="linkedIn" value="<?php echo $inLinkedIn; ?>" /><br>
		<span class="error" id="linkedInError"></span></td>
		<td width="210" class="error"><?php echo "$inLinkedInErrMsg"; //place error message on form  ?></td>
		<tr>
		<td><span class="secondWeb">Secondary Website Address (git repository, etc.):<br> <input type="text" id="websiteAddress2" name="websiteAddress2" value="<?php echo $inWebsiteAddress2; ?>"/><br>
		<span class="error" id="websiteAddress2Error"></span></span></td>
		</tr>
		<tr>
		<td>Hometown:<br> <input type="text" id="hometown" name="hometown" value="<?php echo $inHometown; ?>"/><br>
		<span class="error" id="hometownError"></span></td>
		<td width="210" class="error"><?php echo "$inHometownErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td>Career Goals:<br> <textarea id="careerGoals" name="careerGoals"><?php echo $inCareerGoals; ?></textarea><br>
		<span class="error" id="careerGoalsError"></span></td>
		<td width="210" class="error"><?php echo "$inCareerGoalsErrMsg"; //place error message on form  ?></td>
		</tr>
		<tr>
		<td>3 Words that Describe You:<br> <input type="text" id="threeWords" name="threeWords" value="<?php echo $inThreeWords; ?>"/><br>
		<span class="error" id="threeWordsError"></span></td>
		<td width="210" class="error"><?php echo "$inThreeWordsErrMsg"; //place error message on form  ?></td>
		<p class="robotic" id="pot">
			<label>Leave Blank</label>
			<input type="hidden" name="inRobotest" id="inRobotest" class="inRobotest" />
		</p>
		<input type="hidden" id="submitConfirm" name="submitConfirm" value="submitConfirm"/>
		</tr>
		<tr>
		<td><input type="submit" id="submitBio" name="submitBio" value="Submit Bio" /></td>
		</tr>
		<tr>
		<td><input type="button" id="resetBio" name="resetBio" value="Reset Bio" onclick="window.location.href=
			'studentInfoForm.php'"/></td>
		</tr>
		</table>
	</form>

	</div>
	

</section>	
</section>
</section>
  
</div>

</body>
</section>

</html>