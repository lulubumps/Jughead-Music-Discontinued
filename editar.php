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

		<title>Editar Perfil | Jughead Music</title>
		<link href="favicon.ico" rel="shortcut icon"/>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">

		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>

		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
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
							<li class="menu-item "><a href="musicahome.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="editar.php">Editar Perfil</a></li>
							<li class="menu-item"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="fullwidth-block download">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<div class="content">
									<h2 class="entry-title">Cambia tus datos</h2>

										<form method="post" action="modificar.php" class="contact-form">

											    <input type="text" name="nombre_usuario" class="form-control" aria-label="Text input with checkbox" placeholder="Cambiar Nombre " value="<?php echo $_SESSION['nombre']; ?>">
												<input type="text" name="apellido_usuario" class="form-control" aria-label="Text input with checkbox" placeholder="Cambiar Apellido"value="<?php echo $_SESSION['apellido']; ?>">
											  <input type="text" name="correo_usuario" class="form-control" aria-label="Text input with checkbox" placeholder="Cambiar Correo Electronico"value="<?php echo $_SESSION['email']; ?>">

													<input type="submit" value="Terminar">
										</form>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->


			</main> <!-- .main-content -->

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

	</body>

</html>
