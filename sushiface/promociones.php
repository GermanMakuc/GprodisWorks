<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SushiFace - Promociones</title>
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
 						 <li><img src="./images/banner_promociones.png"/></li>
				</ul>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row text-center">
				<div class="">
						<h2 class="franja1">PROMOCIONES</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="./images/p_1.png" alt="" width="100%">
					<img src="./images/p_2.png" alt="" width="100%">
					<img src="./images/p_3.png" alt="" width="100%">
					<img src="./images/p_4.png" alt="" width="100%">
					<img src="./images/p_5.png" alt="" width="100%">
					<img src="./images/p_6.png" alt="" width="100%">
					<img src="./images/p_7.png" alt="" width="100%">
					<img src="./images/p_8.png" alt="" width="100%">
					<img src="./images/p_9.png" alt="" width="100%">
					<img src="./images/p_10.png" alt="" width="100%">
				</div>
				<h3 class="text-center"><em>Por $1.990 agrega un TORY TEMPURA (pollo, queso crema y cebollín).</em></h3>
				<h3 class="text-center"><em>1 por promoción.</em></h3>
			</div>
		</div>

			<?php include("./include/footer.php");?>
</body>
</html>