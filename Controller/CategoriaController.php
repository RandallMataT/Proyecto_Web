<?php

include_once __DIR__ . '\..\Model\CategoriaModel.php';




function ConsultarMarcasVehiculo($Id_marca)
{
    $datos = ConsultarMarcasVehiculoModel($Id_marca);  
    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '
            
            <!-- offer 01 -->
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
                            <h4 class="card-title"><a href="">' . $fila["marca_vehiculo"]. ' ' . $fila["nombre_vehiculo"].'</a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-car"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i></a>
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
        
    }else 
    echo'No hay vehiculos disponibles para esta marca';
    return mysqli_fetch_array($datos);

}




?>

