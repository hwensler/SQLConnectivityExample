<?php
	include 'mysql_start.php';
	
	session_start();
	
	$sql = "START TRANSACTION";
	mysqli_query($conn, $sql);
	
	$stmt = mysqli_prepare($conn, "INSERT INTO APPLICATION VALUES(0, ?, CURDATE(), ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	mysqli_stmt_bind_param($stmt, "iiiiiiiiiii", $_SESSION["userid"], $_SESSION["term"], $_SESSION["degree"], $_SESSION["stype"], $_SESSION["college"], $_SESSION["major"], $_POST["finAid"], $_POST["empAsst"], $_POST["oProg"], $_POST["felony"], $_POST["probation"]);
	$insert_status = mysqli_stmt_execute($stmt);
	if (!$insert_status) {
		$error = "Server error: " . mysqli_stmt_error($stmt);
		mysqli_stmt_close($stmt);
		include 'mysql_close.php';
		die($error);
	}
	$appid = "" . mysqli_insert_id($conn);
	mysqli_stmt_close($stmt);
	
	foreach($_SESSION["ethnicity"] as $eth) {
		$stmt = mysqli_prepare($conn, "INSERT INTO APP_ETHNICITY VALUES(?, ?)");
		mysqli_stmt_bind_param($stmt, "ii", $appid, $eth);
		$insert_status = mysqli_stmt_execute($stmt);
		if (!$insert_status) {
			$error = "Server error: " . mysqli_stmt_error($stmt);
			mysqli_stmt_close($stmt);
			include 'mysql_close.php';
			die($error);
		}
		mysqli_stmt_close($stmt);
	}
	
	if($_SESSION["vet_status"] != "Not a Veteran") {
		foreach($_SESSION["veteran"] as $vet) {
			$stmt = mysqli_prepare($conn, "INSERT INTO APP_VETERAN VALUES(?, ?, ?)");
			mysqli_stmt_bind_param($stmt, "iis", $appid, $vet, $_SESSION["vet_status"]);
			$insert_status = mysqli_stmt_execute($stmt);
			if (!$insert_status) {
				$error = "Server error: " . mysqli_stmt_error($stmt);
				mysqli_stmt_close($stmt);
				include 'mysql_close.php';
				die($error);
			}
			mysqli_stmt_close($stmt);
		}
	}
	
	$stmt = mysqli_prepare($conn, "INSERT INTO APPLICANT VALUES(0, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	/*$pfname = NULL;
	$plname = NULL;
	if(isset($_SESSION["pfname"])) {
		$pfname = $_SESSION["pfname"];
	}
	if(isset($_SESSION["plname"])) {
		$plname = $_SESSION["plname"];
	}*/
	mysqli_stmt_bind_param($stmt, "isssssssssssiis", $appid, $_SESSION["fname"], $_SESSION["lname"], $_SESSION["pfname"], $_SESSION["plname"], $_SESSION["dob"], $_SESSION["street"], $_SESSION["city"], $_SESSION["state"], $_SESSION["country"], $_SESSION["pcode"], $_SESSION["phone"], $_SESSION["US_Citizen"], $_SESSION["English_Native_Lang"], $_SESSION["Gender"]);
	$insert_status = mysqli_stmt_execute($stmt);
	if (!$insert_status) {
		$error = "Server error: " . mysqli_stmt_error($stmt);
		mysqli_stmt_close($stmt);
		include 'mysql_close.php';
		die($error);
	}
	mysqli_stmt_close($stmt);
	
	$sql = "COMMIT";
	mysqli_query($conn, $sql);
	
	include 'mysql_close.php';
	
	header("Location: confirm.php?id=" . $appid);
?>