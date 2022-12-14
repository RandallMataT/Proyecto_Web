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

    	<!--================================
=            Page Title            =
=================================-->
	<section class="page-title">
		<!-- Container Start -->
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 text-center">
					<!-- Title text -->
					<h3>Gestión Vehiculos</h3>
                    
				</div>
			</div>
		</div>
		<!-- Container End -->
	</section>

<div class="templatemo-panels">

<div class="row-md-12">
    <div class="col-md-12">
       
    <br/><br/>

    <div class="btn-group pull-right"> 
        <a href="agregarVehiculo.php"><button type="button" class="btn btn-success">Añadir Vehiculo</button></a>
    </div>
    
    <br/><br/><br/>
    
    <table id="tablaVehiculos" class="table table-bordered table-hover">
    <caption>Lista de Vehiculos</caption>
        <thead class="thead-dark"> 
            <tr>
                <th>Id</th>
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
               GestionVehiculosT();
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

 


</body>

</html>