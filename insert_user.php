<?php
	include 'mysql_start.php';
	$uname = $_POST["newuname"];
	
	if ($_POST["newpword"] != $_POST["cpword"]) {
		die("Passwords  do not match. Please go back and try again. ");
	}
	
	$stmt = mysqli_prepare($conn, "INSERT INTO USER VALUES(0, ?, ?)");
	mysqli_stmt_bind_param($stmt, "ss", $_POST["newuname"], MD5($_POST["newpword"]));
	
	$insert_status = mysqli_stmt_execute($stmt);
	
	if (!$insert_status) {
		$error = "Failed  to create account: " . mysqli_stmt_error($stmt);
		mysqli_stmt_close($stmt);
		include 'mysql_close.php';
		die($error);
	}
	
	session_start();
	$_SESSION["userid"] = "" . mysqli_insert_id($conn);
	
	mysqli_stmt_close($stmt);
	include 'mysql_close.php';
	
	include 'my_applications.php';
?>