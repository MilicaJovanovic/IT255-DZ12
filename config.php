<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "hotel";

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
		die("Nije moguće ostvariti konekciju na bazu podataka!");
	}
?>