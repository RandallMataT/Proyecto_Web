<?php

include_once __DIR__ . '\..\Model\ProvinciasModel.php';

function ListarProvinciasCategoria()
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

<<<<<<< HEAD
function ListarProvincias($tipo)
=======
function ListarProvincias($datos)
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
{
    $datos = ListarProvinciasModel();   

    if($datos -> num_rows > 0)
    {   
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
<<<<<<< HEAD
            if($tipo == $fila["Id"])
            echo '<option selected value="' . $fila["Id"] . '">' . $fila["Nombre_provincia"] . '</option>';
            else
=======
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
            echo '<option value="' . $fila["Id"] . '">' . $fila["Nombre_provincia"] . '</option>';
            
        }
    }

}


?>