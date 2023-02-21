<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Flumec - Servicios</title>
	<?php include("./include/header.php");?>
</head>
<body>
	<div class="container-fluid header">
		 <div class="row">
       		 <div class="col-md-6">
          		<img id="logo" src="./images/logo.png" alt="">
       		 </div>
       		 <div class="col-md-6">
              	<img id="compo" class="pull-right" src="./images/compo.png" alt="">
             	 <?php include("./include/menu.php");?>
        	</div>
   		 </div>
	</div>

	<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  minSlides: 4,
  maxSlides: 4,
  slideWidth: 1500,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
});
});
	</script>
		<div class="container">
			<div class="row">
				<div class="services_bg">
					<h3 class="text_services">
						INSTALACIÓN EQUIPAMIENTO DE ALJIBES PRESURIZADOS Y CAMIONES LIMPIA FOSAS.
					</h3>
				</div>
				<ul class="bxslider">
 						 <li><img src="./images/01_ALJIBES.jpg"/></li>
 						 <li><img src="./images/02_ALJIBES.jpg"/></li>
 						 <li><img src="./images/03_ALJIBES.jpg"/></li>
 						 <li><img src="./images/04_ALJIBES.jpg"/></li>
 						 <li><img src="./images/05_ALJIBES.jpg"/></li>
 						 <li><img src="./images/06_ALJIBES.jpg"/></li>
 						 <li><img src="./images/07_ALJIBES.jpg"/></li>
 						 <li><img src="./images/08_ALJIBES.jpg"/></li>
 						 <li><img src="./images/09_ALJIBES.jpg"/></li>
 						 <li><img src="./images/10_ALJIBES.jpg"/></li>
					</ul>
			</div>
			<div class="row">
				<div class="services_bg">
					<h3 class="text_services">
						REPARACIÓN DE CILINDROS HIDRÁULICOS.
					</h3>
				</div>
				<ul class="bxslider">
 						 <li><img src="./images/01_CILINDROS.jpg"/></li>
 						 <li><img src="./images/02_CILINDROS.jpg"/></li>
 						 <li><img src="./images/03_CILINDROS.jpg"/></li>
 						 <li><img src="./images/04_CILINDROS.jpg"/></li>
					</ul>
			</div>
			<div class="row">
				<div class="services_bg">
					<h3 class="text_services">
						INSTALACIÓN DE KIT HIDRÁULICO COMPLETO PARA EL LEVANTES DE TOLVAS, BATEAS Y GRÚAS SOBRE CAMIÓN.
					</h3>
				</div>
				<ul class="bxslider">
 						 <li><img src="./images/01_TOLVAS.jpg"/></li>
 						 <li><img src="./images/02_TOLVAS.jpg"/></li>
 						 <li><img src="./images/03_TOLVAS.jpg"/></li>
 						 <li><img src="./images/04_TOLVAS.jpg"/></li>
 						 <li><img src="./images/05_TOLVAS.jpg"/></li>
 						 <li><img src="./images/06_TOLVAS.jpg"/></li>
					</ul>
			</div>
		</div>
		<div class="container">
			<?php include("./include/footer.php");?>
		</div>
</body>
</html>