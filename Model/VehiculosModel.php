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

function GestionVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call GestionVehiculos();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
} 

?>