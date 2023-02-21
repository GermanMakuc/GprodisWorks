<?php

include("./include/vars.php");

 if( $_GET["id"] >=1 && $_GET["id"] <= $pro)
   {
   		foreach ($productos as $p => $p_value) {
   			if($_GET["id"] == $p_value)
   				$nombre = $p;
   		}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SushiSésamo - <?php echo $nombre;?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
	<!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

</head>
<body>
		<script type="text/javascript">
			function imprSelec(muestra)
			{
				var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();
			}
	</script>
	<style>
		hr {border: 0; border-bottom: 1px dashed gray; }
		#muestra
		{
			height: auto;
			margin-top: -3%;
		}
		#content-4{
			height: 1730px;
		}
		.mas_orange
		{
			width: 100%;
		}
	</style>
		<div class="container">
				<div class="row header2">
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
						<div id="muestra" >
							<div id="<?php echo $_GET["id"];?>"><img src="./images/m_<?php echo $_GET["id"];?>.jpg" alt="" width="100%"></div>
						</div>
						<h5 id="text_orange" class="mas_orange text-right"><em>Todos los pedidos incluyen soya, jengibre, wasabi y palitos de acuerdo a pedido.</em></h5>
						<div class="text-right">
							<a class="btn btn-link" href="javascript:imprSelec('muestra')">Imprimir Carta</a>
							<div class="ball">|</div>
							<a class="btn btn-link" href="./contacto.php">Solicitar Menú</a>
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
															});
										


										})(jQuery);
			</script>
</body>
</html>

<?php
   }
   else
   {
   		echo "Producto no Registrado";
   }
?>













