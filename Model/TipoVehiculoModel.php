<?php

include_once 'connBD.php';

function ListarTipoVehiculo()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarTipoVehiculo();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


?>