<?php

function Connect()
{
	// Database connection parameters
	$dbhost = "localhost"; // Database host
	$dbuser = "root";      // Database username
	$dbpass = "";          // Database password (empty for XAMPP default)
	$dbname = "car_booking"; // Database name

	// Create connection
	$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

	// Check connection
	if ($conn->connect_error) {
		// Output error message without exposing sensitive details
		die("Database connection failed: " . $conn->connect_error);
	}

	// Return the connection object
	return $conn;
}
?>
