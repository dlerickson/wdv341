<?php
	//This PHP file will connect to the wdv341 database
	//It will pull the form data from the $_POST variable
	//It will format an INSERT SQL statement
	//It will create a Prepared Statement 
	//It will bind the parameters to the Prepared Statement
	//It will execute the prepared statement to insert into the database
	//It will display a success/failure message to the user.

	require 'connectPDO.php';	//access and run this external file

try {
	
//	$inFirstName = $_POST["firstName"];		//Get the value entered in the first name field
//	$inLastName = $_POST["lastName"];		//Get the value entered in the last name field
//	$inSchool = $_POST["school"];	
	
	$eventName = $_POST["event_name"];
	$eventDescription = $_POST["event_description"];
	$eventDate = $_POST["event_date"];
	$eventPresenter = $_POST["event_presenter"];
	$eventTime = $_POST["event_time"];

	//PDO Prepared statements 

	//1. create the SQL statement with name placeholders
	$sql = "INSERT INTO wdv341_event(event_name, event_description, event_date, event_presenter, event_time)
	VALUES (:event_name, :event_description, :event_date, :event_presenter, :event_time)";

	//2. Create the prepared statement object
	$stmt = $conn->prepare($sql);	//creates the 'prepared statement' object

	//Bind parameters to the prepared statement object, one for each parameter
	$stmt->bindParam(':event_name', $eventName);
	$stmt->bindParam(':event_description', $eventDescription);
	$stmt->bindParam(':event_date', $eventDate);
	$stmt->bindParam(':event_presenter', $eventPresenter);
	$stmt->bindParam(':event_time', $eventTime);

	//Execute the prepared statement
	$stmt->execute();
	}

catch(PDOException $e){
	echo "WARNING WARNING WARNING I HAVE STOLEN YOUR CREDIT CARD!";
}

$conn = null;	//close your connection object

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h2>Thank you for your order!</h2>
</body>
</html>














