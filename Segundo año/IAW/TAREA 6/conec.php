<?php

	//IAW06 By Pedro Antonio Ruiz Martínez 
	function connection(){

		if (!($link=mysql_connect("localhost","root",""))){
			echo "Error in MySQL connection";
			exit();
		}
		
		if (!mysql_select_db("films",$link)){
			echo "Error in database selection.";
			exit();
		}
		return $link;
	}
	
?>

