<?php
include("php/seguridad.php");
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Coffee Tec</title>
	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="slider/responsiveslides.css">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Offside' rel='stylesheet' type='text/css'>
	
</head>
<body>
	
	<div id="container">
		<header>
			<h1 id="logo"><a href="index_2.php">Coffee Tec</a></h1>
		</header>
		<nav id="menu_principal">
			<a href="#" id="link_menu">Menú</a>
			<ul>
				<li class="active"><a href="index_2.php">Inicio</a></li>
				<li><a href="menu/comida/dia.html">Menu Dia</a></li>
			<li><a href="menu/papas/botanas.html">Botanas</a></li>
			<li><a href="menu/bebidas/bebidas.html">Bebidas</a></li>
			<li><a href="menu/mas_productos/mas.html">Mas...</a></li>
            <li><a href="php/salir.php">Cerrar Sesion</a></li>
			</ul>
		</nav>
		<section id="content">
			<!-- slider -->
			<div class="callbacks_container">
		      <ul class="rslides" id="slider">
		      	<li>
		          <a href="menu/comida/detalle1.html" title="Ver el detalle de esta comida">
						<img src="img/slider/comida1.png" alt="Comida 1" width="300" height="150">
					</a>
		        </li>
		        <li>
			        <a href="menu/comida/detalle2.html" title="Ver el detalle de esta comida">
						<img src="img/slider/comida2.png" alt="Comida 2" width="300" height="150">

				  </a>
		        </li>
		        <li>
					<a href="menu/comida/detalle3.html" title="Ver el detalle de esta comida">
						<img src="img/slider/comida3.png" alt="Comida 3" width="300" height="150">

				  </a>
		        </li>
		        <li>
					<a href="menu/comida/detalle4.html" title="Ver el detalle de esta comida">
						<img src="img/slider/comida4.png" alt="Comida 4" width="300" height="150">

				  </a>
		        </li>
		        
		      </ul>
		    </div>
		    <!-- /slider -->

		    <!-- Productos mas pedidos -->
			<div id="productos"  align="center">
			  <div class="productos">
					<h3>Hamburguesa</h3>
				  <a href="menu/comida/dia.html"><img src="img/comida/Hamburguesa1.jpg" alt="Hamburguesa" width="115" height="115" title="Hamburguesa"></a>
				</div>
                <div class="productos">
                  <h3>Sabritas</h3>
					<a href="menu/papas/botanas.html"><img src="img/papas/sabritas.png"
                     alt="Sabritas" width="115" height="115" title="Sabritas"></a>
				</div>
				<div class="productos">
					<h3>Cocacola</h3>
					<a href="menu/bebidas/bebidas.html"><img src="img/refrescos/cocacola.jpg" alt="cocacola" width="114" height="115" title="cocacola"></a>
				</div>
				<div class="productos">
					<h3>Postres</h3>
					<a href="menu/mas_productos/postres.html"><img src="img/postres/postre1.jpg" alt="Postres" width="115" height="115" title="postres"></a>
				</div>
				<div class="productos">
					<h3>Dulces</h3>
					<a href="dulces.html"><img src="img/dulces/principeweb-a10fb92-e833eb.png" alt="Dulces" width="115" height="115" title="Dulces"></a>
				</div>
			</div>
		    <!-- /productos -->
		</section>
		<aside id="sidebar">
			<div class="widget">
				<h3>BUSCAR</h3>
				<form method="post" action="#">
					<input type="text" name="dato" placeholder="Search"/>
					<input type="submit" value="Buscar" class="boton1" />
				</form>
			</div>
			<div class="widget">
				<h3>FINALIZAR COMPRA</h3>
                	<a href="carritocompra.html"><img src="img/Carrito.png" alt="carrito compra" width="114" height="115" title="carrito compra"></a>
			</div>
            <div class="widget">
				<h3>SIGUENOS</h3>
				<ul class="redes_list">
					<li>
						<a href="https://es-la.facebook.com/" target="_blank" title="Siguenos en Facebook">
							<img src="img/logo_facebook.jpg" alt="Logo Facebook" />
						</a>
					</li>
					<li>
						<a href="https://twitter.com/" target="_blank" title="Siguenos en Twitter">
							<img src="img/logo_twitter.jpg" alt="Logo Twitter" />
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/up/search" target="_blank" title="Siguenos en G+">
							<img src="img/logo_google.png" alt="Logo G+" />
						</a>
					</li>
				</ul>
			</div>
		</aside>
		<footer>
		</footer>
	</div>
	
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>-->
	<script src="js/jquery-1.10.2.min.js"></script>
	<script src="slider/responsiveslides.min.js"></script>
	<script src="js/funciones.js"></script>
</body>
</html>
