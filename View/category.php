<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';
include_once __DIR__ . '\..\Controller\MarcasController.php';
include_once __DIR__ . '\..\Controller\ProvinciasController.php';
include_once __DIR__ . '\..\Controller\VehiculosController.php';
+include_once __DIR__ . '\..\Controller\CategoriaController.php';
include_once __DIR__ . '\..\Model\CategoriaModel.php';
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
                    <h2>Busca por categoria</h2>
                    <h2>Resultados para </h2>
                </div>
            </div>
        </div>
      
            <div class="col-md-9">          
                <div class="product-grid-list">
                    <div class="row mt-30">
                    
<?php
 $datos = ConsultarMarcasVehiculo($_GET["f"]);
 ?>                                   
                    </div>
                </div>
                <div class="pagination justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href=" " aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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