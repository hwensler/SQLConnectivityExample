<?php
	session_start();

	$_SESSION["stype"] = $_POST["stype"];
	$_SESSION["college"] = $_POST["college"];
	$_SESSION["degree"] = $_POST["degree"];
	$_SESSION["major"] = $_POST["major"];
	$_SESSION["term"] = $_POST["term"];
	
	header("Location: personal-information.php");
?>