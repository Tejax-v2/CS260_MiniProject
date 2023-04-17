<?php
	// Database credentials
	$host = 'localhost'; // Replace with your database host name
	$user = 'admin'; // Replace with your database user name
	$password = 'admin'; // Replace with your database password
	$database = 'miniproject'; // Replace with your database name

	// Create a connection
	$conn = mysqli_connect($host, $user, $password, $database);

	// Check connection
	if (!$conn) {
		die('Connection failed: ' . mysqli_connect_error());
	}
	?>
