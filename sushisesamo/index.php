<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SushiSésamo - Inicio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="./css/responsiveslides.css">
</head>
<body>
		<div class="container">
				<div class="row header">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<img id="logo" src="./images/logo.png" alt="">
								<div class="menu text-center">
									<?php include("./include/menu.php");?>
								</div>
						<div class="col-xs-12 col-sm-12 col-md-12 menu_c text-menu text-center">
							<?php include("./include/navbar.php");?>
						</div>
					</div>
				</div>
	<script>
		$(function() {

			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto : true,
				nav : false,
				timeout : 7000
			});
		});
	</script>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<ul id="slider1">
							<li><img src="./images/slider_1.jpg" /></li>
							<li><img src="./images/slider_2.jpg" /></li>
							<li><img src="./images/slider_3.jpg" /></li>
							<li><img src="./images/slider_4.jpg" /></li>
					</ul>
				</div>
			</div>
			<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 box-center">
						<div class="col-md-6">
							<img id="phone" src="./images/telephone.png" alt="">
						</div>
						<div class="col-md-6">
							<a href="./carta.php"><img class="photos" src="./images/s_1.jpg" alt=""></a>
							<a href="./bar.php"><img class="photos" src="./images/s_2.jpg" alt=""></a>
						</div>
					</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 footer">
					<div class="text-center">
							<?php include("./include/footer.php");?>
					</div>
				</div>
			</div>
		</div>
		<div class="text-center">
		<script type="text/javascript" src="http://counter5.fcs.ovh/private/countertab.js?c=9534c4cd7c496c2d75eec1c7a4cf31b4">
		</script>
		</div>
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/responsiveslides.min.js"></script>
</body>
</html>