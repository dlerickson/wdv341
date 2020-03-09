<?php

	$counter = 20;

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		
		body {
			background-color:lightgray;
			<?php
				if($counter<12){
					echo "color:lightblue;";
				}
				else {
					echo "color:lightgreen;";
				}
			?>
		}
	
		<?php 
			echo "h1 {background-color:limegreen;}";
			echo "h3 {background-color:red;}";		
		?>
	
	</style>
	<script>
	
		<?php
			echo "let name='Jeff';";
			//echo "h3 {background-color:red;}"; //this breaks in browser
		?>
		
		console.log(name);	//output name variable to log
		
		<?php
			echo "let names = ['Mary','Mark'];";
		?>
		
		console.log(names);	//display array from PHP
	
	</script>
</head>

<body>
	<h1>WDV341 Intro PHP</h1>
	<h2>Unit:2 PHP Basics</h2>
	<h3>Using PHP to output HTML, CSS and Javascript.</h3>
	<?php
		echo "<p>This is output by PHP on the server.</p>"; 
	?>
</body>
</html>







