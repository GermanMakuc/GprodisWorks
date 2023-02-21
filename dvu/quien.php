<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D.V.U - Quiénes Somos</title>
	<?php include("./include/header.php");?>
</head>
<body>
	<style>
		h1,h2{
			padding: 0;
			margin: 0;
		}
		.slider > li > img{
			width: 100%;
		}
	</style>
	<script>
$(document).ready(function(){
$('.slider').bxSlider({
  auto: true,
  pause: 7000,
  autoControls: false,
  controls: true
});

});
	</script>
		<div class="container-fluid header1">
			<div class="container">
				<div class="row">
					<div class="col-xs-7 col-sm-5 col-md-5">
							<img width="70%" src="./images/logo.png" alt="">
					</div>
					<div class="hidden-xs col-sm-7 col-md-7">
								<div class="menu_relleno text-right">
									<?php include("./include/menu.php");?>
								</div>
					</div>
					<div class="col-md-6 hidden-sm hidden-md hidden-lg">
						<?php include("./include/navbar.php");?>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
 					<div class="col-md-6">
 						<img width="70%" src="./images/img-who.png">
 					</div>
 					<div class="col-md-6">
 						<h3 class="text-right"><strong>QUIENES SOMOS</strong></h3>
 						<p class="text-right text-justify">
 						D.V.U. ADITIVOS Y PINTURAS, Empresa con más de 15 años en el mercado nacional Chileno. Nuestra empresa fabrica 
productos asociados al revestimiento y pintura de interiores y exteriores en casas y departamentos, además cuenta con equipos de especialistas expertos en la aplicación de los mismos en obra.
						</p>
 						<p class="text-right text-justify">Contamos con profesionales y técnicos que otorgan servicios y capacitación a nuestros clientes en todas las áreas de la  construcción. Con un gran equipo de trabajo, maestros especialistas comprometidos en todos los campos de las obras inmobiliarias en Chile.
 						</p>
 						<p class="text-right text-justify">D.V.U. ADITIVOS Y PINTURAS ha tenido como misión el producir y comercializar productos innovadores de alta calidad para pintar, reparar, mejorar y decorar tus proyectos.
						</p>





 					</div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4">
					<h3 class="franja1">PROYECTOS
					<a href="./proyectos.php">
						<img width="100%" src="./images/proyectos.png">
					</a>
					</h3>
				</div>
				<div class="col-md-4">
					<h3 class="franja2">CATÁLOGO
					<a href="./productos.php">
						<img width="100%" src="./images/catalogo.png">
					</a>
					</h3>
				</div>
				<div class="col-md-4">
					<h3 class="franja3">TEXTURAS
					<a href="./texturas.php">
						<img width="100%" src="./images/texturas.png">
					</a>
					</h3>
				</div>
			</div>
		</div>
					<?php include("./include/footer.php");?>
</body>
</html>