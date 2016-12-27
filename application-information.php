<html>
	<head>
		<title>Application Information</title>
	</head>

	<body style="background-color:lightblue"> 
		<h2>Application Information</h2>
		<form method="POST" action="insert_application.php">
		
			Will you be applying for Financial Aid:
			<input name ="finAid" type="radio" value="1">Yes
			<input name ="finAid" type="radio" value="0">No

			<p>
			Do you have employer tuition assistance:
			<input name ="empAsst" type="radio" value="1">Yes
			<input name ="empAsst" type="radio" value="0">No
		
			<p>
			Are you also applying to other programs:
			<input name ="oProg" type="radio" value="1">Yes
			<input name ="oProg" type="radio" value="0">No

			<p>
			Have you ever been convicted of a felony or a gross misdemeanor:
			<input name ="felony" type="radio" value="1">Yes
			<input name ="felony" type="radio" value="0">No
			
			<p>
			Have you ever been placed on probation, suspended from, dismissed from or otherwise sanctioned by any higher education institution:
			<input name ="probation" type="radio" value="1">Yes
			<input name ="probation" type="radio" value="0">No
			<br> <br>
			
			<input type=submit value="Submit" />  
			<input type=reset value="Clear" />  
		</form>
		<hr> 
	</body> 
</html>