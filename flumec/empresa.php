<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Flumec - Empresa</title>
	<?php include("./include/header.php");?>
</head>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 2,
  slideWidth: 1500,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
});

});
	</script>
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
		<div class="container">
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 relleno_emp">
						<div class="col-md-6 text-center">
							<img id="logo_empresa" src="./images/logo_empresa.png" alt="">
						</div>
						<div class="col-md-6">
							<p class="text-justify"><strong>FLUMEC</strong> es una empresa chilena con 
								basta trayectoria en el mercado nacional. 
								Dedicada a la importación, venta, instalación y mantención de una variada
								gama de componentes y equipos hidráulicos. Además somos especialistas en
								dar soluciones Oleohidráulicas a equipos montados sobre camiones, tales como:
								Bateas, Compactadores de Basura, Hidro elevadores, Grúas de Rescate, Ampliroll,
								Grúas Pluma, camiones Limpia fosas, camiones Aljibe entre otros, para esto contamos
								con un completo servicio técnico en nuestro taller y un servicio móvil en ruta.</p>
							<p class="text-justify">
								El grupo de personas que conforman a <strong>FLUMEC</strong> trabaja en colaboración y conocimiento
								para dar soluciones e innovar día a día, obteniendo así un producto final de calidad
								y un servicio hacia el cliente de alto nivel y responsabilidad.
							</p>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="services_bg">
						<h3 class="text_services head_emp">
							NUESTRA EMPRESA <small style="color:white;">Un grupo de profesionales a su servicio.</small>
						</h3>
				</div>
			</div>
			<div class="row">
				<ul class="bxslider">
 						 <li><img src="./images/h_1.jpg"/></li>
 						 <li><img src="./images/h_2.jpg"/></li>
 						 <li><img src="./images/h_3.jpg"/></li>
 						 <li><img src="./images/h_4.jpg"/></li>
 						 <li><img src="./images/h_5.jpg"/></li>
 						 <li><img src="./images/h_6.jpg"/></li>
 						 <li><img src="./images/h_7.jpg"/></li>
 						 <li><img src="./images/h_8.jpg"/></li>
 						 <li><img src="./images/h_9.jpg"/></li>
 					     <li><img src="./images/h_10.jpg"/></li>
					</ul>
			</div>
		</div>
		<div class="container">
			<?php include("./include/footer.php");?>
		</div>
</body>
</html>