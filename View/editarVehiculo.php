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
<<<<<<< HEAD
if($_GET["f"] == null)
    header("Location: gestionVehiculo.php"); 

$datos =  ConsultarCarrosIdUsuario($_GET["f"]);
=======
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
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
<<<<<<< HEAD
<br/><br/>
<input type="hidden" value="<?php echo $datos["Id"] ?>" id="txtId" name="txtId">
=======

>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
	<section class="blog section">
		<div class="container">
			<div class="row">
				<div class="col-md-10 offset-md-1">
					<div class="card text-center">
						<div class="card-header">
							Vehiculo
						</div>
<<<<<<< HEAD
					
=======
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
						<div class="card-body">

							<form>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputState">id usuario</label>
										<select id="inputState" class="form-control">
<<<<<<< HEAD
										  <?php ListarUsuarioNombre($datos["Id_usuario"]); ?>
=======
										  <?php ListarUsuarioNombre($datos["nombre"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="inputState">marca</label>
<<<<<<< HEAD
										<select id="txtMarca" name="txtMarca"class="form-control">
										<?php ListarMarcasAgregar($datos["Id_marca"]); ?>
=======
										<select id="inputState" class="form-control">
										<?php ListarMarcasAgregar($datos["marca_vehiculo"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputState">provincia</label>
										<select id="inputState" class="form-control">
<<<<<<< HEAD
										 <?php ListarProvincias($datos["Id_provincia"]); ?>
=======
										 <?php ListarProvincias($datos["Nombre_provincia"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="inputState">estado del vehiculo</label>
										<select id="inputState" class="form-control">
<<<<<<< HEAD
										<?php ListarEstadoVehiculo($datos["Id_estado"]); ?>
=======
										<?php ListarEstadoVehiculo($datos["estado_vehiculo"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputState">transmision</label>
										<select id="inputState" class="form-control">
<<<<<<< HEAD
										<?php ListarTransmisionVehiculo($datos["id_transmision"]); ?>
=======
										<?php ListarTransmisionVehiculo($datos["tipo_transmision"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="modelo">modelo</label>
										<select id="modelo" class="form-control">
<<<<<<< HEAD
										<?php ListarModeloVehiculo($datos["id_modelo"]); ?>
=======
										<?php ListarModeloVehiculo($datos["modelo_vehiculo"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="tipo">tipo</label>
										<select id="tipo" class="form-control">
<<<<<<< HEAD
										  <?php ListarTipoVehiculo($datos["id_tipo"]); ?>
=======
										  <?php ListarTipoVehiculo($datos["tipo_vehiculo"]); ?>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="color">color</label>
<<<<<<< HEAD
										<input type="text" class="form-control" placeholder="color"
										value="<?php echo $datos["Color"] ?>">
=======
										<input type="text" class="form-control" placeholder="color">
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="motor">motor</label>
<<<<<<< HEAD
										<input type="text" class="form-control" placeholder="motor"
										value="<?php echo $datos["Motor"] ?>">
									</div>
									<div class="form-group col-md-6">
										<label for="precio">precio</label>
										<input type="text" class="form-control" placeholder="precio"
										value="<?php echo $datos["Precio"] ?>">
=======
										<input type="text" class="form-control" placeholder="motor">
									</div>
									<div class="form-group col-md-6">
										<label for="precio">precio</label>
										<input type="text" class="form-control" placeholder="precio">
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
									</div>
								</div>
								<div class="form-group">
									<label for="direccion">direccion</label>
<<<<<<< HEAD
									<textarea class="form-control" id="idDireccion" rows="1" ><?php echo $datos["Direccion"] ?></textarea>
									
								</div>
								<div class="form-group">
									<label for="exampleFormControlFile1">Actualizar imagen del vehiculo</label>
=======
									<textarea class="form-control" id="idDireccion" rows="1"></textarea>
								</div>
								<div class="form-group">
									<label for="exampleFormControlFile1">Agregar imagen del vehiculo</label>
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
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