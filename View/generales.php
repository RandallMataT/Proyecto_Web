<?php

if (session_status() == PHP_SESSION_NONE)
    session_start();

include_once __DIR__ . '\..\Controller\UsuarioController.php';
include_once __DIR__ . '\..\Model\UsuarioModel.php';



function headerGeneral()
{
    echo '<!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo Autos</title>
    
    <!-- PLUGINS CSS STYLE -->
    <link href="../plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="/../plugins/slick-carousel/slick/slick.css" rel="stylesheet">
    <link href="/../plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
    <!-- Fancy Box -->
    <link href="../plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
    <link href="../plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
    <link href="../plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="../css/style.css" rel="stylesheet">
  
    <!-- FAVICON -->
    <link href="../img/favicon.png" rel="shortcut icon">
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->';

}

function navbar()
{
  
  include_once __DIR__ . '\..\Controller\UtilitarioController.php';

echo '<div class="container">
<div class="row">
  <div class="col-md-12">
    <nav class="navbar navbar-expand-lg  navigation">
      <a class="navbar-brand" href="home.php">
        <img src="../images/LOGO.png" width="140" height="80" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto main-nav ">
          <li class="nav-item">
            <a class="nav-link" href="perfilUsuario.php?q='. $_SESSION["SesionId"] .'"><i class="fa fa-user"></i> Bienvenido '.$_SESSION["sesionNombre"].'</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Inicio</a>
          </li>
          <li class="nav-item dropdown dropdown-slide">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Paginas <span><i class="fa fa-angle-down"></i></span>
            </a>
            <!-- Dropdown list -->
            <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="vehiculo.php">Vehiculo Destacado</a>
            <a class="dropdown-item" href="editarUsuario.php">Editar Usuario</a>
            <a class="dropdown-item" href="agregarVehiculo.php">Agregar Vehiculo</a>
            <a class="dropdown-item" href="comentarios.php">Comentarios de la Pagina</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="category.php">Categorias</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto mt-10">
          <li class="nav-item">
          <form action="" method="post">
            <input class="btn btn-dark" type="submit" id="btnCerrar" name="btnCerrar" value="Cerrar Sesion"></input>
            </form>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</div>
</div>';


}


function footerInfo()
{

    echo '<!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
          <!-- About -->
          <div class="block about">
            <!-- footer logo -->
            <img src="../images/LOGO_blaco.png" width="140" height="80" alt="">
            <!-- description -->
            <p class="alt-color">En Todo Autos contamos 
              con una amplia varidad de modelos y rangos de precios para 
              que encontrés lo que se adapte mejor a tus necesidades, desde autos 
              usados hasta autos nuevos, los podras econtrar aqui.</p>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-md-4 offset-md-1 col-md-3">
          <div class="block">
            <h4>¿Donde estamos?</h4>
            <ul>
              <li><a href="#">San Jose</a></li>
              <li><a href="#">Cartago</a></li>
              <li><a href="#">Santo Domingo</a></li>
              <li><a href="#">Escazu</a></li>
            </ul>
          </div>
        </div>
        <!-- Link list -->
        <div class="col-md-4 offset-md-1 offset-lg-0">
          <div class="block">
            <h4>Horarios</h4>
            <ul>
              <li><a href="#">Martes / Viernes</a></li>
              <li><a href="#">7am - 4pm</a></li>
              <li><a href="#">Sabado</a></li>
              <li><a href="#">10am - 5pm</a></li>
            </ul>
          </div>
        </div>
        <!-- Promotion -->
        </div>
      </div>
    </div>
    <!-- Container End -->';
}

function footerCopyright()
{

    echo ' <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <!-- Copyright -->
          <div class="copyright col-6 offset-3">
            <p>Copyright © 2016. Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </div>';
}


function javascripts()
{

    echo ' <!-- JAVASCRIPTS -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="plugins/tether/js/tether.min.js"></script>
    <script src="plugins/raty/jquery.raty-fa.js"></script>
    <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
    <script src="plugins/slick-carousel/slick/slick.min.js"></script>
    <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
    <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="js/scripts.js"></script>';



}


?>