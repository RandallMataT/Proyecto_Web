<?php
include_once 'connBD.php';

function ListarProvinciasModel()
{
    
    $enlace = OpenDB();

    $procedimiento = "call ListarProvincias();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;

}

?>