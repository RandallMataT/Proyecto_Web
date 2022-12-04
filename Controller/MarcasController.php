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

function ListarMarcasAgregar($datos)
{
    $datos = ListarMarcasModel();   

    if($datos -> num_rows > 0)
    {
        echo '<option selected value=""> Seleccione </option>';
        while($fila = mysqli_fetch_array($datos))
        {
            echo '<option value="' . $fila["Id"] . '">' . $fila["marca_vehiculo"] . '</option>';

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
            echo '<li><a href="category.html">'. $fila["marca_vehiculo"] .'<span>'.random_int(40,120).'</span></a></li>';
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
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-'.random_int(1,9).'"></i> 
								<h4>'. $fila["marca_vehiculo"] . '</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Sedan <span>93</span></a></li>
								<li><a href="category.html">4x4 <span>233</span></a></li>
								<li><a href="category.html">Suv <span>183</span></a></li>
								<li><a href="category.html">pickup <span>343</span></a></li>
							</ul>
						</div>
					</div>';
        }
    }

}





?>
