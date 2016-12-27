<?php
	$sql = "SELECT a.Application_ID, s.Student_Type, c.College, d.Degree_Type, m.Major, t.Term FROM APPLICATION AS a, STUDENT_TYPE AS s, COLLEGE AS c, DEGREE_TYPE AS d, MAJOR AS m, TERM AS t WHERE a.User_ID = " . $_SESSION["userid"] . " AND a.Stu_Type_ID = s.Stu_Type_ID AND a.College_ID = c.College_ID AND a.Deg_Type_ID = d.Deg_Type_ID AND a.Major_ID = m.Major_ID AND a.Term_ID = t.Term_ID";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		echo "<table style='width:75%'>";
		echo "<tr> <th> App ID </th> <th> Student Type </th> <th> College </th> <th> Degree </th> <th> Major </th> <th> Term </th> </tr>";
		while($row = mysqli_fetch_row($result)) {
			echo "<tr>";
			echo "<td><a href='confirm.php?id=" . $row[0] . "'>" . $row[0] . "</a></td>" . "<td>" . $row[1] . "</td>" . "<td>" . $row[2] . "</td>" . "<td>" . $row[3] . "</td>" . "<td>" . $row[4] . "</td>" . "<td>" . $row[5] . "</td>";
		}
		echo "</table> <br>";
	} else {
		echo "You have no saved applications. <br> <br>";
	}
?>