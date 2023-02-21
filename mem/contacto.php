<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<?php include("./include/header.php");?>
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
		<span class="go-top icon-arrow-up"></span>
	<style>
		h1,h2{
			padding: 0;
			margin: 0;
		}
		.slider > li > img{
			width: 100%;
		}
		img{
			margin-right: 2%;
		}
		li
		{
			list-style-type: none;
		}
	</style>
		<script>
$(document).ready(function(){
$('.slider').bxSlider({
  minSlides: 1,
  auto: true,
  pause: 7000,
  slideWidth: 1500,
  maxSlides: 1,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
});

});
	</script>
		<div class="container">
			<div class="col-md-12 header">
				<div class="row">
						<div class="col-md-5 header">
								<h1 class="relleno_form text-center" style="color: white;">SERVICIOS</h1>
						</div>
						<nav class="col-md-7 trans-1" id="myScrollspy">
								<ul class="btn-link">
									<li><a href="#">Text</a></li>
									<li><a href="#">Text</a></li>
									<li><a href="#">Text</a></li>
									<li><a href="#">Text</a></li>
									<li><a href="#">Text</a></li>
								</ul>
						</nav>
					</div>
				</div>
			</div>
		<div class="container">
			<div class="row">
 					<div class="col-md-12">
 						<ul class="slider">
 						 <li><img src="./images/s_1.png"/></li>
 						 <li><img src="./images/s_2.png"/></li>
 						 <li><img src="./images/s_3.png"/></li>
 						 <li><img src="./images/s_4.png"/></li>
 						 <li><img src="./images/s_5.png"/></li>
						</ul>
 					</div>
 			</div>
		</div>
					<?php include("./include/footer.php");?>
</body>
</html>