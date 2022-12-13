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

function ListarUsuarioNombre($tipo)
{
    $datos = ListarUsuarioModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["Id"])
            echo '<option selected value="' . $fila["Id"] . '">' . $fila["nombre"] . '</option>';
            else
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
    function ConsultarCarroUsuario($Id)
{
    $datos = ConsultarCarroUsuarioModel($Id); 
    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo'<div class="widget dashboard-container my-adslist">
            <table class="table table-responsive product-dashboard-table">
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Caracteristicas</th>
                        <th class="text-center">Marca</th>
                        <th class="text-center">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td class="product-thumb">
                            <img width="80px" height="auto" src="data:image/jpg;base64,'. base64_encode($fila['imagen']) .'" alt="image description"></td>
                        <td class="product-details">
                            <h3 class="title">'.$fila["nombre_vehiculo"].' </h3>
                            <span class="add-id"><strong>Codigo</strong>'.$fila["Id"].'</span>
                            <span><strong>Publicado: </strong><time>11/12/2022</time> </span>
                            <span class="status active"><strong>Estado</strong>Active</span>
                            <span class="location"><strong>Dirección</strong>'.$fila["Direccion"].'</span>
                        </td>
                        <td class="product-category"><span class="categories">'.$fila["marca_vehiculo"].'</span></td>
                        <td class="action" data-title="Action">
                            <div class="">
                                <ul class="list-inline justify-content-center">
                                    <li class="list-inline-item">
                                        <a data-toggle="tooltip" data-placement="top" title="Tooltip on top" class="view" href="vehiculo.php">
                                            <i class="fa fa-eye"></i>
                                        </a>		
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="edit" href="editarVehiculo.php?f='.$fila["Id"].'">
                                            <i class="fa fa-pencil"></i>
                                        </a>		
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="delete" href="">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            
        </div>';

        
        }
        
    }else 
    echo'No hay vehiculos disponibles';
    return mysqli_fetch_array($datos);
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
