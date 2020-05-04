<?php
	
	require('insertEvents.php');

	$inEventName = "";
	$inEventDesc = "";
	$inEventPresenter = "";
	$inEventDate = "";
	$inEventTime = "";

if (isset($_POST["submit"])){
	$inEventName = $_POST["event_name"];
	$inEventDesc = $_POST["event_description"];
	$inEventPresenter = $_POST["event_presenter"];
	$inEventDate = $_POST["event_date"];
	$inEventTime = $_POST["event_time"];
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>event form</title>
</head>

<body>
<h1>WDV341 Event Form</h1>
<form method="post" action="processEvents.php">
  <div>
    <label for="event_name">Event Name:</label>
    <input type="text" name="event_name" id="event_name" value="<?php echo $inEventName; ?>" required>
  </div>
  <div>
    <label for="event_decription">Event Description:</label>
    <input type="text" name="event_description" id="event_description" value="<?php echo $inEventDesc; ?>" required>
  </div>
  <div>
    <label for="event_presenter">Event Presenter:</label>
    <input type="text" name="event_presenter" id="event_presenter" value="<?php echo $inEventPresenter; ?>" required>
  </div>
  <div>
    <label for="event_date">Event Date:</label>
    <input type="text" name="event_date" id="event_date" value="<?php echo $inEventDate; ?>" required>
  </div>
  <div>
    <label for="event_time">Event Time:</label>
    <input type="text" name="event_time" id="event_time" value="<?php echo $inEventTime; ?>" required>
  </div>
  <div>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="Reset">
  </div>
</form>
</body>
</html>