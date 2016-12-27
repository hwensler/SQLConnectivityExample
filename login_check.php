<?php
	include 'mysql_start.php';
	$uname = $_POST["uname"];
	$stmt = mysqli_prepare($conn, "SELECT User_ID, Username, Password FROM USER WHERE Username = ? and Password = ?");
	mysqli_stmt_bind_param($stmt, "ss", $_POST["uname"], MD5($_POST["pword"]));
	mysqli_stmt_execute($stmt);
	mysqli_stmt_bind_result($stmt, $col1, $col2, $col3);
	$count = 0;
	
	while (mysqli_stmt_fetch($stmt)) {
		$count++; 
	}
	
	if ($count == 1) {
		session_start();
		$_SESSION["userid"] = "" . $col1;
	}
	
	mysqli_stmt_close($stmt);
	include 'mysql_close.php';
	
	if ($count == 0) {    
		echo 'This  username/password combination is not valid. Please go back and try again';
		exit;
	}
	
	include 'my_applications.php';
?>