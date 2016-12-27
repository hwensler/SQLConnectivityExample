<?php include 'mysql_start.php'; ?>
<html>
	<head>
		<title>My Applications</title>
	</head>
	<style>
		table, th, td {
			border: 1px solid black;
			text-align: center;
		}
	</style>

	<body style="background-color:lightblue">
		<?php
			echo "Hello, " . $uname . "!";
		?>
		
		<h2>My Applications</h2>
		
		<?php include 'applications_table.php'; ?>
		
		<form method="GET" action="new-application.php">
			<input type="submit" value="Create New Application">
		</form>
		<hr> 
	</body> 
</html>
<?php include 'mysql_close.php'; ?>