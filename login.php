
<?php
	require_once('funciones.php');

	if (estaLogueado()) {
		header('location: perfil.php');
		exit;
	}

	// Variables para persistencia
	$email = '';

	// Array de errores vacío
	$errores = [];

	// Si envían algo por $_POST
	if ($_POST) {
		$email = trim($_POST['email']);
		$errores = validarLogin($_POST);
		if (empty($errores)) {
			$usuario = existeEmail($email);
			loguear($usuario);
		}
			// Seteo la cookie
			if (isset($_POST["recordar"])) {
	        setcookie('id', $usuario['id'], time() + 3600 * 24 * 30);
	      }
			if ($email="admin@hotmail.com"){
				if (EXISTS('muudb')){
			header('location: admin.php');}
			else{
			header('location: perfil.php');
			exit;
		}
	}
	}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <title>LOG IN</title>
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

    <div class="login-form, col-md-6 , form-login">
      <div class="photo-logo">
      <a href="index.php"><img src="images/Logo.png" alt="logotipo" class="logo"></a>
      </div>
      <h2>Login</h2>
      <form class="login" method="post" enctype="multipart/form-data">
      <div class="form-group">
     			  <label for="name">Email:</label>
     				<input class="form-control" type="Email" name="email" value="<?=$email?>" placeholder="Email address" required autofocus>
     					<?php if (isset($errores['email'])): ?>
     							<span style="color: red;">
     		  					<b class="glyphicon glyphicon-exclamation-sign"></b>
     			  				<?=$errores['email'];?>
     							</span>
     					<?php endif; ?>
     	 </div>

       <div class="form-group">
 						<label for="name">Contraseña:</label>
 						<input class="form-control" type="password" name="pass" value="">
 							<?php if (isset($errores['pass'])): ?>
 						 		<span style="color: red;">
 									<b class="glyphicon glyphicon-exclamation-sign"></b>
 									<?=$errores['pass'];?>
 								</span>
 							<?php endif; ?>
 		            </div>
       <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me" name="recordar"> Remember me
          </label>
       </div>
			 <button type="submit" name="button" class="boton">Log in</button>
     </form>
     <a href="#">Forgot the password?</a>
     <a href="register.php">Create an account</a>
    </a>
    </div>

  </body>
</html>
