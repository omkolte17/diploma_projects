<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Digital Library - Register</title>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="index.php">Digital Library</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">  
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="books.php">Books</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="registration.php">Register</a>
				</li>
				<?php if(!isset($_SESSION["username"])){?>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<?php }else{ ?>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
				<?php }?>
			</ul>
		</div>
		<?php if(isset($_SESSION["username"])) {?>
		<a class="navbar-brand" style="font-size: 14px;" href="#"><?php if (isset($_SESSION["username"])){echo "Hi, ".$_SESSION["username"];}?></a>
		<?php }?>
	</nav>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/lib.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Registration
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5">

					<div class="container-login100-form-btn m-t-32">
						<?php
							require('db.php');
							if (isset($_REQUEST['username'])){
								$username = stripslashes($_REQUEST['username']);
								$username = mysqli_real_escape_string($con,$username); 
								$email = stripslashes($_REQUEST['email']);
								$email = mysqli_real_escape_string($con,$email);
								$password = stripslashes($_REQUEST['password']);
								$password = mysqli_real_escape_string($con,$password);
								$trn_date = date("Y-m-d H:i:s");
									$query = "INSERT into `users` (username, password, email, trn_date)
							VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
									$result = mysqli_query($con,$query);
									if($result){
										echo "<h5>Registration Done</h5>";
									}
								}
							?>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="text" name="email" placeholder="E-Mail">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<input type="submit" name="submit" value="Register" class="login100-form-btn">
					</div>
					<div class="container-login100-form-btn m-t-32">
						<h5>Already a Member? <a href="login.php">Login</a></h5>
					</div>

				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>