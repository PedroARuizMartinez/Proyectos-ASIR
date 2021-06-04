<html>
	<head>
    	<!--IAW06 By Pedro Antonio Ruiz Martínez -->
		<title> Video Library </title>
	</head>
	<body>
		<?php
			//Connection to database
		
			include("conec.php");
			$link = connection();
			$consulta = " select * from library ";
		?>
		<table border = "1">
			<tr>
				<td colspan = "5" align = "center"> Pedro's Films </td>
			</tr>
			<tr>
				<td>IDfilm</td>
				<td>Name</td>
				<td>Minutes</td>
				<td>ForAdults</td>
				<td>Comments</td>
			</tr>
			<?php
				$result = mysql_query($consulta,$link);
				while($row = mysql_fetch_array($result)){ ?>
					<tr>
						<td><?php echo $row["IDfilm"];?></td>
						<td><?php echo $row["Name"];?></td>
						<td><?php echo $row["Minutes"];?></td>
						<td><?php echo $row["ForAdults"];?></td>
						<td><?php echo $row["Comments"];?></td>
					</tr>
				<?php
				}
				?>
		</table>
		<br>
		<a href = "index.php"> Home </a>
	</body>

</html>

