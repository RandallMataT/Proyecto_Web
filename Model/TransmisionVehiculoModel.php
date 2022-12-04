<?php

include_once 'connBD.php';

function ListarTransmisionVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTransmisionVehiculo();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


?>