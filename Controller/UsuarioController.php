<?php



if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}

include_once __DIR__ . '\..\Model\UsuarioModel.php';

if(isset($_POST["btnIniciarSesion"]))
{
    $correo = $_POST["txtCorreo"];
    $contrasenna = $_POST["txtContrasenna"];

    $datos = InicioSesionModel($correo, $contrasenna);   
        
    if($datos -> num_rows > 0)
    {
        $datosUsuario = mysqli_fetch_array($datos);
        $_SESSION["sesionNombre"] = $datosUsuario["nombre"];
        $_SESSION["sesionTipoUsuario"] = $datosUsuario["tipoUsuario"];
        header("Location: index.php");
    }
    else
    {
        header("Location: registro.php");
    }
}


?>
