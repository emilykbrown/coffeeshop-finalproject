<?php
$passwordError = "";
$confirmPasswordError = "";
$emailError = "";

$isPasswordValid = false;
$isEmailValid = false;

if($_SERVER['REQUEST_METHOD']=="POST")
{

	//set password vals
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];

	//checking for password
	if(empty($_POST['password']))
	{
		$passwordError = "Password is required.";
	}

	if(empty($_POST['confirmPassword']))
	{
		$confirmPasswordError = "Password confirmation is required.";
	}

	if ($password != $confirmPassword) 
	{
		$confirmPasswordError = "Passwords must match";
	}

	else
	{
		$password = $_POST['password'];
		if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6,15}$/', $password))
		{
			$passwordError = "Make sure your password has at least 6 characters, no more than 15 characters, at least one number, one uppercase letter, one lowercase letter, and one special character.";
		}

		else
		{
			$hashOptions = ['cost'=>12];
			$hashPass = password_hash($password, PASSWORD_BCRYPT,$hashOptions);
			
			$isPasswordValid = true;
		}
	}

	//checking for email
	if(empty($_POST['email']))
	{
		$emailError = "Email is required.";
	}

	else
	{
		$email = $_POST['email'];
		if(!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/',$email))
		{
			$emailError = 'Invalid email.';
		}
		else
		{
			$email = $_POST['email'];
			$isEmailValid = true;
		}
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='assets/css/bootstrap.min.css' rel="stylesheet">
 	<script src="assets/js/all.min.js"></script>
 	<link rel="stylesheet" href="assets/css/all.min.css">
	<title>Login</title>
	<style type="text/css">
		.error {color: #fa0202}
	body {
  	background-image: url('assets/images/coffee-bg.jpg');
  	background-repeat: no-repeat;
  	background-attachment: fixed;  
  	background-size: cover;
	}
	</style>
</head>

<body>

<div style="background-color: white;"><h1>Navbar here later</h1></div>

<div class="container mt-3">

	<div class="card shadow p-3 mb-5 rounded w-75 align-middle" style="margin: 0 auto;">

		<p class="text-center"><b><font size="+5">Login</font></b></p>

		<div class="card-body">
		<!-- this form doesn't do anything right now -->
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

			<!-- Email -->
			<div class="row">

				<div class="col">
			    	<div class="container "><p class="text" align="right"><b><font size="+1">E-Mail</font></b></p></div>
				</div>

				<div class="col">
			    <div class="input-group mb-3">
			    	<span class="input-group-text" id="basic-addon3"><i class="fa-solid fa-envelope"></i></span>
						<input type="text" name="email" class="form-control" placeholder="E-Mail Address" id="email">
					</div>
					<span class="error"><?php echo $emailError ?></span>
				</div>

			</div>

			<!-- Password -->
			<div class="row">

				<div class="col">
			    	<div class="container "><p class="text" align="right"><b><font size="+1">Password</font></b></p></div>
				</div>

				<div class="col">
			    <div class="input-group mb-3">
			    	<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
						<input type="text" name='password' class="form-control" placeholder="Password" id='password'>
					</div>
					<span class="error"><?php echo $passwordError ?></span>
				</div>

			</div>

			<!-- Confirm Password -->
			<div class="row">

				<div class="col">
			    	<div class="container "><p class="text" align="right"><b><font size="+1">Confirm Password</font></b></p></div>
				</div>

				<div class="col">
			    <div class="input-group mb-3">
			    	<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
						<input type="text" name='confirmPassword' class="form-control" placeholder="Confirm Password" id='confirmPassword'>
					</div>
					<span class="error"><?php echo $confirmPasswordError ?></span>
				</div>

			</div>

			<!-- Newsletter signup -->
			<div class="row">

				<div class="col">
					<div class="container "><p class="text" align="right"><b><font size="+1">Sign up for our newsletter?</font></b></p></div>
				</div>

				<div class="col">
					<input type="checkbox" name="newsletter" class="form-control" id="newsletter">
					<label for="newsletter">not sure why this is stretched out, will fix later</label>
				</div>
			</div>

			<div class="row">
				<p>not really loving the centered look on this, will probably change it later</p>
			</div>

			<!-- Submit button -->
			<div class="container mt-3">
		    	<div class ="text-center"><button type="submit" class="btn btn-warning text-white">SUBMIT  <i class="fas fa-paper-plane"></i></button></div>
		  	</div>
		
		</form>
		</div>

	</div>

</div>

</body>

</html>