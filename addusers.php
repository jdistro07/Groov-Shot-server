<?php
	include("dbconn.php");

	$username = $_POST["usernamePost"];

	$sql = "INSERT INTO users (username) VALUES ('".$username."')";
	$result = mysqli_query($conn, $sql);
?>