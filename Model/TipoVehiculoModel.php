<?php

include_once 'connBD.php';

function ListarTipoVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTipoVehiculo();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


?>