<?php session_start();?>
<!DOCTYPE html>
<html>

<head>
	<title>Digital Library - Books</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--===============================================================================================-->		
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
<!--===============================================================================================-->	
	<!-- animation.css for card animation -->
	<link rel="stylesheet" type="text/css" href="css/animation.css" />
<!--===============================================================================================-->		
	<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<!--===============================================================================================-->	
	<script type="text/javascript" src="js/popper.min.js"></script>
<!--===============================================================================================-->	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--===============================================================================================-->	
	
	<style>
		.cards {
			display: flex;
			flex-wrap: nowrap;
			overflow-x: auto;
			-webkit-overflow-scrolling: touch;
			.card {
				flex: 0 0 auto;
			}
		}
		
	</style>
	
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

				<!-- card start -->
				<!-- book name tag: <div id="demobox"> enter book name here </div> -->
				
	<div class="wrapper">
		<h2><strong>Light Novels<span>( 5 )</span></strong></h2>
		<div class="cards">
			<a href="books/pdfreader/b1R.php" target="_blank">
				<figure class="card">
					<img src="images/b1.jpg" />
					<figcaption><div id="demobox">All You Need Is Kill</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b2R.php" target="_blank">
				<figure class="card">
					<img src="images/b2.jpg" />
					<figcaption><div id="demobox">Weathering With You</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b3R.php" target="_blank">
				<figure class="card">
					<img src="images/b3.jpg" />
					<figcaption><div id="demobox">The Forsaken Hero</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b4R.php" target="_blank"">
				<figure class="card">
					<img src="images/b4.jpg" />
					<figcaption><div id="demobox">Steins;Gate: The Distant Valhalla</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b5R.php" target="_blank"">
				<figure class="card">
					<img src="images/b5.jpg" />
					<figcaption><div id="demobox">Bungo Stray Dogs</div></figcaption>
				</figure>
			</a>
		</div>
		<h2><strong>Technology<span>( 5 )</span></strong></h2>
		<div class="cards">
			<a href="books/pdfreader/b6R.php" target="_blank">
				<figure class="card">
					<img src="images/b6.jpg" />
					<figcaption><div id="demobox">The Python Book</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b7R.php" target="_blank">
				<figure class="card">
					<img src="images/b7.jpg" />
					<figcaption><div id="demobox">Web Animation using JS</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b8R.php" target="_blank">
				<figure class="card">
					<img src="images/b8.jpg" />
					<figcaption><div id="demobox">Data Science</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b9R.php" target="_blank">
			<figure class="card">
				<img src="images/b9.jpg" />
				<figcaption><div id="demobox">Machine Learning</div></figcaption>
			</figure>
			</a>
			<a href="books/pdfreader/b10R.php" target="_blank">
				<figure class="card">
					<img src="images/b10.jpg" />
					<figcaption><div id="demobox">Tor and The Dark Net</div></figcaption>
				</figure>
			</a>
		</div>
		<h2><strong>Mystery<span>( 5 )</span></strong></h2>
		<div class="cards">
			<a href="books/pdfreader/b11R.php" target="_blank">
				<figure class="card">
					<img src="images/b11.jpg" />
					<figcaption><div id="demobox">Eye Of The Needle</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b12R.php" target="_blank">
				<figure class="card">
					<img src="images/b12.jpg" />
					<figcaption><div id="demobox">The Da Vinci Code</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b13R.php" target="_blank">
				<figure class="card">
					<img src="images/b13.jpg" />
					<figcaption><div id="demobox">The Hunger Games</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b14R.php" target="_blank">
				<figure class="card">
					<img src="images/b14.jpg" />
					<figcaption><div id="demobox">And Then There Were None</div></figcaption>
				</figure>
			</a>
			<a href="books/pdfreader/b15R.php" target="_blank">
				<figure class="card">
					<img src="images/b15.jpg" />
					<figcaption><div id="demobox">Murder On The Orient Express</div></figcaption>
				</figure>
			</a>
		</div>
	</div>

				<!-- card end -->

</body>

</html>