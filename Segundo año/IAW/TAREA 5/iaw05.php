<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IAW05</title>
</head>
<style type="text/css">

	body{margin:auto;
		 text-align:center;
		 border:1px solid black;
		 width:35%;
	 	 height:auto;}
	 
	h3{  margin:auto;
		 border:1px solid black;
		 width:70%;
		 height:auto;
		 text-align:center;} 
		
</style>

<body>
	<h3>Welcome to Pedro Language School Academy</h3>
	<br>
	<b>If you want to know how much you will have to pay, answer the following questions:</b>
	<br><br>
	<form method="POST" action="procesa_iaw05.php">
    
		<br>
		Your name is:
		<br>
		<textarea name="ClientName" cols=20 rows=1></textarea>
			<br><br>

			Language you want to study:
            <select name="language">
            <option value="1">Spanish</option>
            <option value="2">French</option>
            <option value="3">Italian</option>
            <option value="4">Portuguese</option>
            <option value="5">German</option>
            <option value="6">Russian</option>
            <option value="7">Chinese</option>
            </select>
            <br><br>
            
            Your level in the selected language is:
            <br>
            <input name="level" type="radio" value="basic">Basic
            <input name="level" type="radio" value="medium">Medium
            <input name="level" type="radio" value="advanced">Advanced
            <br><br>
            
            You want to come to the following lessons:
            <br> (One hour and a half each class)
            <br><br>
            
            Morning lessons:
            <br>
            <input name="checkbox[]" type="checkbox" value="5"> Monday 10:00
            <input name="checkbox[]" type="checkbox" value="10"> Wednesday 10:00
            <input name="checkbox[]" type="checkbox" value="5"> Friday 10:00
            <br><br>
            
            Afternoon lessons:
            <br>
            <input name="checkbox[]" type="checkbox" value="5"> Tuesday 17:00
            <input name="checkbox[]" type="checkbox" value="5"> Thursday 17:00
            <br><br>
            
            Weekend lessons:
            <br>
            <input name="checkbox[]" type="checkbox" value="5"> Saturday 09:00
            <br><br><br>
            <input type="submit" name="submit" value="Send"/> 
            
	</form>

</body>
</html>