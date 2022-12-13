<?php

if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}


include_once __DIR__ . '\generales.php';

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
<!--=================================
=            Single Blog            =
==================================-->


<section class="blog single-blog section">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<article class="single-post">
					<h3>Comentarios</h3>
					<ul class="list-inline">
						<li class="list-inline-item">Por <a href="">Usuario</a></li>
					</ul>
					<img src="images/hilux.jpg" alt="article-01"><li class="list-inline-item">Imagen Del Vehiculo Del Comentario
					<p>Espacio Del Comentario.</p>
					<ul class="social-circle-icons list-inline">
				  		<li class="list-inline-item text-center"><a class="fa fa-facebook" href=""></a></li>
				  		
				  	</ul>
				</article>
				<div class="block comment">
					<h4>Dejar Un Comentario</h4>
					<form action="#">
						<!-- Message -->
						<div class="form-group mb-30">
						    <label for="message">Comentario</label>
						    <textarea class="form-control" id="message" rows="8"></textarea>
						</div>
						<div class="row">
							<div class="col-sm-12 col-md-6">
								<!-- Name -->
								<div class="form-group mb-30">
								    <label for="name">Nombre</label>
								    <input type="text" class="form-control" id="name">
								</div>
							</div>
							<div class="col-sm-12 col-md-6">
								<!-- Email -->
								<div class="form-group mb-30">
								    <label for="email">Correo</label>
								    <input type="email" class="form-control" id="email">
								</div>
							</div>
						</div>
						<button class="btn btn-transparent">Dejar Comentario</button>
					</form>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- Search Widget -->
					<div class="widget search p-0">
						<div class="input-group">
						    <input type="text" class="form-control" id="expire" placeholder="Buscar Comentarios...">
						    <span class="input-group-addon"><i class="fa fa-search"></i></span>
					    </div>
					</div>
					<!-- Category Widget -->
					<div class="widget category">
						<!-- Widget Header -->
						<h5 class="widget-header">Comentarios</h5>
						<ul class="category-list">
							<li><a href="">Muy Buenos <span class="float-right">(2)</span></a></li>
							<li><a href="">Buenos <span class="float-right">(5)</span></a></li>
							<li><a href="">Regulares<span class="float-right">(7)</span></a></li>
							<li><a href="">Malos<span class="float-right">(3)</span></a></li>
							<li><a href="">Muy Malos<span class="float-right">(9)</span></a></li>
						</ul>
					</div>
					
						</ul>
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

