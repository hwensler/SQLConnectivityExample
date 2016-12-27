<html>
	<head>
		<title>New Account</title>
	</head>

	<body style="background-color:lightblue"> 
		<h2>New Account</h2>
		<p>
		<form method="POST" action="insert_user.php"> 
			<p>  
			User name:
			<input type="text" size=64 name="newuname"> 

			<p>  
			Password:
			<input type="password" size=64 name="newpword"> 
			
			<p>  
			Confirm Password:
			<input type="password" size=64 name="cpword"> 
			
			<br> <br>
			<input id="submit" type=submit value="Submit" />  
		</form>
		<hr> 
	</body> 
</html>