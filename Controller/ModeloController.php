<?php

include_once __DIR__ . '\..\Model\ModeloVehiculoModel.php';


function ListarModeloVehiculo($datos)
{
    $datos = ListarModeloVehiculoModel();   

    if($datos -> num_rows > 0)
    {   
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<option value="' . $fila["Id"] . '">' . $fila["modelo_vehiculo"] . '</option>';
            
        }
    }

}


?>