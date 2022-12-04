<?php

include_once 'connBD.php';

function ListarEstadoVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarEstadoVehiculo();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


?>