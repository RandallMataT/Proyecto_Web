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


function ListarUsuarioModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarUsuarios();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function EditarUsuarioModel($nombre, $apellido, $correo, $telefono, $contrasenna, $Roles, $estado, $Id)
{
$enlace = OpenDB();
$resultado = false;

$procedimiento = "call EditarUsuario('$nombre','$apellido','$correo','$telefono','$contrasenna',$Roles,$estado,$Id);";

if($enlace -> query($procedimiento))
    $resultado = true; 

CloseDB($enlace);
return $resultado;

}


?>