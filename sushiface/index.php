<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SushiFace - Inicio</title>
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
					<div class="col-xs-6 col-sm-4 col-md-6">
							<img id="logo" src="./images/logo.png" alt="">
					</div>
					<div class="hidden-xs col-sm-8 col-md-6">
								<div class="menu text-right">
									<h2><em>Resto y Delivery</em></h2>
									<br>
									<h2>22 404 9367 <div class="ball">•</div> 22 904 8520</h2>
								</div>
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
		<div class="container-fluid">
			<div class="row">
				<ul class="slider">
 						 <li><img src="./images/s_1.jpg"/></li>
 						 <li><img src="./images/s_2.jpg"/></li>
 						 <li><img src="./images/s_3.jpg"/></li>
 						 <li><img src="./images/s_4.jpg"/></li>
 						 <li><img src="./images/s_5.jpg"/></li>
 						 <li><img src="./images/s_6.jpg"/></li>
 						 <li><img src="./images/s_7.jpg"/></li>
 						 <li><img src="./images/s_8.jpg"/></li>
 						 <li><img src="./images/s_9.jpg"/></li>
 						 <li><img src="./images/s_10.jpg"/></li>
					</ul>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-6">
					<a href="./promociones.php">
						<h1 class="franja1">PROMOCIONES</h1>
					</a>
				</div>
				<div class="col-md-6">
					<a href="./menu.php">
						<h1 class="franja2">MENÚ</h1>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<h1><em>...Trabajamos para Tí !!!</em></h1>
					<br>
					<p>Manuel Antonio Matta 640 Quilicura, Región Metropolitana, Chile</p>
					<h2><strong>22 404 9367 - 22 904 8520</strong></h2>
					<p>
						<a href="mailto:sescobar@sushifacequilicura.cl" target="_blank">sescobar@sushifacequilicura.cl</a>
						- <a href="mailto:contacto@sushifacequilicura.cl" target="_blank">contacto@sushifacequilicura.cl</a>
					</p>
					<p>Asi se paga hoy RED COMPRA</p>
				</div>
			</div>
		</div>
			<?php include("./include/footer.php");?>
</body>
</html>