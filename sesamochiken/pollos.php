<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SésamoChicken - Pollos Crocantes</title>
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

$('.comida').bxSlider({
  minSlides: 1,
  maxSlides: 1,
  slideWidth: 1500,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
});
});
</script>
		
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 bg_product">
					<ul class="comida">
 						 <li><img src="./images/p_1.png"/></li>
 						 <li><img src="./images/p_2.png"/></li>
 						 <li><img src="./images/p_3.png"/></li>
 						 <li><img src="./images/p_4.png"/></li>
					</ul>
				</div>
			</div>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 product_relleno">
					<ul class="bxslider">
 						 <li><img src="./images/combo_1.png"/></li>
 						 <li><img src="./images/combo_2.png"/></li>
 						 <li><img src="./images/combo_3.png"/></li>
 						 <li><img src="./images/combo_4.png"/></li>
 						 <li><img src="./images/combo_5.png"/></li>
 						 <li><img src="./images/combo_6.png"/></li>
					</ul>
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