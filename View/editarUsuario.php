<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\UsuarioController.php';


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

<section class="user-profile section">
	<div class="container">
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
						<h5 class="text-center"> <?php echo $datos["nombre"]?> </h5>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li>
								<a href="delete-account.html"><i class="fa fa-power-off"></i>Eliminar Perfil</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Edit Personal Info -->
				<div class="widget personal-info">
					<h3 class="widget-header user">Editar Informacion</h3>
					<form action="" method="POST">
						<!-- id -->
						<div class="form-group">
						    <input type="hidden" class="form-control" id="txtId" name="txtId" required value="<?php echo $datos["Id"] ?>">
						</div>
						<!-- First Name -->
						<div class="form-group">
						    <label for="first-name0"> Nombre</label>
						    <input type="text" class="form-control" id="txtNombre" name="txtNombre" required value="<?php echo $datos["nombre"] ?>">
						</div>
						<!-- Last Name -->
						<div class="form-group">
						    <label for="last-name">Apellido</label>
						    <input type="text" class="form-control" id="txtApellido" name="txtApellido" required value="<?php echo $datos["apellido"] ?>">
						</div>
						<!-- New email -->
						<div class="form-group">
						    <label for="new-email">Nuevo Correo</label>
						    <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" required value="<?php echo $datos["correo"] ?>">
						</div>
						<!-- New phone -->
						<div class="form-group">
						    <label for="new-email">Nuevo Telefono</label>
						    <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" required value="<?php echo $datos["telefono"] ?>">
						</div>
						<!-- New Password -->
						<div class="form-group">
						    <label for="new-password">Nueva Contraseña</label>
						    <input type="text" class="form-control" id="txtContrasenna" name="txtContrasenna" required value="<?php echo $datos["contrasenna"] ?>">
						</div>
						<!-- Role -->
						<div class="form-group">
						    <label for="new-password">Rol</label>
						    <input type="text" class="form-control" id="txtRol" name="txtRol" required readonly value="<?php echo $datos["Roles"] ?>">
						</div>
						<!-- estado -->
						<div class="form-group">
						    <input type="hidden" class="form-control" id="txtEstado" name="txtEstado" required value="<?php echo $datos["estado"] ?>">
						</div>
						<!-- Submit button -->
						<button class="btn btn-transparent" id="actualizarUsuario" name="actualizarUsuario">Guardar</button>
					</form>
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