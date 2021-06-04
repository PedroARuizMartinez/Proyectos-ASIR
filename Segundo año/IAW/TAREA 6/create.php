<html>
	<head>
    	<!--IAW06 By Pedro Antonio Ruiz Martínez -->
		<title>Pedro's Films</title>
	</head>
	<body>
		<H1>Create Film</H1>
        
        <br>
    	
        <h3> Insert data of the movie to be created: </h3>

		<br><br>
        
		<FORM name = "form1" ACTION="create_confirm.php" method = "post">
			<TABLE>
				<TR>
					<TD>Name</TD>
					<TD><INPUT TYPE="VARCHAR" NAME="Name" SIZE="50" MAXLENGTH="50"></TD>
				</TR>

				<TR>
					<TD>Minutes</TD>
                    <TD><INPUT TYPE="INT" NAME="Minutes" SIZE="3" MAXLENGTH="3"></TD>
                </TR>
                    
                <TR>
                    <TD>Film for those above 18 years?</TD>
                    <TD><select name="Adult" >
                    		<option value="1">Yes</option>
                            <option value="2">Not</option>
                        </select></TD>
                </TR>
                    
                <TR>
                	<TD>Other comments:</TD>
                    <TD><INPUT TYPE="text" NAME="Comments" SIZE="100" MAXLENGTH="500"></TD>
                </TR>

			</TABLE>
            
            <br>
            
			<INPUT TYPE="submit" value="Send">

		</FORM>

		<br><br><br>

		<a href = "index.php"> Home </a>
	</body>
</html>

