<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
	<title>Digital Library - Home</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--===============================================================================================-->		
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->		
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<!--===============================================================================================-->	
	<script type="text/javascript" src="js/popper.min.js"></script>
<!--===============================================================================================-->	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->	
	<style>
		body {
			background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url("images/home.jpg");
			max-width: 100%;
			height: auto;
			background-size: cover;
			background-repeat: repeat;
			padding: 0;
			margin: 0;
		}
		.box {
			box-sizing: border-box;
			border: 4px solid white;
		}
		h2 {
			cursor: pointer;
			padding: 10px;
			margin: 0;
			top: 50%;
			left: 50%;
			display: inline;
			position: absolute;
			text-align: center;
			color: white;
			transform: translateX(-50%) translateY(-50%);
			font-size:3.5vw;
		}
	</style>
</head>

<body data-gr-c-s-loaded="true">
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
				<!--Add this this in every nav bar-->
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
		<!--Add this "a" tag in every nav bar-->
		<?php if(isset($_SESSION["username"])) {?>
		<a class="navbar-brand" style="font-size: 14px;" href="#"><?php if (isset($_SESSION["username"])){echo "Hi, ".$_SESSION["username"];}?></a>
		<?php }?>
	</nav>

		<h2 class="box">Digital Library</h2>


</body>

</html>