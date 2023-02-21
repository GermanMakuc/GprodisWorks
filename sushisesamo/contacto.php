
<?php


if(isset($_POST["name"])){

	$nombre = $_POST["name"]; 
	$tel = $_POST["telephone"]; 
	$email = $_POST["email"]; 
	$com = $_POST["comment"]; 

$mail = "
Nombre: $nombre <br>
Telefono: $tel <br>
E-Mail: $email <br>
Comentario: $com <br>
";

$titulo = "CONTACTO DESDE EL FORMULARIO WEB";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $nombre < $email >\r\n";

$bool = mail("jaruquipa@gmail.com",$titulo,$mail,$headers);
if($bool == true)
	$x = "El correo ha sido enviado satisfactoriamente a info@sushisesamo.cl, te responderemos a la brevedad posible.";
else
	$x = "El correo no pudo ser enviado, contáctese con el administrador."
?>


<?php
    }
    else
   		$x = "";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SushiSésamo - Contacto</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
	<!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" href="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">

</head>
<body>
	<style>
		hr {border: 0; border-bottom: 1px dashed gray; }
#content-4
{
	height: 1380px;
}
	</style>
		<div class="container">
				<div class="row header3">
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
				<div class="col-md-12 bodyE">
					<div class="col-md-4 hidden-xs hidden-sm">
						<?php include("./include/product.php");?>
					</div>
					<script type="text/javascript">
						function borrarF() {
							document.forms["formulario1"]["nombre"].value = "";
							document.forms["formulario1"]["telefono"].value = "";
							document.forms["formulario1"]["email"].value = "";
							document.forms["formulario1"]["comentario"].value = "";
							document.getElementById("nombre").focus();
						}
					</script>
					<div class="col-md-8 box-right relleno_c">
						<img src="./images/c_1.png" alt="">
						<div class="contact1">
							<form role="form" name="formulario1" method="post" action="./contacto.php">
							<div class="form-group">
  							  <label for="name">Nombre</label>
    							<input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre" required>
  							</div>
  							<div class="form-group">
  							  <label for="name">Teléfono</label>
    							<input type="text" class="form-control" id="telefono" name="telephone" placeholder="Teléfono" required>
  							</div>
							<div class="form-group">
  							  <label for="email">Correo</label>
    							<input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
  							</div>
  							<div class="form-group">
  								<label for="comment">Comentario</label>
  									<textarea class="form-control" rows="5" id="comentario" name="comment" required></textarea>
							</div>
							<div class="text-center">
									<p class="bg-primary">Antes cualquier duda o inquietud, no dude en contactarse con nosotros info@sushisesamo.cl</p>
								</div>
							<div class="text-center">
								<p class="bg-primary"><?php echo $x?></p>
							</div>
							<div class="text-right">
						  		<button type="submit" class="btn btn-link">Enviar</button>
						  		<div class="ball"><strong>|</strong></div>
						  		<button type="button" onclick="borrarF()" class="btn btn-link">Borrar</button>
						  </div>
						  </form>
						</div>
						<div class="col-md-12 contact1 text-center">
							<img src="./images/S.png" alt="" width="30%">
							<h5>TRABAJA CON NOSOTROS</h5>
							<h5>Adjuntar Curriculum</h5>
								<form method="post" action="./get_file.php" enctype="multipart/form-data">
									<div class="form-group">
										<div class="text-center">
											<p class="bg-primary">Formato soportado: PDF Tamaño Máximo: 2MB</p>
										</div>
										<span class="btn btn-default btn-file">
    										Exáminar <input id="filead" name="filead" type="file" required>
										</span>
									</div>
						  				<button type="submit" class="btn btn-link">Enviar</button>
						  		</form>
						</div>
						<div class="col-md-12">
							<img id="contact2" src="./images/c_2.png" alt="">
						</div>
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d833.1263526113233!2d-70.73172037079716!3d-33.35786887863894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0c5b684ff93%3A0x7ee3651cefc83416!2sLo+Marcoleta+261%2C+Quilicura%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1447771347947" width="105%" height="250" frameborder="0" style="border:0" allowfullscreen>
								
							</iframe>
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