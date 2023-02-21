<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D.V.U - Texturas</title>
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
  minSlides: 2,
  auto: true,
  pause: 7000,
  slideWidth: 1500,
  maxSlides: 2,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
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
				<div class="col-xs-12 col-sm-12 col-md-12 fondo">
 					<div class="col-md-12">
 					<h1 style="color: black;">Texturas</h1>
 						<ul class="slider">
 						 <li><img src="./images/text_1.png"/></li>
 						 <li><img src="./images/text_2.png"/></li>
 						 <li><img src="./images/text_3.png"/></li>
 						 <li><img src="./images/text_4.png"/></li>
 						 <li><img src="./images/text_5.png"/></li>
 						 <li><img src="./images/text_6.png"/></li>
 						 <li><img src="./images/text_7.png"/></li>
						</ul>
 					</div>
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