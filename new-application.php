<?php include 'mysql_start.php'; ?>
<html>
	<head>
		<title>New Application</title>
	</head>

	<body style="background-color:lightblue"> 
		<h2>New Application</h2> 	
		<p> 	
		<form method="POST" action="log_new_application.php">
			<label name='Student_Type'>Student type: </label> 
			<?php include 'student-type_ddl.php'; ?>
	
			<br><br>
			<label name='College'>College: </label>
			<?php include 'college_ddl.php'; ?>
	
			<br><br>
			<label name='Degree_Type'>Degree: </label>
			<?php include 'degree_ddl.php'; ?>
	
			<br><br>
			<label name='Major'>Major: </label>
			<?php include 'major_ddl.php'; ?>

			<br><br>
			<label name='Term'>Term: </label>
			<?php include 'term_ddl.php'; ?>
		</p>
		<input type=submit value="Submit" />  
		<input type=reset value="Clear" />  
		</form>
		<hr> 
	</body> 
</html>
<?php include 'mysql_close.php'; ?>