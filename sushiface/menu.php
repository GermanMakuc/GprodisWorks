<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SushiFace - Menú</title>
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
 						 <li><img src="./images/m_s1.png"/></li>
 						 <li><img src="./images/m_s2.png"/></li>
 						 <li><img src="./images/m_s3.png"/></li>
				</ul>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row text-center">
				<div class="">
						<h2 class="franja2">CARTA MENÚ</h2>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<img src="./images/m_1.png" alt="" width="100%">
					<img src="./images/m_2.png" alt="" width="100%">
					<img src="./images/m_3.png" alt="" width="100%">
					<img src="./images/m_4.png" alt="" width="100%">
					<img src="./images/m_5.png" alt="" width="100%">
					<img src="./images/m_6.png" alt="" width="100%">
					<img src="./images/m_7.png" alt="" width="100%">
					<img src="./images/m_8.png" alt="" width="100%">
					<img src="./images/m_9.png" alt="" width="100%">
					<img src="./images/m_10.png" alt="" width="100%">
				</div>
			</div>
		</div>

			<?php include("./include/footer.php");?>
</body>
</html>