<?php
include_once __DIR__ . '\View\generales.php';
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
<section class="page-search">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Advance Search -->
                <div class="advance-search">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" id="inputtext4" placeholder="Qué estás buscando">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="inputCategory4" placeholder="Categoria">
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="inputLocation4" placeholder="Ubicación">
                            </div>
                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-primary">Buscar ahora</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-result bg-gray">
                    <h2>Resultados por Marca"</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="category-sidebar">
                    <div class="widget category-list">
    <h4 class="widget-header">Categorias</h4>
    <ul class="category-list">
        <li><a href="category.html">Pickup<span>93</span></a></li>
        <li><a href="category.html">Sedán <span>233</span></a></li>
        <li><a href="category.html">SUV  <span>183</span></a></li>
        <li><a href="category.html">4x4 <span>343</span></a></li>
    </ul>
</div>
<div class="widget category-list">
    <h4 class="widget-header">Cercano</h4>
    <ul class="category-list">
        <li><a href="category.html">Cartago<span>93</span></a></li>
        <li><a href="category.html">San José <span>233</span></a></li>
        <li><a href="category.html">Heredia <span>183</span></a></li>
        <li><a href="category.html">Alajuela <span>120</span></a></li>
        <li><a href="category.html">Puntarenas <span>40</span></a></li>
        <li><a href="category.html">Limón <span>81</span></a></li>
    </ul>
</div>
<div class="widget filter">
    <h4 class="widget-header">Mostrar vehiculos</h4>
    <select>
        <option>Popularidad</option>
        <option value="1">Los más valorados</option>
        <option value="2">El precio más bajo</option>
        <option value="4">El precio más alto</option>
    </select>
</div>
<div class="widget price-range">
    <h4 class="widget-header">Rango de precio</h4>
    <div class="block">
        <b>$1000</b>
        <input id="ex2" type="text" class="span2" value="" data-slider-min="10" data-slider-max="1000" data-slider-step="5" data-slider-value="[250,450]"/>
        <b>$40000</b>
    </div>
</div>
<div class="widget product-shorting">
    <h4 class="widget-header">Por condición</h4>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="">
        Nuevo
      </label>
    </div>
    <div class="form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" value="">
        Usado
      </label>
    </div>
</div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="category-search-filter">
                    <div class="row">
                        <div class="col-md-6">
                            <strong>Mostrar</strong>
                            <select>
                                <option>Más reciente</option>
                                <option value="1">Más popular</option>
                                <option value="2">El precio más bajo</option>
                                <option value="4">El precio más alto</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <div class="view">
                                <strong>Punto de vista</strong>
                                <ul class="list-inline view-switcher">
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"><i class="fa fa-th-large"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript:void(0);"><i class="fa fa-reorder"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-grid-list">
                    <div class="row mt-30">
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgNissan.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgJeep.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgToyota.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgNissan.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgJeep.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgToyota.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgNissan.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgJeep.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                        <div class="col-sm-12 col-lg-4 col-md-6">
                            <!-- product card -->
<div class="product-item bg-light">
    <div class="card">
        <div class="thumb-content">
            <!-- <div class="price">$200</div> -->
            <a href="">
                <img class="card-img-top img-fluid" src="images/products/imgToyota.jpg" alt="Card image cap">
            </a>
        </div>
        <div class="card-body">
            <h4 class="card-title"><a href="">Nombre del vehiculo</a></h4>
            <ul class="list-inline product-meta">
                <li class="list-inline-item">
                    <a href=""><i class="fa fa-folder-open-o"></i>Marca</a>
                </li>
            </ul>
            <p class="card-text">Información del vehiculo</p>
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
                                <a class="page-link" href="#" aria-label="Next">
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