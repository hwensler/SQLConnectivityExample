<?php
	$sql = "SELECT * FROM STUDENT_TYPE" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "<select name='stype'>\n";
		while($row = mysqli_fetch_row($result)) {
			echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>\n";
			}
		echo "</select>\n";
	} 
	else {
		echo "0 results";
	}
?>
