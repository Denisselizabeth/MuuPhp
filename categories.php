<?php
require_once('funciones.php');
require 'clases/DB.php';
require 'clases/db_connection.php';
require 'clases/MySQLDB.php';
require 'clases/ice_cream.php';
require 'clases/ice_creams.php';
require 'clases/modelo.php';
require 'classes/size.php';
require 'classes/sizes.php';
require 'classes/user.php';
require 'classes/users.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Categories</title>
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
					<div class="register-3">
					<h3> <a href="register.php"> Register </a> </h3>
					</div>
					<div class="login-4">
					<h3> <a href="login.php"> Login </a> </h3>
					</div>
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
						 <ion-icon name="menu" size="large">
					</button>
					<ul class="dropdown-menu" role="menu">
						<li><a href="faq.php">About Us</a></li>
						<li><a href="register.php">Register</a></li>
						<li><a href="login.php">Login</a></li>
					</ul>

				</div class= "form-login">
				<div class="btn-group pull-right">
				<button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
					 <ion-icon name="menu" size="large">
				</button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="faq.php">About us</a></li>
					<li><a href="register.php">Register</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
			</div>
		</header>
    <div class="fotos-categorie">
     <img src="images/todos-los-sabores.png" alt="" class="col-md-6">
     <?php
      $allIceCreams=new ice_creams;
      $allIceCreams=getAllicecreams();
      ?>
     <img src="images/potes-chicos.jpg" alt="" class="col-md-6" >
     <?php
     $AllSizes=new sizes;
     $AllSizes=getAllsizes();
      ?>
    </div>
    <div class="fixed-bottom">
  <footer class="container-footer">
    <div class="footer-logo"></div>
      <img  class= "footer-img" src="images/Logo.png">
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
    </div>
  </footer>
  </div>
  </body>
</html>
