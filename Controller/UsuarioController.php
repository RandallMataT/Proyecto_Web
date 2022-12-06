<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Model\UsuarioModel.php';
include_once __DIR__ . '\UtilitarioController.php';

if(isset($_POST["btnIniciarSesion"]))
{
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $datos = InicioSesionModel($correo, $contrasenna);   
        
    if($datos -> num_rows > 0)
    {
         $datosUsuario = mysqli_fetch_array($datos);
        $_SESSION["sesionNombre"] = $datosUsuario["nombre"];
        $_SESSION["sesionRoles"] = $datosUsuario["Roles"];
        $_SESSION["SesionId"] = $datosUsuario["Id"];
        header("Location: \Proyecto_Web\View\home.php");
        
    
    }
    else
    {
        header("Location: ..\index.php");
    }
}

function ConsultarDatosUsuario($Id)
{
    $datos = ConsultarDatosUsuarioModel($Id);   
    return mysqli_fetch_array($datos);
}

function ListarUsuarioNombre($datos)
{
    $datos = ListarUsuarioModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<option value="' . $fila["Id"] . '">' . $fila["nombre"] . '</option>';

        }
    }
}


?>
