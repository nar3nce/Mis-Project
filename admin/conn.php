<?php
	$conn = new mysqli('localhost', 'root', '', 'payrol_design');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>