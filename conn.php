<?php
	$conn = new mysqli('localhost', 'root', '', 'mis_db');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>