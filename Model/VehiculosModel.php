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
<<<<<<< HEAD

function ConsultarCarroIdModel($id)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarCarroId($id);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}
=======
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6

?>