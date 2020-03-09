<?php
session_start(); 

//Setup the variables used by the page
		//field data
	$inProdName = "";
	$inProdPrice = 0.00;
	$inRadio = "";
	$prodNameErrMsg = "";
	$prodNameInputErr = "";
	$prodPriceErrMsg = "";
	$prodPriceInputErr = "";
	$radioErrMsg = "";

	$validForm = false;

if(isset($_POST["prod_submit"]))
	{	
	echo "<h1>Thank you very very much</h1>";
	
	$inProdName = $_POST["prod_name"];
	$inProdPrice = $_POST["prod_price"];
	$inRadio = $_POST["radio"];
	
	if(isset($_POST["prod_submit"])){	//if radio, is checked store value
		$inRadio = $_POST["radio"];
	}
	
	echo "<p>prod_name: $inProdName</p>";
	echo "<p>prod_price: $inProdPrice</p>";
	echo "<p>radio: $inRadio</p>";
	
	$validForm = true; //sets flag for valid data
	//PHP validations will go here
	
	if($validForm){
		//do good things
	} else {
		//why you giving me grief with bad data- display all your mistakes with errrrrmsg on form
		//1. Bad Name
			//put data on form
		$prodNameInputErr = $inProdName;	//load error variable
			//put msg on form
		$prodNameErrMsg = "Invalid Name Field";
			//$validForm = false
		//2. Bad Price
		$prodPriceErrMsg = "Invalid Price Amount";
		$prodPriceInputErr = $inProdPrice;
		//3. Select Radio
		$radioErrMsg = "Please Select Color";
	}
	
} 
	else {
		echo "<h1>Please enter your info</h1>";
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<h1>WDV341 Intro PHP </h1>
<h2>Unit-8 Self Posting Form</h2>
<h3>Example Form</h3>
<p>Converting a form to a self posting form.</p>
<form name="form1" method="post" action="selfPostExample.php">
  <p>
    <label for="prod_name">Product Name: </label>
    <input type="text" name="prod_name" id="prod_name" value="<?php echo $inProdName ?>">
	<span><?php echo $prodNameErrMsg ?></span>
  </p>
  <p>
    <label for="prod_price">Product Price: </label>
    <input type="text" name="prod_price" id="prod_price" value="<?php echo $inProdPrice ?>">
	<span><?php echo $prodPriceErrMsg ?></span>
  </p>
  <p>Product Color:</p><span><?php echo $radioErrMsg ?></span>
  <p>
    <input type="radio" name="radio" id="prod_red" value="prod_red"
		   <?php if (isset($inRadio) && $inRadio == "prod_red") echo "checked";?>>
    <label for="prod_red">Red Wagon<br>
    </label>
    <input type="radio" name="radio" id="prod_green" value="prod_green"
		   <?php if (isset($inRadio) && $inRadio == "prod_green") echo "checked";?>>
    <label for="prod_green">Green Wagon</label>
  </p>
  <p>
    <input type="submit" name="prod_submit" id="prod_submit" value="Submit">
    <input type="reset" name="Reset" id="button" value="Reset">
  </p>
</form>
<p>&nbsp;</p>
</body>
</html>