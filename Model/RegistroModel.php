<?php

include_once 'connBD.php';


function RegistrarUsuarioModel($Nombre, $Apellido, $Correo, $Contrasenna)
{
    $enlace = OpenDB();

    $procedimiento = "call Registro('$Nombre','$Apellido','$Correo', '$Contrasenna');";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}





?>
