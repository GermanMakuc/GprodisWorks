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

$bool = mail("contacto@sushifacequilicura.cl",$titulo,$mail,$headers);
if($bool == true)
	$x = "El correo ha sido enviado satisfactoriamente";
else
	$x = "El correo no pudo ser enviado, contáctese con el administrador."
?>


<?php
    }
    else
   		$x = "";
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SushiFace - Contacto</title>
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
		body{
				background-image: url("./images/background_c.jpg");
				background-repeat: no-repeat;
				background-size: cover;
			}
			a:hover,a:focus{text-decoration: none;}
			a[href^="mailto:"] {color: white;}
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
		<div class="container relleno_text1">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="text-right">
						<h1 id="titulo1">Contacto</h1>
					</div>
 					
				</div>
			</div>
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
		<div class="container">
			<div class="row">
				<div class="col-md-12 trans text-justify relleno_text">
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
								<p class="bg-primary"><?php echo $x?></p>
							</div>
							<div class="text-right">
						  		<button type="submit" class="btn btn-link">Enviar</button>
						  		<div class="ball"><strong>|</strong></div>
						  		<button type="button" onclick="borrarF()" class="btn btn-link">Borrar</button>
						  </div>
						  </form>
						</div>
				<div class="col-md-12 trans-1 text-center">
					<p>HORARIOS DE ATENCIÓN</p>
					<p>Lunes a Jueves 12:30 a 00:00 Hrs - Viernes y Sábados 12:30 a 01:00 Hrs.</p>
					<p>Domingos 12:30 a 17:00 - 18:30 a 00:00 Hrs</p>
					<p>Asi se paga hoy RED COMPRA</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 trans text-center relleno_text">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.202483781773!2d-70.7284225848029!3d-33.36577938079827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0d0d0e7f405%3A0xa5b9c2d5f04e22ab!2sManuel+Antonio+Matta+640%2C+Quilicura%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1ses-419!2s!4v1465606171298" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-12 trans-1 text-center">
					<p>Manuel Antonio Matta 640 Quilicura, Región Metropolitana, Chile - Fonos: 22 404 9367 - 22 904 8520</p>
					<p>
						<a href="mailto:sescobar@sushifacequilicura.cl" target="_blank">sescobar@sushifacequilicura.cl</a>
						- <a href="mailto:contacto@sushifacequilicura.cl" target="_blank">contacto@sushifacequilicura.cl</a>
					</p>
				</div>
			</div>
		</div>
			<?php include("./include/footer.php");?>
</body>
</html>