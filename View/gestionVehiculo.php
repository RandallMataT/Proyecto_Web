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

    <div class="templatemo-panels">

<div class="row">
    <div class="col-md-12">

    <div class="btn-group pull-right"> 
        <a href="agregarVehiculo.php"><button type="button" class="btn btn-success">Añadir Vehiculo</button></a>
    </div>
    
    <br/><br/><br/>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Marca</th>
                <th>Provincia</th>
                <th>Estado</th>
                <th>Modelo</th>
                <th>Transmision</th>
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Motor</th>
                <th>Precio</th>
                <th>Direccion</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
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

</body>

</html>