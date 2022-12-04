<?php

include_once 'connBD.php';

function ListarModeloVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarModeloVehiculo();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


?>