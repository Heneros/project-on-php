<?php 
include("includes/classes/Account.php");

include("includes/classes/Constants.php");
$account = new Account();

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name){
	if(isset($_POST[$name])){
		echo $_POST[$name];
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
	<div class="row align-items-start">
	<div class="col-9">
	  <div id="inputContainer">
		<form id="loginForm"  class="form-group" action="register.php" method="POST">
<!-- 			display-4   style="color: white" -->
			<h2 class="display-5">Login to your account</h2>
			<p>
				<label for="loginUsername">Username</label>
				<input id="loginUsername"  class="form-control form-control-sm" name="loginUsername" type="text" placeholder="Username"  required>
			</p>
			<p>
				<label for="loginPassword">Password</label>
				<input id="loginPassword"  class="form-control form-control-md" name="loginPassword" type="password" placeholder="Password" required>
			</p>
			<button type="submit"  class="btn btn-primary" name="loginButton">LOG IN</button>
		</form>






		<form id="registerForm"  class="form-group" action="register.php" method="POST">
			<h2>Create your free account</h2>
			<p>
				<?php echo $account->getError(Constants::$usernameCharacters); ?>
				<label for="username">Username</label>
				<input id="username"  class="form-control form-control-md" name="username" type="text"  placeholder="Exampl1213"  value="<?php getInputValue('username')?> " required>
			</p>

			<p> 	
				<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
				<?php echo $account->getError(Constants::$emailInvalid); ?>
				<label for="email">Email</label>
				<input id="email"  class="form-control form-control-md" name="email" type="email" value="<?php getInputValue('email') ?>" placeholder="example@gmail.com" required>
			</p>

			<p>
				<label for="email2">Confirm email</label>
				<input id="email2"  class="form-control form-control-md" name="email2" type="email" value="<?php getInputValue('email2') ?>" placeholder="e.g. john@gmail.com" required>
			</p>
			<p>
				<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
				<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
				<?php echo $account->getError(Constants::$passwordCharacters); ?>
				<label for="password">Password</label>
				<input id="password"  class="form-control form-control-md" name="password" type="password" placeholder="Your password" required>
			</p>

			<p>
				<label for="password2">Confirm password</label>
				<input id="password2"  class="form-control form-control-md" name="password2" type="password" placeholder="Confirm your password" required>
			</p>
			<button type="submit" class="" name="registerButton">SIGN UP</button>	
		</form>
	  </div>
  </div>
 </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>