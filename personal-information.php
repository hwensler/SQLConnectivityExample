<?php include 'mysql_start.php'; ?>
<html>
	<head>
		<title>Personal Information</title>
	</head>

	<body style="background-color:lightblue"> 
		<h2>Personal Information</h2>
		<p>
		<form method="POST" action="log_personal_information.php"> 
		
			<p>  
			First Name: <br />  
			<input type="text" size=50 name="fname"> 

			<p>  
			Last Name: <br />  
			<input type="text" size=50 name="lname"> 

			<p>  
			Preferred First Name: <br />  
			<input type="text" size=50 name="pfname">

			<p>  
			Preferred Last Name: <br />  
			<input type="text" size=50 name="plname"> 

			<p>  
			Date of Birth (YYYY-MM-DD): <br />  
			<input type="text" size=9 name="dob"> 

			<p>  
			Address <br />
			Street: <input type="text" size=40 name="street"> <br />
			City: <input type="text" size=64 name="city"> <br />
			State: <?php include "state_ddl.php" ?> <br />
			Country: <input type="text" size=64 name="country"> <br />
			Postal code: <input type="text" size=16 name="pcode"> <br />

			<p>
			Preferred phone number (X-XXX-XXX-XXXX): </br>
			<input type="text" size=14 name="phone"> <br />
			
			
			<p>
			US Citizen:
			<input name ="US_Citizen" type="radio" value="1">Yes
			<input name ="US_Citizen" type="radio" value="0">No

			<p>
			Native English Speaker:
			<input name ="English_Native_Lang" type="radio" value="1">Yes
			<input name ="English_Native_Lang" type="radio" value="0">No
			
			<p>
			Gender:
			<input name ="Gender" type="radio" value="Female">Female
			<input name ="Gender" type="radio" value="Male">Male
			<input name ="Gender" type="radio" value="Other">Other
			
			<p>
			Ethnicity (check all that apply):
			<?php include 'ethnicity_cb.php'; ?>
			<br> 
			
			<p>
			Veteran status:
			<select name="vet_status">
				<option value="Not a Veteran">Not a Veteran</option>
				<option value="Currently Serving">Currently Serving</option>
				<option value="Previously Served">Previously Served</option>
				<option value="Current Dependent">Current Dependent</option>
			</select> <br>
			
			<br>
			<?php
				echo 'Please check all that apply:';
				include 'military-branch_cb.php'; 
			?>
			<br>

			<input id="submit" type=submit value="Submit" />  
			<input id="reset" type=reset value="Clear" /> 
		</form>
		<hr> 
	</body> 
</html>
<?php include 'mysql_close.php'; ?>