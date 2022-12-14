<?php
if (session_status() == PHP_SESSION_NONE) {
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
					<h3>Agregar Vehiculo</h3>
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
							Nuevo Vehiculo
						</div>
						<div class="card-body">

						<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="idUsuario">Usuario</label>
										<select class="form-control" id="idUsuario" name="idUsuario" required>
										  <?php ListarUsuarioNombre($datos["Id_usuario"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="idMarca">Marca</label>
										<select class="form-control" id="idMarca" name="idMarca" required>
										<?php ListarMarcasAgregar($datos["Id_marca"]); ?>
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="idProvincia">Provincia</label>
										<select class="form-control" id="idProvincia" name="idProvincia" required>
										 <?php ListarProvincias($datos["Id_provincia"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="idEstado">Estado del vehiculo</label>
										<select class="form-control" id="idEstado" name="idEstado" required>
										<?php ListarEstadoVehiculo($datos["Id_estado"]); ?>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="idTransmision">Transmision</label>
										<select  class="form-control" id="idTransmision" name="idTransmision" required>
										<?php ListarTransmisionVehiculo($datos["id_transmision"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="idModelo">Modelo</label>
										<select  class="form-control" id="idModelo" name="idModelo" required>
										<?php ListarModeloVehiculo($datos["id_modelo"]); ?>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="idTipo">Tipo</label>
										<select  class="form-control" id="idTipo" name="idTipo" required>
										  <?php ListarTipoVehiculo($datos["id_tipo"]); ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="idNombre">Nombre vehiculo</label>
										<input type="text" class="form-control "id="idNombre" name ="idNombre" placeholder="Nombre vehiculo" required>
									</div>
								</div>
								<div class="form-row">
								    <div class="form-group col-md-6">
										<label for="idColor">Color</label>
										<input type="text" class="form-control" id="idColor" name="idColor" placeholder="Color" required>
									</div>
									<div class="form-group col-md-6">
										<label for="idMotor">Motor</label>
										<input type="text" class="form-control" id="idMotor" name="idMotor" placeholder="Motor" required>
									</div>
								</div>
								<div class="form-row">
								    <div class="form-group col-md-6">
										<label for="idPrecio">Precio</label>
										<input type="text"  class="form-control" id="idPrecio" name="idPrecio" placeholder="Precio" required>
								    </div>
								    <div class="form-group col-md-6">
									<label for="idDireccion">Direccion</label>
									<textarea class="form-control" id="idDireccion" name="idDireccion" rows="1"  required></textarea>
									
								     </div>
								</div>
								<div class="form-group">
									<label for="exampleFormControlFile1">Agregar imagen del vehiculo</label>
									<input type="file" class="form-control-file" id="idImagen" name="idImagen">
								</div>

								<input type="submit" class="btn btn-primary" id="GuardarVehiculo" name="GuardarVehiculo" value="Guardar"></input>
								<a href="gestionVehiculo.php" class="btn btn-danger">Cancelar</a>
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

