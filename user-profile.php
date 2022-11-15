<?php

include_once __DIR__ . '\View\generales.php';

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
							<img src="images/user/user-thumb.jpg" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">Samanta Doe</h5>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li>
								<a href="dashboard-my-ads.html"><i class="fa fa-user"></i> Mis Vehiculos</a></li>
							<li>
								<a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Vehiculos Favoritos <span>5</span></a>
							</li>
							<li>
								<a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Vehiculos Guardados <span>12</span></a>
							</li>
							<li>
								<a href="dashboard-pending-ads.html"><i class="fa fa-bolt"></i>Vehiculos Pendientes<span>23</span></a>
							</li>
							<li>
								<a href="logout.html"><i class="fa fa-cog"></i> Cerrar Sesion</a>
							</li>
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
					<form action="#">
						<!-- First Name -->
						<div class="form-group">
						    <label for="first-name0"> Nombre</label>
						    <input type="text" class="form-control" id="first-name">
						</div>
						<!-- Last Name -->
						<div class="form-group">
						    <label for="last-name">Apellidos</label>
						    <input type="text" class="form-control" id="last-name">
						</div>
						<!-- File chooser -->
						<div class="form-group choose-file">
							<i class="fa fa-user text-center"></i>
						    <input type="file" class="form-control-file d-inline" id="input-file">
						 </div>
						<!-- Submit button -->
						<button class="btn btn-transparent">Guardar</button>
					</form>
				</div>
				<!-- Change Password -->
				<div class="widget change-password">
					<h3 class="widget-header user">Editar Contraseña</h3>
					<form action="#">
						<!-- Current Password -->
						<div class="form-group">
						    <label for="current-password">Vieja Contraseña</label>
						    <input type="password" class="form-control" id="current-password">
						</div>
						<!-- New Password -->
						<div class="form-group">
						    <label for="new-password">Nueva Contraseña</label>
						    <input type="password" class="form-control" id="new-password">
						</div>
						<!-- Confirm New Password -->
						<div class="form-group">
						    <label for="confirm-password">Confirmar Nueva Contraseña</label>
						    <input type="password" class="form-control" id="confirm-password">
						</div>
						<!-- Submit Button -->
						<button class="btn btn-transparent">Cambiar Contraseña</button>
					</form>
				</div>
				<!-- Change Email Address -->
				<div class="widget change-email mb-0">
					<h3 class="widget-header user">Editar direccion de correo</h3>
					<form action="#">
						<!-- Current Password -->
						<div class="form-group">
						    <label for="current-email">Viejo Correo</label>
						    <input type="email" class="form-control" id="current-email">
						</div>
						<!-- New email -->
						<div class="form-group">
						    <label for="new-email">Nuevo Correo</label>
						    <input type="email" class="form-control" id="new-email">
						</div>
						<!-- Submit Button -->
						<button class="btn btn-transparent">Cambiar Correo</button>
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