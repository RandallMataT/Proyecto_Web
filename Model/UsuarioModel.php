<?php

include_once 'connBD.php';


function InicioSesionModel($correo, $contrasenna)
{

    $enlace = OpenDB();

    $procedimiento = "call IniciarSesion('$correo', '$contrasenna');";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;

}

function ConsultarDatosUsuarioModel($Id)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarUsuarioId($Id);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}



?>