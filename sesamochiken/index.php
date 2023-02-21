<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SésamoChicken - Inicio</title>
	<?php include("./include/header.php");?>
</head>
<body>
	<style>
		h1,h2{
			padding: 0;
			margin: 0;
		}
	</style>
		<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 header1">
						<img id="logo" src="./images/logo.png" alt="">
								<div class="menu text-center">
									<?php include("./include/menu.php");?>
								</div>
					</div>
				
						<div class="menu_c col-xs-12 col-sm-12 col-md-12">
							<div class="text-center">
								<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-xs-2 col-sm-2 col-md-2">
									<h4><strong>COMBOS MENÚ</strong></h4>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<h4><strong>POLLOS CROCANTES</strong></h4>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<h4><strong>PAPAS FRITAS</strong></h4>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<h4><strong>EMPANADAS FRITAS</strong></h4>
								</div>
								<div class="col-xs-2 col-sm-2 col-md-2">
									<h4><strong>BEBIDAS</strong></h4>
								</div>
								
							</div>
						</div>
						<div class="menu_d col-xs-12 col-sm-12 col-md-12">
							<div class="text-center">
								<?php include("./include/p.php");?>
							</div>
						</div>
					</div>
			</div>
			<script>
$(document).ready(function(){

$('.slider').bxSlider({
  auto: true,
  pause: 7000,
  autoControls: false,
  controls: false
});

});
	</script>
		<div class="container">
			<div class="row">
				<div class="franja3 text-center">
					<ul class="slider">
 						 <li><img src="./images/slider_1.jpg"/></li>
 						 <li><img src="./images/slider_2.jpg"/></li>
					</ul>
				</div>
				<div class="franja1 text-center">
					<img src="./images/despacho.png" alt="" width="50%">
				</div>
				<div class="franja2 text-center">
					<img src="./images/sell.png" alt="" width="35%">
				</div>
			</div>
		</div>
		<div class="container">	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 footer">
					<div class="text-center">
							<?php include("./include/footer.php");?>
					</div>
				</div>
			</div>
		</div>
</body>
</html>