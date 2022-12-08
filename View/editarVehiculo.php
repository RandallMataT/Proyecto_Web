<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\ProvinciasController.php';
include_once __DIR__ . '\..\Controller\MarcasController.php';
include_once __DIR__ . '\..\Controller\VehiculosController.php';
include_once __DIR__ . '\..\Controller\ModeloController.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';
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

	<!--================================
=            Page Title            =
=================================-->
	<section class="page-title">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 text-center">
					<!-- Title text -->
					<h3>Editar Vehiculo</h3>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>
	<!--==================================
=            Blog Section            =
===================================-->

	<section class="blog section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="card text-center">
						<div class="card-header">
							Vehiculo
						</div>
						<div class="card-body">

							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputState">id usuario</label>
										<select id="inputState" class="form-control">
										  <?php ListarUsuarioNombre($datos["nombre"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="inputState">marca</label>
										<select id="inputState" class="form-control">
										<?php ListarMarcasAgregar($datos["marca_vehiculo"]); ?>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputState">provincia</label>
										<select id="inputState" class="form-control">
										 <?php ListarProvincias($datos["Nombre_provincia"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="inputState">estado del vehiculo</label>
										<select id="inputState" class="form-control">
										<?php ListarEstadoVehiculo($datos["estado_vehiculo"]); ?>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputState">transmision</label>
										<select id="inputState" class="form-control">
										<?php ListarTransmisionVehiculo($datos["tipo_transmision"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="modelo">modelo</label>
										<select id="modelo" class="form-control">
										<?php ListarModeloVehiculo($datos["modelo_vehiculo"]); ?>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="tipo">tipo</label>
										<select id="tipo" class="form-control">
										  <?php ListarTipoVehiculo($datos["tipo_vehiculo"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="color">color</label>
										<input type="text" class="form-control" placeholder="color">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="motor">motor</label>
										<input type="text" class="form-control" placeholder="motor">
									</div>
									<div class="form-group col-md-6">
										<label for="precio">precio</label>
										<input type="text" class="form-control" placeholder="precio">
									</div>
								</div>
								<div class="form-group">
									<label for="direccion">direccion</label>
									<textarea class="form-control" id="idDireccion" rows="1"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleFormControlFile1">Agregar imagen del vehiculo</label>
									<input type="file" class="form-control-file" id="idImagen">
								</div>

								<button type="submit" class="btn btn-primary">Guardar</button>
							</form>

						</div>
						
					</div>
				</div>
			</div>
		</div>
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