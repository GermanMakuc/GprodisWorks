<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SushiFace - Empresa</title>
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
		<div class="container relleno_text">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="text-right">
						<h1 id="titulo">Empresa</h1>
					</div>
 						<img src="./images/m_s2.png" alt="" width="100%">
				</div>
			</div>
		</div>
		<div class="container relleno_text">
			<div class="row">
				<div class="col-md-4">
					<h2 class="">
						... "Un servicio integral de manera de que los clientes queden muy satisfechos" ...
					</h2>
				</div>
				<div class="col-md-8">
					<p class="text-justify">
						SUSHI FACE Quilicura, empresa de comida Japonesa Resto y Delivery, nacida el 14 de Febrero del 2015, en la comuna de Quilicura.
						Somos un equipo de trabajo profesional joven, entusiasta y dedicados a nuestra labor. Brindamos un producto de calidad a todos nuestros clientes, y así hacer crecer en cadena nuestros locales para ser reconocidos en la región , nuestra filosofía de trabajo se orienta en 
						que nuestros chef crean sabores exóticos, atractivos y sabrosos para 
						invitar a usted y familia a degustar de un producto único y especial.
					</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12">
					<br>
					<p>Manuel Antonio Matta 640 Quilicura, Región Metropolitana, Chile - Fonos: 22 404 9367 - 22 904 8520</p>
					<p>
						<a href="mailto:sescobar@sushifacequilicura.cl" target="_blank">sescobar@sushifacequilicura.cl</a>
						- <a href="mailto:contacto@sushifacequilicura.cl" target="_blank">contacto@sushifacequilicura.cl</a>
					</p>
				</div>
			</div>
		</div>
			<?php include("./include/footer.php");?>
</body>
</html>