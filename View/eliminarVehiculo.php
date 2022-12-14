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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!DOCTYPE html>
<html lang="en">

<head>

<?php

	headerGeneral();

	?>

</head>

<body>




  <div class="modal fade" id="basicModaln<?php echo $fila["Id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gestion vehiculos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Está seguro de eliminar el vehiculo seleccionado?
      </div>
      <form action="" method="POST">
      <div class="modal-footer">
        <input type="text" name="carId" id="carId" value=""/>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <input type="button" class="btn btn-primary" id="btnEliminar" name="btnEliminar" value="Si">
      </div>
      </form>
    </div>
  </div>
</div>




</body>

</html>