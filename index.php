<?php
	session_start();
	 $_SESSION['name'] = "";
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php');?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><strong>TS</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
		<li><a href="#">HOME</a></li>
        <li><a href="#">ABOUT</a></li>
        <li><a href="#">TEAM</a></li>
        <li><a href="#">CONTACT</a></li>
       
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
  <h1>Team Synergy</h1> 
  <p>We stand together</p> 
  <div class="row">
	<div class="col-md-4 col-md-offset-4">
	
	<?php if($_SESSION['msg'] ):
		echo $_SESSION['msg'];
		$_SESSION['msg'] = '';
	endif ?>
	
		<form action="model/login.php" method="post">
		<div class="row">
				
					<div class="form-group">
						<label for="sender-email">Email Address:</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="glyphicon glyphicon-user"></i></div>
							<input type="text" class="form-control" id="sender-email" name="email" placeholder="Enter your Email Address" value="" required="">
							
							
						</div>
						<div class="help-block with-errors"></div>
					</div>
				
			
					<div class="form-group">
						<label for="sender-email">Password:</label>
						<div class="input-group">
							<div class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></div>
							<input type="password" class="form-control" id="" name="pass" placeholder="Enter your Password" value="" required="">
							
							
						</div>
						<div class="help-block with-errors"></div>
					</div>
				
					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block">Submit</button>
					</div>
				<p>Already have an account, <i class="glyphicon glyphicon-hand-right"></i> <a href="signup.php">Signup here</a></p>
			
			</div>

	  </form>
	</div>
  </div>
  
</div>
<?php include('footer.php');?>

</body>
</html>
