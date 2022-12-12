<?php

include_once 'connBD.php';

function ConsultarMarcasVehiculoModel($Id_marca)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarMarcaId($Id_marca);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

?>