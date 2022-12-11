<?php

include_once __DIR__ . '\..\Model\ModeloVehiculoModel.php';


<<<<<<< HEAD
function ListarModeloVehiculo($tipo)
=======
function ListarModeloVehiculo($datos)
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
{
    $datos = ListarModeloVehiculoModel();   

    if($datos -> num_rows > 0)
    {   
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
<<<<<<< HEAD
            if($tipo == $fila["id"])
            echo '<option selected value="' . $fila["id"] . '">' . $fila["modelo_vehiculo"] . '</option>';
            else
            echo '<option value="' . $fila["id"] . '">' . $fila["modelo_vehiculo"] . '</option>';
=======
            echo '<option value="' . $fila["Id"] . '">' . $fila["modelo_vehiculo"] . '</option>';
            
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
        }
    }

}


?>