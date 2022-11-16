<?php

include_once __DIR__ . '\View\generales.php';
include_once __DIR__ . '\Controller\MarcasController.php';
include_once __DIR__ . '\Controller\VehiculosController.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php

	headerGeneral();

	?>

</head>

<body class="body-wrapper">


	<section>

		<?php

		navbar();

		?>

	</section>

	<!--===============================
=            Hero Area            =
================================-->

	<section class="hero-area bg-1 text-center overly">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Header Contetnt -->
					<div class="content-block">
						<h1>Compra y Venta cerca de ti</h1>
						<p>Mas que un auto <br> un compañeo de viaje</p>
						<div class="short-popular-category-list text-center">
							<h2>Categorias Populares</h2>
							<ul class="list-inline">

								<?php
								ListarMarcas();
								?>

							</ul>
						</div>

					</div>


				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

	<!--===========================================
=            Popular deals section            =
============================================-->

	<section class="popular-deals section bg-gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h2>Autos mas populares</h2>
						<p>Estos son los autos mas populares</p>
					</div>
				</div>
			</div>
			<div class="row">


				<?php

				ListarVehiculo();

				?>


<!-- 
				<div class="col-sm-12 col-lg-4">
					<!-- product card 
					<div class="product-item bg-light">
						<div class="card">
							<div class="thumb-content">
								<!-- <div class="price">$200</div> 
								<a href="">
									<img class="card-img-top img-fluid" src="images/products/imgToyota.jpg" alt="Card image cap">
								</a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">Toyota Hilux</a></h4>
								<ul class="list-inline product-meta">
									<li class="list-inline-item">
										<a href=""><i class="fa fa-folder-open-o"></i>Toyota</a>
									</li>
									<li class="list-inline-item">
										<a href=""><i class="fa fa-calendar"></i>10 de Septiembre</a>
									</li>
								</ul>
								<p class="card-text">El Auto perfecto para las personas que quieran una aventura sin dejar la clase.</p>
								<div class="product-ratings">
									<ul class="list-inline">
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>



				</div>
				<div class="col-sm-12 col-lg-4">
					<!-- product card 
					<div class="product-item bg-light">
						<div class="card">
							<div class="thumb-content">
								<!-- <div class="price">$200</div> 
								<a href="">
									<img class="card-img-top img-fluid" src="images/products/imgNissan.jpg" alt="Card image cap">
								</a>
							</div>
							<div class="card-body">
								<h4 class="card-title"><a href="">Nissan knics</a></h4>
								<ul class="list-inline product-meta">
									<li class="list-inline-item">
										<a href=""><i class="fa fa-folder-open-o"></i>Nissan</a>
									</li>
									<li class="list-inline-item">
										<a href=""><i class="fa fa-calendar"></i>2</a>
									</li>
								</ul>
								<p class="card-text">El auto para moverse por la cuidad, perfecto para familias.</p>
								<div class="product-ratings">
									<ul class="list-inline">
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item selected"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>



				</div>

-->
			</div>
		</div>
	</section>



	<!--==========================================
=            All Category Section            =
===========================================-->

	<section class=" section">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Section title -->
					<div class="section-title">
						<h2>Todas las Marcas</h2>
						<p>Las marcas mas populares.</p>
					</div>
					<div class="row">
						<!-- Category list -->
						<?php

						ListarMarcasEndPage();

						?>

					</div>
				</div>
			</div>
		</div>

		<!-- Container End -->
	</section>




	<!--============================
=            Footer            =
=============================-->

	<footer class="footer section section-sm">

		<?php

		footerInfo();

		?>


	</footer>
	<!-- Footer Bottom -->
	<footer class="footer-bottom">

		<?php

		footerCopyright();

		?>

	</footer>

	<?php

	javascripts();

	?>

</body>

</html>