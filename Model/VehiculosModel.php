<?php

include_once 'connBD.php';

function ListarVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarVehiculos();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}



?>