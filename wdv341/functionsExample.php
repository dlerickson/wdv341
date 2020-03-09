<?php

	$fName = "";	//established with initial value GLOBAL scope 
	$lName = "";	//"

	$fName = "Mark";	//assign a value to variables
	$lName = "Leaver";

	function outputFullName1()	{	
		global $fName, $lName;	//access the global variables 
			//inside this function
		

		echo "$lName, $fName";
		echo "<br>";
		echo $lName . ", " . $fName;
		echo "<br>";
	}

	function outputFullName2($inFirstName, $inLastName) {
		echo "$inLastName, $inFirstName";
		echo "<br>";
		echo $inLastName . ", " . $inFirstName;
		echo "<br>";
	}

	function outputFullName3($inFirstName, $inLastName){
		return "$inLastName, $inFirstName";
	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>UNit-3 PHP Functions</h2>
	<h3>Writing and using PHP functions</h3>
	
	<div>
		<h3>Student Roster 1</h3>
		<?php
			echo outputFullName1();
			$lName = "Smith";
			$fName = "Robert";
			echo outputFullName1();	
		?>
	</div>
	
	<div>
		<h3>Student Roster 2</h3>
		<?php
			outputFullName2('Jeff', 'Gullion');
			outputFullName2("Mary","Smith");
		?>
	</div>
	
	<div>
		<h3>Student Roster 3</h3>
		<?php
			echo outputFullName3("Robin","Moore");
			echo "<br>";
			echo outputFullName3("Karen","Cook");
		?>
	</div>
</body>
</html>











