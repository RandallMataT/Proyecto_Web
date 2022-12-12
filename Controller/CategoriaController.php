<?php

include_once __DIR__ . '\..\Model\CategoriaModel.php';




function ConsultarMarcasVehiculo($Id_marca)
{
    $datos = ConsultarMarcasVehiculoModel($Id_marca);   
    return mysqli_fetch_array($datos);

}
?>