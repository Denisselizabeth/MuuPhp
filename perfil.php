<?php
	require_once('funciones.php');

	if (!estaLogueado()) {
		header('location: index.php');
		exit;
	}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="UTF-8">
	<title>Muu Site</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>

		<div class="navbar-muu">
				<div class="navbar-img-muu">
				<img src="images/navbar-muu.png">
				</div>
			<div class="navbar-sections">

				<div class="home-1">
				<h3> <a href="index.php"> Home </a> </h3>
				</div>
				<div class="about-2">
				<h3> <a href="faq.php"> About Us </a> </h3>
				</div>
				<div class="user-3">
				<h3> <a href="register.php"> <?=$usuario['name']?> </a> </h3>
				</div>

				<img class="img-user" src="<?=$usuario['foto']?>" width="20" height="20">

				<div class="login-4">
					<a class="btn btn-warning" href="logout.php">Sign out</a>
				</div>
				<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
					 <ion-icon name="menu" size="large">
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="faq.php">FAQ</a></li>
					<li><a href="register.php"> <?=$usuario['name']?> </a></li>
					<li><a class="btn btn-warning" href="logout.php">Sign out</a></li>
				</ul>

			</div>
			<div class="btn-group pull-right">
			<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
				 <ion-icon name="menu" size="large">
			</button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="faq.php">FAQ</a></li>
				<li><a href="register.php"> <?=$usuario['name']?> </a></li>
				<li><a class="btn btn-warning" href="logout.php">Sign out</a></li>
			</ul>
		</div>
		</div>
	</header>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">

		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="images/todos-los-sabores.png" alt="Productos">
			</div>

			<div class="item">
				<img src="images/helado1.jpg" alt="Producto">
			</div>

			<div class="item">
				<img src="images/potes-chicos.jpg" alt="Productos">
			</div>

			<div class="item">
				<img src="images/helado2.jpg" alt="Producto">
			</div>
		</div>

		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	 <img src="images/child-image.jpg" alt="child-image">


 <div id="circularMenu" class="circular-menu" size="large">
		<a class="floating-btn"  onclick="document.getElementById('circularMenu').classList.toggle('active');">
			<i class="fa fa-plus" size="large"></i>
		</a>
		<menu class="items-wrapper">
			<a href="#" class="menu-item fa fa-facebook"></a>
			<a href="#" class="menu-item fa fa-twitter"></a>
			<a href="#" class="menu-item fa fa-google-plus"></a>
			<a href="#" class="menu-item fa fa-instagram"></a>
		</menu>
	</div>

	<footer class="container-footer">
<div class="footer-logo">
	</div>
	<img  class= "footer-img" src="images/Logo.png">
</div>
<div class="newsletter-muu">
	<div class="row">

		<div class="thumbnail center well well-sm text-center">
			<h2>Newsletter</h2>
			<p>Subscribe to our weekly Newsletter</p>
			<form action="" method="post" role="form">
				<div class="input-group">
				<span class="input-group-addon">
				<i class="fa fa-envelope"></i>
				</span>
				<input class="form-control" type="text" id="" name="" placeholder="your@email.com">
				</div>
				<input type="submit" value="Subscribe" class="btn btn-large btn-primary" />
				</form>
				</div>

	</div>
</div>
<div class="contact-muu">
	<h3>contato@sorvetemuu.com.br</h3>
	<br>
	<h3>+55 (21) 99627.5400</h3>
	<br>
	<h3>© 2018 Sorveteria MUU Comércio LTDA</h3>
</footer>
<script src="https://unpkg.com/ionicons@4.1.2/dist/ionicons.js"></script>

</body>

















		<!--<div class="container">
			<h1>Hello <?=$usuario['name']?></h1>
			<img class="img-rounded" src="<?=$usuario['foto']?>" width="200">
			<br><br>
			<a class="btn btn-warning" href="logout.php">Sign out</a>-->



		</div>
	</body>
</html>
