<?php

try{
	require 'connectPDO.php';

	$todaysDate = date("Y-m-d"); //default date
	
	$sql = "SELECT ";
	$sql .= "event_id, ";
	$sql .= "event_name, ";
	$sql .= "event_description, ";
	$sql .= "event_presenter, ";
	$sql .= "event_date, ";
	$sql .= "event_time ";
	$sql .= "FROM wdv341_event";

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
} catch(PDOException $e){
	$message = "There has been a problem. The system administrator has been contacted. Please try again later.";
	echo $message;
	
	error_log($e->getMessage());			//Delivers a developer defined error message to the PHP log file at c:\xampp/php\logs\php_error_log
	  error_log($e->getLine());
	  error_log(var_dump(debug_backtrace()));
  
	header('Location: files/505_error_response_page.php');
	
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>select events</title>
</head>

<body>
	<div id="container">

	<header>
    	<h1>Presenting Information Technology</h1>
    </header>
    
    <main>
    
        <h1>Display Available Events</h1>
        
        <?php 
			while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
		?>		
			<table>
				<tr>
					<th>Event ID</th>
					<th>Event Name</th>
					<th>Event Description</th>
					<th>Event Presenter</th>
					<th>Event Date</th>
					<th>Event Time</th>
				</tr>
				
				<tr>
					<td><?php echo $row['event_id']; ?></td>
					<td><?php echo $row['event_name']; ?> </td>   
				  	<td><?php echo $row['event_description']; ?> </td>   
				  	<td><?php echo $row['event_presenter']; ?> </td>   
				  	<td><?php echo $row['event_date']; ?> </td>   
				  	<td><?php echo $row['event_time']; ?> </td>
				</tr>	
			</table>		               
				
        <?php
			}
		?>	
  	
        
	</main>
    
	<footer>
    	<p>Copyright &copy; <script> var d = new Date(); document.write (d.getFullYear());</script> All Rights Reserved</p>
    
    </footer>

</div>
</body>
</html>