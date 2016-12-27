<?php include "mysql_start.php" ?>
<html>
	<head>
		<title>Confirmation</title>
	</head>

	<body style="background-color:lightblue"> 
		<h2>Confirmation</h2>
		
		<?php echo $college; ?>

		<?php include "confirm_info.php" ?>
		
		<br> If you'd like to view your completed applications or create a new application, 
		please <a href="login.php">log in again</a>
	</body> 
</html>
<?php include "mysql_close.php" ?>