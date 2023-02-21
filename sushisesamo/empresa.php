<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SushiSésamo - Empresa</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
	<!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

</head>
<body>
	<style>
		hr {border: 0; border-bottom: 1px dashed gray; }
	</style>
		<div class="container">
				<div class="row header1">
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
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 bodyE">
					<div class="col-md-4 hidden-xs hidden-sm">
						<?php include("./include/product.php");?>
					</div>
					<div class="col-md-8 box-right">
						<div id="muestra">
						<img id="empresa" src="./images/empresa.png" alt="">
						<p class="resena lead text-justify">Con una visión moderna y una propuesta creativa en la cocina japonesa, Sushi Sésamo
							se inagura en Agosto 2001, estableciendo una conjución de los elementos escenciales de la cultura oriental con la sofisticación del occidente.
							En un ambiente minimalista, luminoso y moderno, crean una grata y acogedora atmósfera, completamente con la calidez de nuestra atención y la exclusividad de nuestros platos, han hecho de Sushi Sésamo un lugar único.
							Desde entonces ha seguido creciendo transformándose con una amplia carta y pensando siempre en nuestros clientes, destacamos nuestros tres servicios para su mayor comodidad, como servicio en nuestro restaurante, retiro en el local y servicio de despacho a domicilio (Delivery).
							En Sushi Sésamo el servicio y la satisfacción al cliente es lo primero, siendo esta nuestra filosofía, nos interesa mucho su opinión.</p> 

							<h3 class="text-error">MISIÓN</h3>
							<p class="resena lead text-justify">
								Deleitar a nuestros clientes con el mejor y más sabroso SUSHI, elaborado con los mejores ingredientes y productos de calidad.
							</p>
							<h3 class="text-error">VISIÓN</h3>
							<p class="resena lead text-justify">
								Ser el restaurante especializado en cocina japonesa, toques mediterráneos y nikkei en el país. Con mayor presencia y siendo reconocida por nuestra calidad y cultura de servicio.
							</p>
							<h3 class="text-error">NUESTROS VALORES</h3>
							<p class="resena lead text-justify">
								El cliente es lo más importante: Priorizamos las necesidades de nuestros clientes ante cualquier situación, intentando siempre brindarle máxima satisfacción.
							</p>
							<h3 class="text-error">CALIDAD ES NUESTRA RECETA</h3>
							<p class="resena lead text-justify">
								Creemos que brindar la mayor calidad en nuestros productos, servicio y trabajadores es la mejor receta.
							</p>
							<h3 class="text-error">LIMPIEZA</h3>
							<p class="resena lead text-justify">
								Cumplimos con un estricto control de aseo e higiene que garantiza a nuestros clientes el adecuado manejo de los alimentos y del establecimiento.
							</p>
							<h3 class="text-error">CRECIMIENTO DESDE ADENTRO</h3>
							<p class="resena lead text-justify">
								En Sushi Sésamo sabemos que el éxito de nuestra empresa depende del éxito de nuestros trabajadores, es por eso que incentivamos constantemente el crecimiento profesional y las promociones internas.
							</p>
							<h3 class="text-error">RESPETO</h3>
							<p class="resena lead text-justify">
								Creemos que a través del respeto, se fortalecen las relaciones interpersonales, nuestro equipo de trabajo y la satisfacción de nuestros clientes.
							</p>
							<h3 class="text-error">ACCIONAR DE MANERA CORRECTA</h3>
							<p class="resena lead text-justify">
								Inculcamos constantemente a nuestros compañeros de trabajo a siempre accionar correctamente y de buena fe.
							</p>
							<h3 class="text-error">ORGULLO</h3>
							<p class="resena lead text-justify">
								En Sushi Sésamo somos todos orgullosos de lo que hacemos y de la familia que conformamos.
							</p>
						</div>
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
	<!-- Google CDN jQuery with fallback to local -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
	<script src="./js/bootstrap.min.js"></script>
	<!-- custom scrollbar plugin (latest version) via Github with fallback to local -->
	<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script>window.mCustomScrollbar || document.write('<script src="../jquery.mCustomScrollbar.concat.min.js"><\/script>')</script>
	<script>
				(
										function($) {
											$(window)
													.load(
															function() {

																/* all available option parameters with their default values */
																$("#content-4")
																		.mCustomScrollbar(
																				{
																					setWidth : false,
																					setHeight : false,
																					setTop : 0,
																					setLeft : 0,
																					axis : "y",
																					scrollbarPosition : "inside",
																					scrollInertia : 950,
																					autoDraggerLength : true,
																					autoHideScrollbar : false,
																					autoExpandScrollbar : false,
																					alwaysShowScrollbar : 0,
																					snapAmount : null,
																					snapOffset : 0,
																					mouseWheel : {
																						enable : true,
																						scrollAmount : "auto",
																						axis : "y",
																						preventDefault : false,
																						deltaFactor : "auto",
																						normalizeDelta : false,
																						invert : false,
																						disableOver : [
																								"select",
																								"option",
																								"keygen",
																								"datalist",
																								"textarea" ]
																					},
																					scrollButtons : {
																						enable : false,
																						scrollType : "stepless",
																						scrollAmount : "auto"
																					},
																					keyboard : {
																						enable : true,
																						scrollType : "stepless",
																						scrollAmount : "auto"
																					},
																					contentTouchScroll : 25,
																					advanced : {
																						autoExpandHorizontalScroll : false,
																						autoScrollOnFocus : "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
																						updateOnContentResize : true,
																						updateOnImageLoad : true,
																						updateOnSelectorChange : false,
																						releaseDraggableSelectors : false
																					},
																					theme:"3d-thick",
																					callbacks : {
																						onInit : false,
																						onScrollStart : false,
																						onScroll : false,
																						onTotalScroll : false,
																						onTotalScrollBack : false,
																						whileScrolling : false,
																						onTotalScrollOffset : 0,
																						onTotalScrollBackOffset : 0,
																						alwaysTriggerOffsets : true,
																						onOverflowY : false,
																						onOverflowX : false,
																						onOverflowYNone : false,
																						onOverflowXNone : false
																					},
																					live : false,
																					liveSelector : null
																				});
$("#muestra")
																		.mCustomScrollbar(
																				{
																					setWidth : false,
																					setHeight : false,
																					setTop : 0,
																					setLeft : 0,
																					axis : "y",
																					scrollbarPosition : "outside",
																					scrollInertia : 950,
																					autoDraggerLength : true,
																					autoHideScrollbar : false,
																					autoExpandScrollbar : false,
																					alwaysShowScrollbar : 0,
																					snapAmount : null,
																					snapOffset : 0,
																					mouseWheel : {
																						enable : true,
																						scrollAmount : "auto",
																						axis : "y",
																						preventDefault : false,
																						deltaFactor : "auto",
																						normalizeDelta : false,
																						invert : false,
																						disableOver : [
																								"select",
																								"option",
																								"keygen",
																								"datalist",
																								"textarea" ]
																					},
																					scrollButtons : {
																						enable : false,
																						scrollType : "stepless",
																						scrollAmount : "auto"
																					},
																					keyboard : {
																						enable : true,
																						scrollType : "stepless",
																						scrollAmount : "auto"
																					},
																					contentTouchScroll : 25,
																					advanced : {
																						autoExpandHorizontalScroll : false,
																						autoScrollOnFocus : "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
																						updateOnContentResize : true,
																						updateOnImageLoad : true,
																						updateOnSelectorChange : false,
																						releaseDraggableSelectors : false
																					},
																					theme:"3d-thick",
																					callbacks : {
																						onInit : false,
																						onScrollStart : false,
																						onScroll : false,
																						onTotalScroll : false,
																						onTotalScrollBack : false,
																						whileScrolling : false,
																						onTotalScrollOffset : 0,
																						onTotalScrollBackOffset : 0,
																						alwaysTriggerOffsets : true,
																						onOverflowY : false,
																						onOverflowX : false,
																						onOverflowYNone : false,
																						onOverflowXNone : false
																					},
																					live : false,
																					liveSelector : null
																				});

															});
										})(jQuery);
			</script>
</body>
</html>