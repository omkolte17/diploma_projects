<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
	<title>The Da Vinci Code</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
	<link href="../../css/styles.css" rel="stylesheet" type="text/css" />
	<link href="../../css/reader.css" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript" src="../../js/jquery-3.3.1.slim.min.js"></script>
	<script type="text/javascript" src="../../js/popper.min.js"></script>
	<script type="text/javascript" src="../../js/bootstrap.min.js"></script>
	
</head>

<body data-gr-c-s-loaded="true">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
		<a class="navbar-brand" href="../../index.php">Digital Library</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">  
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../../index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../books.php">Books</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../../registration.php">Register</a>
				</li>
				<?php if(!isset($_SESSION["username"])){?>
				<li class="nav-item">
					<a class="nav-link" href="../../login.php">Login</a>
				</li>
				<?php }else{ ?>
				<li class="nav-item">
					<a class="nav-link" href="../../logout.php">Logout</a>
				</li>
				<?php }?>
			</ul>
		</div>
		<?php if(isset($_SESSION["username"])) {?>
		<a class="navbar-brand" style="font-size: 14px;" href="#"><?php if (isset($_SESSION["username"])){echo "Hi, ".$_SESSION["username"];}?></a>
		<?php }?>
	</nav>
	
	<div class="container">
		<iframe class="responsive-iframe" style="width:100%;height:100%" src="https://online.anyflip.com/zlhiy/bczq/index.html"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" ></iframe>
	</div>
	
</body>

</html>