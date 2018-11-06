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

		<title>Home | Jughead Music</title>
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
							<li class="menu-item current-menu-item"><a href="musicahome.php">Home</a></li>
							<li class="menu-item"><a href="editar.php">Editar Perfil</a></li>
							<li class="menu-item"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->

			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Catálogo de album</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<option value=".concert">Concert</option>
									<option value=".band">Band</option>
									<option value=".stuff">Stuff</option>
								</select>
								<a href="#" class="current" data-filter="*">Mostrar Todos</a>
								<a href="#" data-filter=".cumbia">Cumbia</a>
								<a href="#" data-filter=".house">House</a>
								<a href="#" data-filter=".pop">Pop</a>
							  <a href="#" data-filter=".rap">Rap</a>
								<a href="#" data-filter=".reggaeton">Reggaeton</a>
								<a href="#" data-filter=".rock">Rock</a>
							</div>
							<div class="filterable-items">
								<div class="filterable-item house">
									<a href="amanecersly.php" target="_blank"><figure><img src="carat/amanecer.jpg" alt="Amanecer"></figure></a>
								</div>
								<div class="filterable-item rock">
									<a href="blurryface.php" target="_blank"><figure><img src="carat/blurryface.jpg" alt="Blurryface"></figure></a>
								</div>
								<div class="filterable-item rock">
									<a href="americanidiot.php" target="_blank"><figure><img src="carat/americanidiot.jpg" alt="American Idiot"></figure></a>
								</div>
								<div class="filterable-item house">
									<a href="housemusic.php" target="_blank"><figure><img src="carat/housemusic.jpg" alt="House Music"></figure></a>
								</div>
								<div class="filterable-item pop">
									<a href="miakhalifa.php" target="_blank"><figure><img src="carat/miakhalifa.jpg" alt="Mia Khalifa"></figure></a>
								</div>
								<div class="filterable-item pop">
									<a href="purpose.php" target="_blank"><figure><img src="carat/purpose.jpg" alt="Purpose"></figure></a>
								</div>
								<div class="filterable-item reggaeton">
									<a href="ufuf.php" target="_blank"><figure><img src="carat/ufuf.jpg" alt="Uf Uf EP"></figure></a>
								</div>
								<div class="filterable-item cumbia">
									<a href="ndbgranexit.php" target="_blank"><figure><img src="carat/granexit.jpg" alt="Noche de Brujas: Grandes Exitos"></figure></a>
								</div>
								<div class="filterable-item rap">
									<a href="bitchlasagna.php" target="_blank"><figure><img src="carat/bitchlasagna.jpg" alt="Bitch Lasagna"></figure></a>
								</div>
								<div class="filterable-item reggaeton">
									<a href="mundial.php" target="_blank"><figure><img src="carat/mundial.jpg" alt="Mundial"></figure></a>
								</div>
								<div class="filterable-item rap">
									<a href="funeralravee.php" target="_blank"><figure><img src="carat/funeralrave.jpg" alt="Funeral Rave"></figure></a>
								</div>
								<div class="filterable-item cumbia">
									<a href="cumbiachilombiana.php" target="_blank"><figure><img src="carat/cumbiachilombiana.jpg" alt="Cumbia Chilombiana"></figure></a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->


			</main> <!-- .main-content -->

			<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
				<div class="container">
					<header class="section-header">
						<h2 class="section-title">Próximos eventos</h2>

						<div class="event-nav">
							<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
								<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
						</div> <!-- .event-nav -->

					</header> <!-- .section-header -->
					<div class="event-carousel">

						<div class="event">
							<div class="entry-date">
								<div class="date">5</div>
								<span class="month">Nov</span>
							</div>
							<h2 class="entry-title"><a href="#">Robbie Williams</a></h2>
							<p>Movistar Arena, Santiago, Chile.</p>
						</div> <!-- .event -->

						<div class="event">
							<div class="entry-date">
								<div class="date">1</div>
								<span class="month">Dec</span>
							</div>
							<h2 class="entry-title"><a href="#">Sasha Grey</a></h2>
							<p>Movistar Arena, Santiago, Chile.</p>
						</div> <!-- .event -->


						<div class="event">
							<div class="entry-date">
								<div class="date">8</div>
								<span class="month">Dec</span>
							</div>
							<h2 class="entry-title"><a href="#">Skrillex</a></h2>
							<p>Electric Jungle Music Festival, Foshan, China.</p>
						</div> <!-- .event -->

						<div class="event">
							<div class="entry-date">
								<div class="date">11</div>
								<span class="month">Dec</span>
							</div>
							<h2 class="entry-title"><a href="#">Dios salve a la Reina</a></h2>
							<p>Enjoy Coquimbo, Coquimbo, Chile.</p>
						</div> <!-- .event -->

						<div class="event">
							<div class="entry-date">
								<div class="date">29</div>
								<span class="month">Mar</span>
							</div>
							<h2 class="entry-title"><a href="#">Lollapalooza</a></h2>
							<p>Parque O'Higgins, Santiago, Chile.</p>
						</div> <!-- .event -->

					</div> <!-- .event-carousel -->
				</div> <!-- .container -->
			</div> <!-- .upcoming-event-section -->

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
