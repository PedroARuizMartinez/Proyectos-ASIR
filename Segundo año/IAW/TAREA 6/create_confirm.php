<html>
	<head>
    	<!--IAW06 By Pedro Antonio Ruiz Martínez -->
		<title> Pedro's Films </title>
	</head>

	<?php

		function alreadyExists(){
    		echo "FILM ALREADY EXISTS"; 
			
	?>
    
    <br>
    
    <a href = "create.php" > Return to previous page </a>

	<?php
	
		}


	include("conec.php");
	$link = connection();

	$Name = $_POST['Name'];
	$Minutes = $_POST['Minutes'];

	if ($_POST['Adult'] == "1" ){
		$Adult = 1;
	} else {
		$Adult = 0;
	}

	$Comments = $_POST['Comments'];
	$consulta = 'select * from library where Name = "'.$Name.'"';
	$resul = mysql_query($consulta,$link);

	if (mysql_num_rows ($resul) > 0){    
		alreadyExists();	

	}else{
		$Sql="insert into library
    			(Name , Minutes, ForAdults , Comments) values
    			('$Name','$Minutes' ,'$ForAdults' ,'$Comments')";
	
	$rs = mysql_query($Sql,$link);
	
	$consulta = 'select * from library where Name = "'.$Name.'"';
    $resul = mysql_query($consulta,$link);	
	
	if (mysql_num_rows ($resul) == 1){	 
		echo "Movie inserted"; 
	
	?>
	
    <br> <a href = "create.php" > Return to previous page </a>
	
    <?php
	
		}
	else {
		echo "Error, movie not inserted";
	
	?>
    
 	<br> 
    
    <a href = "create.php"> Return to previous page </a>
			
	<?php
	
			}
	}

	?>

</html>

