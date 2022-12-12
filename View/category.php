<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\MarcasController.php';
include_once __DIR__ . '\..\Controller\ProvinciasController.php';
include_once __DIR__ . '\..\Controller\VehiculosController.php';
include_once __DIR__ . '\..\Controller\CategoriaController.php';
include_once __DIR__ . '\..\Model\CategoriaModel.php';

$datos = ConsultarMarcasVehiculo($_GET["f"]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
headerGeneral();
?>
</head>
<body class="body-wrapper">
<section>
<?php
navbar();
?>
</section>
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-result bg-gray">
                    <h2>Resultados para <?php echo $datos["Id_marca"];?> </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="category-sidebar">
    </div>
            </div>
            <div class="col-md-9">          
                <div class="product-grid-list">
                    <div class="row mt-30">
                    
                    
        <div class="col-sm-12 col-lg-4">
                <!-- product card -->
                <div class="product-item bg-light">

                    <div class="card">
                        <div class="thumb-content">
                            <!-- <div class="price">$200</div> -->
                            <a href="">
                                <img src="../images/products/imgNissan.jpg" width="255" height="170" alt="Card image cap">
                            </a>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title"><a href=""><?php echo $datos["Id_marca"];?></a></h4>
                            <ul class="list-inline product-meta">
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-car"></i>tipo vehiculo</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href=""><i class="fa fa-calendar"></i>modelo</a>
                                </li>
                            </ul>
                            <p class="card-text"> direccion </p>
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
            </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================
=            Footer            =
=============================-->
<footer class="footer section section-sm">
<?php
footerInfo();
?>
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
<?php
footerCopyright();
?>
</footer>
<?php
javascripts();
?>
</body>
</html>