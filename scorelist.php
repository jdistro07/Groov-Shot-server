<?php
	include("dbconn.php");

	$sql = "SELECT username, score FROM score_board ORDER BY score DESC";
	$res = mysqli_query($conn, $sql);

	if (mysqli_num_rows($res) > 0)
	{
		while ($row = mysqli_fetch_assoc($res))
		{
			echo $row['username'] . "|" . $row['score'] . ";";
		}
	}
?>