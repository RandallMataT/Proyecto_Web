<?php

include_once 'connBD.php';

function ListarVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarVehiculos();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function GestionVehiculoModel()
{
    $enlace = OpenDB();

    $procedimiento = "call GestionVehiculos();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
} 

function ConsultarCarroIdModel($id)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarCarroId($id);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function ConsultarDatosVehiculoModel($Id)
{
    $enlace = OpenDB();

    $procedimiento = "call ConsultarVehiculoId($Id);";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}



function EditarVehiculoModel($Id_usuario, $Id_marca, $Id_provincia, $Id_estado, $id_modelo,$id_transmision, $id_tipo, $nombre_vehiculo
,$Color,$Motor,$Precio,$Direccion,$Id)
{
$enlace = OpenDB();
$resultado = false;

$procedimiento = "call EditarVehiculo($Id_usuario,$Id_marca,$Id_provincia,$Id_estado,
$id_modelo,$id_transmision,$id_tipo,'$nombre_vehiculo','$Color','$Motor','$Precio','$Direccion',$Id);";

if($enlace -> query($procedimiento))
    $resultado = true; 

CloseDB($enlace);
return $resultado;

}

function AgregarVehiculoModal($Id_usuario, $Id_marca, $Id_provincia, $Id_estado, $id_modelo,$id_transmision, $id_tipo, $nombre_vehiculo
,$Color,$Motor,$Precio,$Direccion, $imagen)
{
$enlace = OpenDB();
$resultado = false;

$procedimiento = "call AgregarVehiculo($Id_usuario,$Id_marca,$Id_provincia,$Id_estado,
$id_modelo,$id_transmision,$id_tipo,'$nombre_vehiculo','$Color','$Motor','$Precio','$Direccion','$imagen' );";

if($enlace -> query($procedimiento))
    $resultado = true; 

CloseDB($enlace);
return $resultado;

}

function EliminarVehiculoModel($Id)
{
    $enlace = OpenDB();
    $procedimiento = "call EliminarVehiculo($Id);";

    $enlace -> query($procedimiento);

    CloseDB($enlace);
}



?>