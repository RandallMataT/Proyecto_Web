<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\VehiculosController.php';
include_once __DIR__ . '\..\Model\VehiculosModel.php';

$datos = ConsultarDatosVehiculo($_GET["v"]);
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

<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
			<input type="hidden" value="<?php echo $datos["Id"] ?>" id="txtId" name="txtId">
				<div class="product-details">
				<h1 class="product-title"><?php echo $datos["marca_vehiculo"] .' '.  $datos["nombre_vehiculo"] ; ?></h1>
					<div class="product-meta">
						<ul class="list-inline">
						<li class="list-inline-item"><i class="fa fa-user-o"></i> Por <a href="perfilUsuario.php?q=<?php echo $datos["Id_usuario"]; ?>"><?php echo $datos["nombre"]; ?></a></li>
							<li class="list-inline-item"><i class="fa fa-car"></i> Tipo de vehiculo<a href=""><?php echo $datos["tipo_vehiculo"]; ?></a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Ubicacion<a href=""><?php echo $datos["Direccion"]; ?></a></li>
						</ul>
					</div>
					<div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
					<img src="data:image/jpg;base64,<?php echo base64_encode($datos["imagen"])?>" width="700" height="500" alt="Card image cap">
					</div>
					<div class="content">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							
						 <?php
						if ($datos["Roles"] == 2) {
							if($datos["Id_usuario"] != $datos["Id"]){
							echo '<li class="nav-item">
							     <div class="alert alert-success alert-dismissable"><a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" 
								 role="tab" aria-controls="pills-home" aria-selected="true">Comprar</a></div>
								</li>';
							}
						}

						?>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Precio</h4>
						<p>₡ <?php echo $datos["Precio"]; ?></p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user">
					<label for="">Nombre</label>
						<h4><a href="perfilUsuario.php?q=<?php echo $datos["Id_usuario"]; ?>">publicado por <?php echo $datos["nombre"] .' '.  $datos["apellido"]; ?></a></h4>
						<br>
						<label for="">Correo</label>
						<h5 class="text-center"> <?php echo $datos["correo"]; ?> </h5>
						<label for="">Telefono</label>
						<h5 class="text-center"> <?php echo $datos["telefono"]; ?> </h5>
					</div>
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