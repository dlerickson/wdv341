<?php


?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>event form</title>
</head>

<body>
<h1>WDV341 Event Form</h1>
<form method="post" action="insertEvents.php">
  <div>
    <label for="event_name">Event Name:</label>
    <input type="text" name="event_name" id="event_name" required>
  </div>
  <div>
    <label for="event_decription">Event Description:</label>
    <input type="text" name="event_description" id="event_description" required>
  </div>
  <div>
    <label for="event_presenter">Event Presenter:</label>
    <input type="text" name="event_presenter" id="event_presenter" required>
  </div>
  <div>
    <label for="event_date">Event Date:</label>
    <input type="text" name="event_date" id="event_date" required>
  </div>
  <div>
    <label for="event_time">Event Time:</label>
    <input type="text" name="event_time" id="event_time" required>
  </div>
  <div>
    <input type="submit" name="submit" id="submit" value="Submit">
    <input type="reset" name="reset" id="reset" value="Reset">
  </div>
</form>
</body>
</html>