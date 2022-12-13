<?php
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
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
					<h3>Gestión Usuarios</h3>
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

<div class="templatemo-panels">

<div class="row-md-12">
    <div class="col-md-12">
       
    <br/><br/>


      
    <table id="tablaVehiculos" class="table table-bordered table-hover">
    <caption>Lista de Vehiculos</caption>
        <thead class="thead-dark"> 
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Roles</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
               ListarUsuarios();
            ?>
        </tbody>
    </table>
    

    </div>
  </div>
</div>


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


<script>
$(document).ready(function () {
    $('#tablaVehiculos').DataTable();
});
</script>



</body>

</html>