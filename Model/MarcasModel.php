<?php

include_once 'connBD.php';

function ListarMarcasModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarMarcas();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}



?>