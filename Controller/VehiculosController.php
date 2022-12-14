<?php

include_once __DIR__ . '\..\Model\VehiculosModel.php';
include_once __DIR__ . '\..\Model\TipoVehiculoModel.php';
include_once __DIR__ . '\..\Model\EstadoVehiculoModel.php';
include_once __DIR__ . '\..\Model\TransmisionVehiculoModel.php';

echo'<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">';


function ListarVehiculo()
{
    $datos = ListarVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<!-- offer 01 -->
            <div class="col-sm-12 col-lg-4">
                <!-- product card -->
                <div class="product-item bg-light">

                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="">
                                <img src="data:image/jpg;base64,'. base64_encode($fila['imagen']) .'" width="350" height="270" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title"><a href="vehiculo.php?v='.$fila["Id"].'">' . $fila["marca_vehiculo"]. ' ' . $fila["nombre_vehiculo"].'</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-car"></i>'.$fila["tipo_vehiculo"].'</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i>'.$fila["modelo_vehiculo"].'</a>
                                </li>
                            </ul>
                            <p class="card-text">'.$fila["Direccion"].'</p>
                            <div class="product-ratings">
                                <ul class="list-inline">
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }
}
function ListarVehiculoCategoria()
{
    $datos = ListarVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<!-- offer 01 -->
            <div class="col-sm-12 col-lg-4">
                <!-- product card -->
                <div class="product-item bg-light">

                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="">
                                <img src="data:image/jpg;base64,'. base64_encode($fila['imagen']) .'" width="255" height="170" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                        <h4 class="card-title"><a href="vehiculo.php?v='.$fila["Id"].'">' . $fila["marca_vehiculo"]. ' ' . $fila["nombre_vehiculo"].'</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-car"></i>'.$fila["tipo_vehiculo"].'</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i>'.$fila["modelo_vehiculo"].'</a>
                                </li>
                            </ul>
                            <p class="card-text">'.$fila["Direccion"].'</p>
                            <div class="product-ratings">
                                <ul class="list-inline">
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }
}



function ListarTipoVehiculo($tipo)
{
    $datos = ListarTipoVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["id"])
            echo '<option selected value="' . $fila["id"] . '">' . $fila["tipo_vehiculo"] . '</option>';
            else
            echo '<option value="' . $fila["id"] . '">' . $fila["tipo_vehiculo"] . '</option>';

        }
    }
}

function ListarEstadoVehiculo($tipo)
{
    $datos = ListarEstadoVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["Id"])
            echo '<option selected value="' . $fila["Id"] . '">' . $fila["estado_vehiculo"] . '</option>';
            else
            echo '<option value="' . $fila["Id"] . '">' . $fila["estado_vehiculo"] . '</option>';

        }
    }
}

function ListarTransmisionVehiculo($tipo)
{
    $datos = ListarTransmisionVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["id"])
            echo '<option selected value="' . $fila["id"] . '">' . $fila["tipo_transmision"] . '</option>';
            else
            echo '<option value="' . $fila["id"] . '">' . $fila["tipo_transmision"] . '</option>';
        }
    }
}


function GestionVehiculosT()
{
    $datos = GestionVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<tr>';
            echo '<td>' . $fila["Id"] . '</td> ';
            echo '<td>' . $fila["nombre"] . '</td> ';
            echo '<td>' . $fila["marca_vehiculo"] . '</td>';
            echo '<td>' . $fila["Nombre_provincia"] . '</td>';
            echo '<td>' . $fila["estado_vehiculo"] . '</td>';
            echo '<td>' . $fila["modelo_vehiculo"] . '</td>';
            echo '<td>' . $fila["tipo_transmision"] . '</td>'; 
            echo '<td>' . $fila["tipo_vehiculo"] . '</td>'; 
            echo '<td>' . $fila["nombre_vehiculo"] . '</td>'; 
            echo '<td>' . $fila["Color"] . '</td>'; 
            echo '<td>' . $fila["Motor"] . '</td>'; 
            echo '<td>' . $fila["Precio"] . '</td>';
            echo '<td>' . $fila["Direccion"] . '</td>'; 
            echo '<td> <img  src="data:image/jpg;base64,'. base64_encode($fila['imagen']) .'" alt="Card image cap" 
            height="150" width="240"> </td>'; 
            //echo'<td> <a href="" class="edit" data-toggle="modal" ><i class="material-icons" data-toggle="tooltip" title="Edit" >&#xE254;</i></a>
            //<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>';
            echo '<td> <a href="editarVehiculo.php?f='.$fila["Id"].'" class="text-primary"><i class="fa fa-fw fa-edit"></i> Edit</a>  <br/><br/>
            <a href="#" class"btn editbtn"  data-target="#basicModaln'.$fila["Id"].'" data-toggle="modal" data-id="123"><i class="fa fa-fw fa-trash"></i>Delete </a></td>';

            include('eliminarVehiculo.php');
        }
    }
}


if (isset($_POST["actualizarVehiculo"]))
{
    $Id_usuario = $_POST["idUsuario"];
    $Id_marca = $_POST["idMarca"];
    $Id_provincia = $_POST["idProvincia"];
    $Id_estado = $_POST["idEstado"];
    $id_modelo = $_POST["idModelo"];
    $id_transmision = $_POST["idTransmision"];
    $id_tipo = $_POST["idTipo"];
    $nombre_vehiculo = $_POST["idNombre"];
    $Color = $_POST["idColor"];
    $Motor = $_POST["idMotor"];
    $Precio = $_POST["idPrecio"];
    $Direccion = $_POST["idDireccion"];
    $Id = $_POST["txtId"];

    $resultado = EditarVehiculoModel($Id_usuario, $Id_marca, $Id_provincia, $Id_estado, $id_modelo,$id_transmision, $id_tipo, $nombre_vehiculo
    ,$Color,$Motor,$Precio,$Direccion,$Id);

    if($resultado == true)
    {
        //EnviarCorreo($Correo, 'Información Actualizada', 'Esta es la información actualizada');
        header("Location: gestionVehiculo.php"); 
    }
    else
    {
        //Que pasa si algo sale mal??
        header("Location: editarVehiculo.php"); 
    } 
}

$status = $statusMsg = '';
if (isset($_POST["GuardarVehiculo"])) {

    $Id_usuario = $_POST["idUsuario"];
    $Id_marca = $_POST["idMarca"];
    $Id_provincia = $_POST["idProvincia"];
    $Id_estado = $_POST["idEstado"];
    $id_modelo = $_POST["idModelo"];
    $id_transmision = $_POST["idTransmision"];
    $id_tipo = $_POST["idTipo"];
    $nombre_vehiculo = $_POST["idNombre"];
    $Color = $_POST["idColor"];
    $Motor = $_POST["idMotor"];
    $Precio = $_POST["idPrecio"];
    $Direccion = $_POST["idDireccion"];
    $status = 'error'; 
    if(!empty($_FILES["idImagen"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["idImagen"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['idImagen']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            //$insert = $db->query("INSERT into images (image, created) VALUES ('$imgContent', NOW())"); 
            $imagen = $imgContent;
             
            if($imagen){ 
                $status = 'success'; 
                $statusMsg = "File uploaded successfully."; 
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
 
 
// Display status message 
echo $statusMsg;


        $resultado = AgregarVehiculoModal($Id_usuario, $Id_marca, $Id_provincia, $Id_estado, $id_modelo,$id_transmision, $id_tipo, $nombre_vehiculo
        ,$Color,$Motor,$Precio,$Direccion,$imagen);

        if($resultado == true)
        {
            header("Location: gestionVehiculo.php"); 
        }
        else
        {
            header("Location: agregarVehiculo.php"); 
        } 
    
}


if(isset($_POST["btnEliminar"]))
{
    $Id = $_GET["carId"];
    EliminarVehiculoModel($Id);  
}


function ConsultarCarrosIdUsuario($id)
{
    $datos = ConsultarCarroIdModel($id);   
    return mysqli_fetch_array($datos);
}

function ConsultarDatosVehiculo($Id)
{
    $datos = ConsultarDatosVehiculoModel($Id);
    return mysqli_fetch_array($datos);
}


?>


