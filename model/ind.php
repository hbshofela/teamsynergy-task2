<?php
	session_start();
	include("conn.php");
	
	function LoginUser($Email, $Password){
		$name = $Email;
		$pass = $Password;
		
		$result = $conn-> query ("SELECT * FROM people WHERE name='$name' AND pass = '$pass'") or die($conn->error);
			
		if ($result->num_rows <= 0){
			return false;
			}
		else {
			return true;
		}
		
	 }
	 
	function CreateUser($Email, $Name, $Password){

		$name = $Email;
		$name = $Name;
		$pass = $Password;
		
		$result = $conn->query ("INSERT INTO people (email, name, pass)  VALUES($email, '$name', '$pass')") or die($conn->error);
			
		if ($result->num_rows <= 0){
			return false;
			}
		else {
			return true;
		}
	 }	
	 
	 function CheckUser($Email){
		
		$email = $Email;
		
		$result = $conn->query ("SELECT * FROM people WHERE email='$email'") or die($conn->error);
		
		if ($result->num_rows <= 0){
			return false;
			}
		else {
			return true;
		}
	 }	
?>