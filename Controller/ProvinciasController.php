<?php

include_once __DIR__ . '\..\Model\ProvinciasModel.php';

function ListarProvincias()
{
    $datos = ListarProvinciasModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.html">'. $fila["Nombre_provincia"] .'<span>'.random_int(40,120).'</span></a></li>'; 
        }
    }
}


?>