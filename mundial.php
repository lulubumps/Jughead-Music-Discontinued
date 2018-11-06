<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
header('location: errorsesion.php');
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

		<title>Mundial | Jughead Music</title>
		<link href="favicon.ico" rel="shortcut icon"/>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="musicahome.php" id="branding">
						<img src="dummy/logo.png" alt="Site Title">
						<small class="site-description">La música no se detiene</small>
					</a> <!-- #branding -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a>
								<?php
                if(isset($_SESSION['idUsuario'])){
                echo $_SESSION['nombre'];
                }
                ?>
							</a></li>
							<li class="menu-item"><a href="musicahome.php">Home</a></li>
							<li class="menu-item"><a href="editar.php">Editar Perfil</a></li>
							<li class="menu-item"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				<br color="#191919">

				<div id="player">
		<audio src=""></audio>
		<div class="info">
			<div>
				<h2></h2>
				<h3></h3>
				<div class="progress"><div></div></div>
			</div>
		</div>
		<div class="player">
			<div class="disk">
				<div>
					<img alt="" crossOrigin = "Anonymous">
				</div>
				<span></span>
			</div>

			<button id="prev_track">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 197.1 140.1" style="enable-background:new 0 0 197.1 140.1;" xml:space="preserve">
				<path class="st0" d="M130.2,75.9l41.7,46.4c5.4,6,15.3,2.2,15.3-5.9V23.6c0-8.1-10-11.9-15.3-5.9l-41.7,46.4
					C127.2,67.4,127.2,72.5,130.2,75.9z"/>
				<path class="st0" d="M12,77.6l93.7,54.1c5.9,3.4,13.2-0.8,13.2-7.6V15.9c0-6.8-7.3-11-13.2-7.6L12,62.4C6.1,65.7,6.1,74.2,12,77.6z"
					/>
				</svg>
			</button>

			<button id="next_track">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 197.1 140.1" style="enable-background:new 0 0 197.1 140.1;" xml:space="preserve">
				<path class="st0" d="M64.6,64.1L22.9,17.7c-5.4-6-15.3-2.2-15.3,5.9v92.8c0,8.1,10,11.9,15.3,5.9l41.7-46.4
					C67.6,72.5,67.6,67.4,64.6,64.1z"/>
				<path class="st0" d="M182.9,62.4L89.2,8.3C83.3,4.9,76,9.1,76,15.9v108.2c0,6.8,7.3,11,13.2,7.6l93.7-54.1
					C188.7,74.2,188.7,65.7,182.9,62.4z"/>
				</svg>
			</button>
			<button id="toggle_state" class="play">
				<svg id="play_icon" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 			viewBox="0 0 98.1 110.8" style="enable-background:new 0 0 98.1 110.8;" xml:space="preserve">
					<path class="st0" d="M83.5,52.1L23.4,17.4c-4-2.3-9,0.6-9,5.2V92c0,4.6,5,7.5,9,5.2l60.1-34.7C87.5,60.2,87.5,54.4,83.5,52.1z"/>
				</svg>
				<div class="pause_left"></div>
				<div class="pause_right"></div>

			</button>
		</div>
	</div>
<br color="#191919">
			</main> <!-- .main-content -->

			<center>
				<br color="#191919">
				<br color="#191919">
			<table class="table table-dark">
			  <thead>
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nombre</th>
			      <th scope="col">Artista</th>
			      <th scope="col">Albúm</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">1</th>
			      <td>El Mejor de Todos los Tiempos</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">2</th>
			      <td>Descontrol</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">3</th>
			      <td>Vida en la Noche</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">4</th>
			      <td>La Señal</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">5</th>
			      <td>La Despedida</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">6</th>
			      <td>¿Que es la que hay?</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">7</th>
			      <td>Me Enteré</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">8</th>
			      <td>El mas Duro</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">9</th>
			      <td>Daría</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">10</th>
			      <td>Rumba y Candela</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">11</th>
			      <td>Mintiendo con la Verdad</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
			    </tr>
					<tr>
			      <th scope="row">12</th>
			      <td>Campeo a Mi Manera</td>
			      <td>Daddy Yankee</td>
			      <td>Mundial</td>
						<tr>
				      <th scope="row">13</th>
				      <td>Grito Mundial</td>
				      <td>Daddy Yankee</td>
				      <td>Mundial</td>
				    </tr>
			    </tr>
			  </tbody>
			</table>
			<br color="#191919">
			<br color="#191919">
			</center>



			<footer class="site-footer">
				<div class="container">
					<img src="dummy/logo-footer.png" alt="Site Name">

					<address>
						<p>Longitudinal Sur, 441 <br><a href="tel:354543543">(56) 9 9464 8912</a> <br> <a href="mailto:info@jughead.cl">info@jughead.cl</a></p>
					</address>

					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> <!-- .social-links -->

					<p class="copy">Copyright 2018 The Jughead Proyect. Designed by Lulu De Cartón. All right reserved</p>
				</div>
			</footer> <!-- .site-footer -->

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		<script src="js/mundial.js"></script>

	</body>

</html>
