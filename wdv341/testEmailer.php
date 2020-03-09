<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Testing the Emailer Class</h2>
	<?php
	
		require 'Emailer.php';		//acccess the class file
	
		$emailTest = new Emailer();	//instantiate a new Emailer object
	
		$emailTest->set_senderEmail("thedonerickson@gmail.com");
	
		echo $emailTest->getSenderEmail();	//return email address
	
		echo $emailTest->sendEmail();	//send email to SMTP server
	
		$cat = "coast";	?>
</body>
</html>










