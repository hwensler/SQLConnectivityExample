<?php
	$sql = "SELECT * FROM DEGREE_TYPE" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "<select name='degree'>\n";
		while($row = mysqli_fetch_row($result)) {
			echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>\n";
			}
		echo "</select>\n";
	}
?>