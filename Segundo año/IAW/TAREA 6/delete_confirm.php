<html>
	<head>
    	<!--IAW06 By Pedro Antonio Ruiz Martínez -->
		<title> Pedro's films </title>
	</head>

	<?php
	
	function doesNotExist(){
		
	?>
    
    <h3> INSERTED MOVIE DOES NOT EXIST </h3>
    
    <br>
    
    <a href = "delete.php"> Return to previous page </a>
	
	<?php
	}

	$IDfilm = $_POST['IDfilm'];
	
	include("conec.php");
	$link=connection();
	
	$consulta = 'select IDfilm from library where IDfilm =\''.$IDfilm.'\'';
	$resul = mysql_query($consulta,$link);
	
	if (mysql_num_rows ($resul) == 0) {
			
			doesNotExist();	
	}else {
	
			  $link2 = connection();
			  $IDfilm = $_POST['IDfilm'];
			  $Sql = 'DELETE from library where IDfilm =\''.$IDfilm.'\'';
			  mysql_query($Sql,$link2);
			  $consulta='select * from library where IDfilm =\''.$IDfilm.'\'';
	 		  $resul=mysql_query($consulta,$link2);
	
	 		  if (mysql_num_rows ($resul) == 0){
				  
	?>			
	
    <h3> Film deleted </h3> 
    
    <br>
	
    <a href = "delete.php"> Return to previous page </a>
		
    <?php	
			}
				  else
			{
	?>
	
    <h3> Error, film not deleted </h3> 
    
    <br>
    
	<a href = "delete.php"> Return to previous page </a>
    
	<?php    
			}
			
			
	}
	
	?>

</html>
