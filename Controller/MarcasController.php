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
            echo '<a href=""><i class="fa fa-car"></i>' . $fila["Nombre"] . '</a>';
            echo '</li>';
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
								<h4>'. $fila["Nombre"] . '</h4>
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
