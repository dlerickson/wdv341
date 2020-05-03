<?php
		ini_set('sendmail_from', 'contact@donerickson.net');
	ini_set('SMTP', 'mail.heartland-webhosting.com');
ini_set('smtp_port', 465)

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Email test</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Testing the Emailer Class</h2>
	<?php
	
		require 'Emailer.php';		//acccess the class file
	
		$emailTest = new Emailer();	//instantiate a new Emailer object
	
		$emailTest->set_recipientEmail("thedonerickson@gmail.com");	//to
		echo "To: "; echo $emailTest->getRecipientEmail();
		echo "<br>";
	
		$emailTest->set_subject("Email Test");	//subj
		echo "Subject: "; echo $emailTest->getSubject();
		echo "<br>";
	
		$emailTest->set_message("My message test.");	//msg
		echo "Message: "; echo $emailTest->getMessage();
		echo "<br>";
	
		$emailTest->set_senderEmail("contact@donerickson.net");	//from
		echo "From: "; echo $emailTest->getSenderEmail();
		echo "<br>";
		echo $emailTest->sendEmail();	//send email to SMTP server
	
	?>
</body>
</html>










