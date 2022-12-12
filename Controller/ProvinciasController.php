<?php

include_once __DIR__ . '\..\Model\ProvinciasModel.php';

function ListarProvinciasCategoria()
{
    $datos = ListarProvinciasModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.php?p='. $fila["Id"] .'">'. $fila["Nombre_provincia"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}

function ListarProvincias($datos)
{
    $datos = ListarProvinciasModel();   

    if($datos -> num_rows > 0)
    {   
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.php?p='. $fila["Id"] .'">'. $fila["Nombre_provincia"] .'<span>'.random_int(40,120).'</span></a></li>';
            
        }
    }

}


?>