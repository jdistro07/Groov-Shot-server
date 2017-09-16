<?php
	include("dbconn.php");

	$sql = "SELECT username FROM users";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "Username: " . $row['username'] . ";";
			echo "<br/>";
		}
	}
?>