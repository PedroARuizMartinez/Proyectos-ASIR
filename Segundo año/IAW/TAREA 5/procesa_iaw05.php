<html>
<title>Languages Pedro</title>
<style type="text/css">

	h3 {margin:auto;
		border:1px solid black;
		width:20%;
		height:auto;
		text-align:center;}
	
	h2 {margin:auto;
		border:1px solid black;
		width:25%;
		height:auto;
		text-align:center;}
		
	body {text-align:center; }	
	
</style>
<body>
    <h2>Welcome to Pedro Language Academy</h2>
    <br>
    
    Thanks for your query,  
    <b><?php echo ($_POST['ClientName']); ?></b>
    <br><br>

	<?php
    
		/*We declare the variable "price".
		It will store the price of the selected language.*/
		$price = 0;
		
		/*Depending on the demand of the language, 
		the price may be different:*/
		$language = $_POST['language'];
		switch ($language) {
		case '1': //Spanish
		$price = $price + 10;
		break;
		
		case '2': //French
		$price = $price + 15;
		break;
		
		case '3': //Italian
		$price = $price + 15;
		break;
		
		case '4': //Portuguese
		$price = $price + 15;
		break;
		
		case '5': //German
		$price = $price + 20;
		break;
		
		case '6': //Russian
		$price = $price + 25;
		break;
		
		case '7': //Chinese
		$price = $price + 25;
		break;
		}
	?>
		
	<?php
		
		//Price will store the value of the selected level
		$price2 = 0;
		
		//Depending on the student level, the lessons costs also have variations:
		$level = $_POST['level'];
		switch ($level) {
		
		case 'basic':
		$price2 = $price2 + 10;
		break;
		
		case 'medium':
		$price2 = $price2 + 15;
		break;
		
		case "advanced":
		$price2 = $price2 + 20;
		break;
		}
	?>
		
    <?php 
    
		if(isset($_POST['submit'])){ 
		  
		$checkbox = $_POST['checkbox']; // Returns an array containing the values of the active fields
		
		//Price3 will store the sum value of the selected options in the checkbox
		$price3 = 0; 
		
		if(count($checkbox) > 0){ 
		
		foreach($checkbox as $valor){ // Scroll the array
		
		$price3 += $valor; // It adds up the values
		
		}}}
    ?>
    
    <b><?php echo "The price consists of: ";?></b>
    
    <br><br>
    
    <?php echo "- Selected Language: " . $price . " €";?>
    
    <br>
    
    <?php echo "- Price of the selected level: " . $price2 . " €";?>
    
    <br>
    
    <?php echo "- Selected Days: " . $price3 . " €. ";?>
    
    <br><br>
    
    <h3><?php echo "This makes a total of: " . ($price + $price2 + $price3) . " €";?></h3>
    
    <br>
    
    <a href="iaw05.php"><button>COME BACK</button></a>
    
</body>
</html>

