<?php
	$sql = "SELECT * FROM VETERAN" ;
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "<br>";
		while($row = mysqli_fetch_row($result)) {
			echo "<input type='checkbox' name='veteran[]' value=" . $row[0] . "> " . $row[1] . " </input>\n";
			echo "<br>";
			}
		echo "</select>\n";
	}
?>
