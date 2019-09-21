
<?php
	
	include('ind.php');
	
	// if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
		unset($_SESSION['msg']);
        // else redirect to home page
        header("location: ../index.php");
    }
	
	else if ($_SERVER["REQUEST_METHOD"] == "POST"){
		
		// validate submission
        if (empty($_POST["email"]))
        {			
			
			header("location: ../index.php");
        }
        else if (empty($_POST["pass"]))
        {
            $_SESSION["msg"]= "You must provide your password.";
			header("location: ../index.php");
        }
		else{
			$Email = $_POST['email'];
			$Password = $_POST['pass'];
			$status = LoginUser($Email,$Password);
			if($status)
			{
				$_SESSION["name"]= $Email;
				//Success redirect to home page
				header("location: ../home.php");
			}
			else{
				//Operation fail
				$_SESSION["msg"]= "Operation fail.";
				header("location: ../index.php");
			}
		}
		
	}
?>