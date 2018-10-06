<?php
	require_once('funciones.php');

	if (estaLogueado()) {
		header('location: faq-perfil.php');
		exit;
	}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <title>MUU FAQs</title>
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
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>

        </div>
        <div class="btn-panel pull-right">
        <button type="button" class="btn btn-default dropdown-toggle " data-toggle="dropdown">
           <ion-icon name="menu" size="large">
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="faq.php">FAQ</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </div>
      </div>
    </header>

		<body>
			<div class="col-md-12">
				<img class="img-responsive" src="images/bcg-faq.png" alt="frequently asked questions background">
				<h2>The Best Ice Cream Ever in Brasil</h2>
				<h4>Without doubt, MUU is the best ice crem in Brasil.
        The teste, flavor and quality make our offert unique for our audience.
        This is supported by an external marketing research, which position us in the 1st option between ice cream lovers.</h4>
				<br>
				<h2> Our premium ingredients and premium results</h2>
				<h4>The selection of our products follow a strict quality process. Constant checks and tests are performed to bring you the best ice cream.</h4>
				<br>
				<h2>Muu, the best option for your Diet</h2>
				<h4>Yes, in spite this sounds contradictory, Muu offers the low calories ice creams.
        So you´re not only satisfying cravings for something sweet but you can also mantain your heath and good shape by eating MUU.
        Do we need to convince you more? :)</h4>
			</div>
		</body>



<!--
        <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Los ingredientes (no más) secretos que nos permiten alcanzar ese equilibrio casi increíble de sabor y calorías son nuestros edulcorantes naturales eritritol y xilitol. Estos compuestos son alcoholes de azúcar que, a diferencia de los edulcorantes artificiales, están presentes naturalmente en diversas frutas y vegetales como la pera, la frambuesa, el maíz y la ciruela. A pesar de que funcionan como edulcorantes, casi no elevan el azúcar de la sangre y tienen un nivel calórico muy bajo.
        </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        La leche es la base para todo lo que hacemos en la MUU. Añadimos a él otros ingredientes de altísima calidad que varían de acuerdo con el sabor del helado, como cacao, aceite de palma y avellanas.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>



  </div>
</div>
      </div>
        </div>
-->







  </body>
</html>
