<?php

include_once __DIR__ . '\..\Model\VehiculosModel.php';
include_once __DIR__ . '\..\Model\TipoVehiculoModel.php';
include_once __DIR__ . '\..\Model\EstadoVehiculoModel.php';
include_once __DIR__ . '\..\Model\TransmisionVehiculoModel.php';

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
                                <img class="card-img-top img-fluid" src="data:image/jpg;base64,'. base64_encode($fila['imagen']) .'" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href="">'.$fila["nombre_vehiculo"].'</a></h4>
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

function ListarTipoVehiculo($datos)
{
    $datos = ListarTipoVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<option value="' . $fila["Id"] . '">' . $fila["tipo_vehiculo"] . '</option>';

        }
    }
}

function ListarEstadoVehiculo($datos)
{
    $datos = ListarEstadoVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<option value="' . $fila["Id"] . '">' . $fila["estado_vehiculo"] . '</option>';

        }
    }
}

function ListarTransmisionVehiculo($datos)
{
    $datos = ListarTransmisionVehiculoModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<option value="' . $fila["Id"] . '">' . $fila["tipo_transmision"] . '</option>';

        }
    }
}


?>