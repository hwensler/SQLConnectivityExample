<?php
	$sql = "SELECT * FROM MAJOR" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "<select name='major'>\n";
		while($row = mysqli_fetch_row($result)) {
			echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>\n";
			}
		echo "</select>\n";
	}
?>