<?php

include_once __DIR__ . '\..\Model\ModeloVehiculoModel.php';


function ListarModeloVehiculo($tipo)
{
    $datos = ListarModeloVehiculoModel();   

    if($datos -> num_rows > 0)
    {   
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            if($tipo == $fila["id"])
            echo '<option selected value="' . $fila["id"] . '">' . $fila["modelo_vehiculo"] . '</option>';
            else
            echo '<option value="' . $fila["id"] . '">' . $fila["modelo_vehiculo"] . '</option>';
        }
    }

}


?>