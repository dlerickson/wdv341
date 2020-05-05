<?php
	//Get the Event data from the server.
try {
	require '../connectPDO.php';
	
	$todaysDate = date("Y-m-d"); //default date
	$curMonth = date("m");
	
	$sql = "SELECT ";
	$sql .= "event_id, ";
	$sql .= "event_name, ";
	$sql .= "event_description, ";
	$sql .= "event_presenter, ";
	$sql .= "event_date, ";
	$sql .= "event_time, ";
	$sql .= "DATE_FORMAT(event_date, '%m-%d-%Y') AS event_date, ";
	$sql .= "DATE_FORMAT(event_date, '%m') AS event_month ";
	$sql .= "FROM wdv341_event2 ";
	$sql .= "ORDER BY event_id DESC ";

	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	
	
	
} catch(PDOException $e){
	echo "Whoops";
	error_log($e->getMessage());			
	error_log($e->getLine());
	error_log(var_dump(debug_backtrace()));
	
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>WDV341 Intro PHP  - Display Events Example</title>
    <style>
		.eventBlock{
			width:500px;
			margin-left:auto;
			margin-right:auto;
			background-color:#CCC;	
		}
		
		.displayEvent{
			text_align:left;
			font-size:18px;	
		}
		
		.displayDescription {
			margin-left:100px;
		}
		
		.future {
			font-style: italic;
		}

		.current {
			font-weight: bold;
			color: red;
		}
		

	</style>
</head>

<body>
    <h1>WDV341 Intro PHP</h1>
    <h2>Example Code - Display Events as formatted output blocks</h2>   
    <h3>??? Events are available today.</h3>

<?php
	//Display each row as formatted output in the div below
	while( $row=$stmt->fetch(PDO::FETCH_ASSOC)) {
?>
	<p>
        <div class="eventBlock">	
            <div>
            	<span class="displayEvent">Event:<?php echo $row['event_name']; ?></span>
                <span>Presenter:<?php echo $row['event_presenter']; ?></span>
            </div>
            <div>
            	<span class="displayDescription">Description:<?php echo $row['event_description']; ?></span>
            </div>
            <div>
            	<span class="displayTime">Time:<?php echo $row['event_time']; ?></span>
            </div>
            <div>
            	<span class="displayDate">Date:
				<?php
				
					if ($row['event_date'] > $todaysDate){
						echo "<span class = 'future'" . $row['event_date'] . "</span>";
					} elseif ($row['event_month'] === $curMonth){
						echo "<span class = 'curfut'" . $row['event_date'] . "</span>";
					} else {
						echo $row['event_date'];
					}
												 
				?>
				</span>
            </div>
        </div>
    </p>

<?php
	//Close the database connection	
	}
?>
</div>	
</body>
</html>