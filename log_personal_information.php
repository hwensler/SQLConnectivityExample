<?php
	session_start();

	$_SESSION["fname"] = $_POST["fname"];
	$_SESSION["lname"] = $_POST["lname"];
	$_SESSION["pfname"] = $_POST["pfname"];
	$_SESSION["plname"] = $_POST["plname"];
	$_SESSION["dob"] = $_POST["dob"];
	$_SESSION["street"] = $_POST["street"];
	$_SESSION["city"] = $_POST["city"];
	$_SESSION["state"] = $_POST["state"];
	$_SESSION["country"] = $_POST["country"];
	$_SESSION["pcode"] = $_POST["pcode"];
	$_SESSION["phone"] = $_POST["phone"];
	$_SESSION["US_Citizen"] = $_POST["US_Citizen"];
	$_SESSION["English_Native_Lang"] = $_POST["English_Native_Lang"];
	$_SESSION["Gender"] = $_POST["Gender"];
	$_SESSION["ethnicity"] = $_POST["ethnicity"];
	$_SESSION["vet_status"] = $_POST["vet_status"];
	$_SESSION["veteran"] = $_POST["veteran"];
	
	header("Location: application-information.php");
?>