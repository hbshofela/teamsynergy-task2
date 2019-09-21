<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="login";
	//created connection_aborted
	$conn = new mysqli($servername, $username, $password, $db);
	//check connection
	if ($conn->connect_error){
		die("connection error" . $mysqli->connect_error);
	} else {
		
	}

?>