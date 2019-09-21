<?php
	//$servername = "localhost";
	//$username = "root";
	//$password = "";
	//$db="login";

	$servername = "tyduzbv3ggpf15sx.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
	$username = "icfnzdm2bah1l04t";
	$password = "r7lwux1y2ls2cypf";
	$db="f3aht08s1ba49maw";
	//created connection_aborted
	$conn = new mysqli($servername, $username, $password, $db);
	//check connection
	if ($conn->connect_error){
		die("connection error" . $mysqli->connect_error);

	} else {
	}

?>