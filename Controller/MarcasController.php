<?php

include_once __DIR__ . '\..\Model\MarcasModel.php';

function ListarMarcas()
{
    $datos = ListarMarcasModel();   

    if($datos -> num_rows > 0)
    {
        
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li class="list-inline-item">';
            echo '<a href=""><i class="fa fa-car" id="Bus'.$fila["marca_vehiculo"].'"></i>' . $fila["marca_vehiculo"] . '</a>';
            echo '</li>';

        }
    }
}

<<<<<<< HEAD
function ListarMarcasAgregar($tipo)
=======
function ListarMarcasAgregar($datos)
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6
{
    $datos = ListarMarcasModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
<<<<<<< HEAD
            if($tipo == $fila["Id"])
            echo '<option selected value="' . $fila["Id"] . '">' . $fila["marca_vehiculo"] . '</option>';
            else
               echo '<option value="' . $fila["Id"] . '">' . $fila["marca_vehiculo"] . '</option>';
=======
            echo '<option value="' . $fila["Id"] . '">' . $fila["marca_vehiculo"] . '</option>';
>>>>>>> 7761e2d09b1da754399ed9e47bb86e66ebfcd0d6

        }
    }
}


function ListarMarcasCategoria()
{

    $datos = ListarMarcasModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.php?f=">'. $fila["marca_vehiculo"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}



function ListarMarcasEndPage()
{
    $datos = ListarMarcasModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
           echo '<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block" >
							<div class="header">
								<i class="fa fa-car icon-bg-'.random_int(1,8).'"></i> 
                                <a href="category.php">
								<h4>'. $fila["marca_vehiculo"] . '</h4>
                                </a>
							</div>
							<a href="">
                            <img src="data:image/jpg;base64,'. base64_encode($fila['imagenMarca']) .'" width="200" height="200" alt="Card image cap">
                            </a>
						</div>
					</div>';
        }
    }

}

function ListarBuskia()
{

    $datos = BusKiaModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.html">'. $fila["KIA"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}


function ListarBusSuzuki()
{

    $datos = BusSuzukiModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.html">'. $fila["Suzuki"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}


function ListarBusToyota()
{

    $datos = BusToyotaModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.html">'. $fila["Toyota"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}

function ListarBusVolskwagen()
{

    $datos = BusVolskwagenModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.html">'. $fila["Volskwagen"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}

function ListarBusNissan()
{

    $datos =  BusNissanModel();   

    if($datos -> num_rows > 0)
    {
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<li><a href="category.html">'. $fila["Nissan"] .'<span>'.random_int(40,120).'</span></a></li>';
        }
    }

}

?>
