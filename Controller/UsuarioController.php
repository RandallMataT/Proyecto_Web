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

if (isset($_POST["actualizarUsuario"]))
{
    $nombre = $_POST["txtNombre"];
    $apellido = $_POST["txtApellido"];
    $correo = $_POST["txtCorreo"];
    $telefono = $_POST["txtTelefono"];
    $contrasenna = $_POST["txtContrasenna"];
    $Roles = $_POST["txtRol"];
    $estado = $_POST["txtEstado"];
    $Id = $_POST["txtId"];

    $resultado = EditarUsuarioModel($nombre, $apellido, $correo, $telefono, $contrasenna, $Roles, $estado, $Id);

    if($resultado == true)
    {
        //EnviarCorreo($Correo, 'Información Actualizada', 'Esta es la información actualizada');
        header("Location: home.php"); 
    }
    else
    {
        //Que pasa si algo sale mal??
        header("Location: home.php"); 
    } 

}

function ListarUsuarios()
{
    $datos = ListarUsuarioModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<tr>';
            echo '<td>' . $fila["Id"] . '</td> ';
            echo '<td>' . $fila["nombre"] . '</td>';
            echo '<td>' . $fila["apellido"] . '</td>';
            echo '<td>' . $fila["correo"] . '</td>';
            echo '<td>' . $fila["telefono"] . '</td>';
            echo '<td>' . $fila["tipo_usuario"] . '</td>';
            echo '<td> <a href="editarUsuario.php?q='. $fila["Id"] .'" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a>  <br/><br/>
            <a href=">" class="text-danger" onClick=""><i class="fa fa-fw fa-trash"></i>Delete</a></td>';
        }
    }
}

?>
