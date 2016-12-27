<?php
	$sql = "SELECT s.Student_Type, c.College, d.Degree_Type, m.Major, t.Term FROM APPLICATION AS a, STUDENT_TYPE AS s, COLLEGE AS c, DEGREE_TYPE AS d, MAJOR AS m, TERM AS t WHERE a.Application_ID = " . $_GET["id"] . " AND a.Stu_Type_ID = s.Stu_Type_ID AND a.College_ID = c.College_ID AND a.Deg_Type_ID = d.Deg_Type_ID AND a.Major_ID = m.Major_ID AND a.Term_ID = t.Term_ID";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
		echo "<span style='font-weight:bold'>New Application:</span>";
		$row = mysqli_fetch_row($result);
		echo "<table style='width:75%'>";
		echo "<tr><td>What type of Student are you?</td><td>" . $row[0] . "</td>";
		echo "<tr><td>Which College are you applying for?</td><td>" . $row[1] . "</td>";
		echo "<tr><td>What type of Degree are you applying for?</td><td>" . $row[2] . "</td>";
		echo "<tr><td>Please select the major you are applying to?</td><td>" . $row[3] . "</td>";
		echo "<tr><td>Term</td><td>" . $row[4] . "</td>";
		echo "</table> <br>";
	}
	
	$sql = "SELECT * FROM APPLICANT WHERE Application_ID = " . $_GET["id"];
	$sql2 = "SELECT ETHNICITY.Ethnicity FROM APP_ETHNICITY, ETHNICITY WHERE APP_ETHNICITY.Ethnicity_ID = ETHNICITY.Ethnicity_ID AND Application_ID = " . $_GET["id"];
	$sql3 = "SELECT VETERAN.Military_Branch, APP_VETERAN.Vet_Status FROM APP_VETERAN, VETERAN WHERE VETERAN.Veteran_ID = APP_VETERAN.Veteran_ID AND APP_VETERAN.Application_ID = " . $_GET["id"];
	$result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);
	$result3 = mysqli_query($conn, $sql3);
	echo mysqli_error($conn);
	if (mysqli_num_rows($result) == 1) {
		echo "<span style='font-weight:bold'>Personal Information:</span>";
		$row = mysqli_fetch_row($result);
		echo "<table style='width:75%'>";
		echo "<tr><td>First Name:</td><td>" . $row[2] . "</td>";
		echo "<tr><td>Last Name:</td><td>" . $row[3] . "</td>";
		if ($row[4] != null) {
			echo "<tr><td>Preferred First Name:</td><td>" . $row[4] . "</td>";
		}
		if ($row[5] != null) {
			echo "<tr><td>Preferred Last Name:</td><td>" . $row[5] . "</td>";
		}
		echo "<tr><td>Date of Birth:</td><td>" . $row[6] . "</td>";
		echo "<tr><td>Street:</td><td>" . $row[7] . "</td>";
		echo "<tr><td>City:</td><td>" . $row[8] . "</td>";
		echo "<tr><td>State:</td><td>" . $row[9] . "</td>";
		echo "<tr><td>Country:</td><td>" . $row[10] . "</td>";
		echo "<tr><td>Postal code:</td><td>" . $row[11] . "</td>";
		echo "<tr><td>Preferred phone number</td><td>" . $row[12] . "</td>";
		if ($row[13]) {	
			echo "<tr><td>US Citizen:</td><td>Yes</td>";
		} else {
			echo "<tr><td>US Citizen:</td><td>No</td>";
		}
		if ($row[14]) {	
			echo "<tr><td>Native English Speaker:</td><td>Yes</td>";
		} else {
			echo "<tr><td>Native English Speaker:</td><td>No</td>";
		}
		echo "<tr><td>Gender:</td><td>" . $row[15] . "</td>";
		
		if (mysqli_num_rows($result2) > 0) {
			while($row2 = mysqli_fetch_row($result2)) {
				echo "<tr><td>Ethnicity:</td><td>" . $row2[0] . "</td>";
			}
		}
		echo "</table> <br>";
	}

	if (mysqli_num_rows($result3) > 0) {
		echo "<table style='width:75%'><tr><th>Military Branch</th><th>Veteran Status</th>";
		while($row3 = mysqli_fetch_row($result3)) {
			echo "<tr><td>" . $row3[0] . "</td><td>" . $row3[1] . "</td>";
		}
		echo "</table><br>";
	}
	
	$sql = "SELECT Financial_Aid, Emp_Tuit_Asst, Other_Programs, Convicted_Felon, Higher_Ed_Sanction FROM APPLICATION WHERE Application_ID = " . $_GET["id"];
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) == 1) {
		echo "<span style='font-weight:bold'>Application Information:</span>";
		$row = mysqli_fetch_row($result);
		echo "<table style='width:75%'>";
		if ($row[0]) {	
			echo "<tr><td>Will you be applying for Financial Aid:</td><td>Yes</td>";
		} else {
			echo "<tr><td>Will you be applying for Financial Aid:</td><td>No</td>";
		}
		if ($row[1]) {	
			echo "<tr><td>Do you have employer tuition assistance:</td><td>Yes</td>";
		} else {
			echo "<tr><td>Do you have employer tuition assistance:</td><td>No</td>";
		}
		if ($row[2]) {	
			echo "<tr><td>Are you also applying to other programs:</td><td>Yes</td>";
		} else {
			echo "<tr><td>Are you also applying to other programs:</td><td>No</td>";
		}
		if ($row[3]) {	
			echo "<tr><td>Have you ever been convicted of a felony or gross misdemeanor:</td><td>Yes</td>";
		} else {
			echo "<tr><td>Have you ever been convicted of a felony or gross misdemeanor:</td><td>No</td>";
		}
		if ($row[4]) {	
			echo "<tr><td>Have you ever been placed on probation, suspended from, dismissed from or otherwise sanctioned by any higher education institution:</td><td>Yes</td>";
		} else {
			echo "<tr><td>Have you ever been placed on probation, suspended from, dismissed from or otherwise sanctioned by any higher education institution:</td><td>No</td>";
		}
		echo "</table> <br>";
	}
?>