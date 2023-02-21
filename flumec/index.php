<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Flumec - Inicio</title>
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
  minSlides: 2,
  maxSlides: 2,
  slideWidth: 1500,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
});

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
					<ul class="slider">
 						 <li><img src="./images/sh_1.jpg"/></li>
 						 <li><img src="./images/sh_2.jpg"/></li>
 						 <li><img src="./images/sh_3.jpg"/></li>
 						 <li><img src="./images/sh_4.jpg"/></li>
					</ul>
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