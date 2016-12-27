<html>
	<head>
		<title>Login</title>
	</head>

	<body style="background-color:lightblue"> 
		<h2>Login</h2>
		<p>
		<form method="POST" action="login_check.php"> 
			<p>  
			User name:
			<input type="text" size=64 name="uname"> 
			
			<p>  
			Password:
			<input type="password" size=64 name="pword"> 
			
			<br> <br>
			<input id="submit" type=submit value="Submit" />
			<a href="new_account.php"> Create New Account </a>  
		</form>
		<hr> 
	</body> 
</html>