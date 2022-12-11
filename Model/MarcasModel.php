<?php

include_once 'connBD.php';

function ListarMarcasModel()
{
    $enlace = OpenDB();

    $procedimiento = "call ListarMarcas();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function BusKiaModel()
{
    $enlace = OpenDB();

    $procedimiento = "call BusKia();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function BusSuzukiModel()
{
    $enlace = OpenDB();

    $procedimiento = "call BusSuzuki();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function BusToyotaModel()
{
    $enlace = OpenDB();

    $procedimiento = "call BusToyota();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function BusVolskwagenModel()
{
    $enlace = OpenDB();

    $procedimiento = "call BusVolskwagen();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}

function BusNissanModel()
{
    $enlace = OpenDB();

    $procedimiento = "call BusNissan();";
    $datos = $enlace -> query($procedimiento);

    CloseDB($enlace);
    return $datos;
}


?>

