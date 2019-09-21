
<?php
	include('ind.php');
	
	// if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else redirect to home page
        header("location: ../index.php");
    }
	
	else if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// validate submission
        if (empty($_POST["email"]))
        {			
			
			header("location: ../signup.php");
        }
        else if (empty($_POST["pass"]))
        {
            $_SESSION["msg"]= "You must provide your password.";
			header("location: ../signup.php");
        }
		else if (empty($_POST["pass2"]))
        {
            $_SESSION["msg"]= "Confirm your password.";
			header("location: ../signup.php");
        }
		else if($_POST["pass"]!= $_POST["pass2"])
        {
            $_SESSION["msg"]= "Password mismatch.";
			header("location: ../signup.php");
        }
		else{
			$Email = $_POST['email'];
			$Password = $_POST['pass'];
			$Name = $_POST['name'];
			
			// check if user exist
			$status = CheckUser($Email);
			if($status){
				//User already exist
				$_SESSION["msg"]= "User already exist.";
				header("location: ../signup.php");
			}
			else{
				//Create user
				$status = CreateUser($Email,$Name,$Password);
				if($status){
					$_SESSION["msg"]= "User created.";
					//Success redirect to login page
					header("location: ../index.php");
				}
				else{
					//Operation fail
					$_SESSION["msg"]= "Operation fail.";
					header("location: ../signup.php");
				}
			}
		}
		
	}
?>