<?php
	$servername = "localhost";
	$username = "id19042775_localhost";
	$password = "q~~W[xh$4}rH+^cO";
	$dbname = "id19042775_yorecyturecdb";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	// sql to create table
	$sql = "CREATE TABLE MyGuests (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
	  echo "Table MyGuests created successfully";
	} else {
	  echo "Error creating table: " . $conn->error;
	}

	$conn->close();
?>