<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Basics</title>
	<script>
	
		var prgLang = ["PHP", "Javascript", "HTML"]
		
	</script>
	
	<?php 
	
		$yourName = 'Don';
		$assgmnt = 'PHP Basics';
		$numOne = 8;
		$numTwo = 24;
	
	?>
</head>
<?php echo "<h1>$assgmnt</h1>"; ?>
	
<h2><?php echo "$yourName"; ?></h2>
	
<p>Value of number one: <?php echo $numOne ?></p>
	
<p>Value of number two: <?php echo $numTwo ?></p>
	
<p>The sum of the numbers: <?php echo $numOne + $numTwo ?></p>
	
<p>Some programing languages: <?php $prgLang = array("PHP", "Javascript", "HTML");
	echo $prgLang[0] . ", " . $prgLang[1] . ", " . $prgLang[2] ; ?>.</p>
<body>
</body>
</html>