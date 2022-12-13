<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';
include_once __DIR__ . '\..\Controller\VehiculosController.php';

$datos = ConsultarDatosUsuario($_GET["q"]);

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
<!--==================================
=            User Profile            =
===================================-->
<section class="dashboard section">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="../images/user/default-user.png" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<label for="">Nombre</label>
						<h5 class="text-center"> <?php echo $datos["nombre"] .' '.  $datos["apellido"] ; ?> </h5>
						<label for="">Correo</label>
						<h5 class="text-center"> <?php echo $datos["correo"]; ?> </h5>
						<label for="">Telefono</label>
						<h5 class="text-center"> <?php echo $datos["telefono"]; ?> </h5>
						
						<?php
						
						if($datos["Id"] == $_SESSION["SesionId"]){

							echo '<a href="editarUsuario.php?q='. $datos["Id"] .'" class="btn btn-main-sm">Editar Perfil</a>';
						}else{

							echo '<a style="pointer-events: none" href="editarUsuario.php?q=' . $datos["Id"] . '" class="btn btn-main-sm">Editar Perfil</a>';

						}
						
						?>

					</div>
					<!-- Dashboard Links -->
					
				</div>
			</div>
		
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget user-dashboard-menu">
						<ul>
							<li class="active" ><a href=""><i class="fa fa-user"></i> Mis Vehiculos</a></li>
						</ul>
					</div>
				<?php
                    ConsultarCarroUsuario($datos["Id"]);
				?>
				
			</div>
		</div>
		<!-- Row End -->
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