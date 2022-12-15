<?php

include_once 'connBD.php';


function RegistrarUsuarioModel($Nombre, $Apellido, $Correo, $Contrasenna,$telefono)
{
    $enlace = OpenDB();

    $procedimiento = "call Registro('$Nombre','$Apellido','$Correo', '$Contrasenna','$telefono');";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}





?>
