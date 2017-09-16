<?php
	$serverName = "localhost";
	$serverUsername = "root";
	$serverPassword = "";
	$dbname = "grooveshot";

	$conn = new mysqli($serverName, $serverUsername, $serverPassword, $dbname);

	if(!$conn)
	{
		die("Connection Failed. " . mysqli_connection_error());
	}
?>