<?php
session_start();

if(!$_SESSION['validUser'] == true){
	header('Location: login.php');
}

//PDO
//isset
//etc...

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log-In</title>
</head>

<body>
	<h1>Admin</h1>
	<h3>Do Stuff...</h3>
	<?php
		require '../eventsForm.php';
	?>
	<p>
		<a href="logout.php">Log Out</a>
	</p>
</body>
</html>