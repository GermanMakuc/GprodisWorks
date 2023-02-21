<?php


if(isset($_POST["name"])){

	$nombre = $_POST["name"]; 
	$empres = $_POST["empres"]; 
	$email = $_POST["email"]; 
	$com = $_POST["comment"]; 

$mail = "
Nombre: $nombre <br>
Empresa: $empres <br>
E-Mail: $email <br>
Comentario: $com <br>
";

$titulo = "CONTACTO DESDE EL FORMULARIO WEB";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $nombre < $email >\r\n";

$bool = mail("contacto@dvu.cl",$titulo,$mail,$headers);
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
	<title>D.V.U - Contacto</title>
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
	</style>
		<div class="container-fluid header1">
			<div class="container">
				<div class="row">
					<div class="col-xs-7 col-sm-5 col-md-5">
							<img width="70%" src="./images/logo.png" alt="">
					</div>
					<div class="hidden-xs col-sm-7 col-md-7">
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
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 alternativo relleno_text">
				<h1 style="color: white;">Contacto</h1>
 					<div class="col-md-12 trans relleno_form">
 						<form role="form" name="formulario1" method="post" action="./contacto.php">
							<div class="form-group">
  							  <label for="name">Nombre</label>
    							<input type="text" class="form-control" id="nombre" name="name" placeholder="Nombre" required>
  							</div>
  							<div class="form-group">
  							  <label for="emp">Empresa</label>
    							<input type="text" class="form-control" id="emp" name="empres" placeholder="Empresa" required>
  							</div>
							<div class="form-group">
  							  <label for="email">Correo</label>
    							<input type="email" class="form-control" id="email" name="email" placeholder="Correo" required>
  							</div>
  							<div class="form-group">
  								<label for="comment">Mensaje</label>
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
					<p>Fono: +562 29493405 - +569 64388177</p>
					<p>www.dvu.cl - contacto@dvu.cl</p>
					</div>
				<div class="col-md-12 trans">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3331.640374427484!2d-70.76959568520226!3d-33.38045368079406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c1aadbe02abf%3A0x247023488dd37229!2sAntillanca+Sur+611%2C+Pudahuel%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1479596100131" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
 				</div>
 				<div class="col-md-12 trans-1 text-center">
					<p>Calle Antillanca Sur 611, Bodega G Pudahuel, Santiago de Chile</p>
				</div>
 				</div>
		</div>
		<div class="container">
			<div class="row text-center">
				<div class="col-md-4">
					<h3 class="franja1">PROYECTOS
					<a href="./proyectos.php">
						<img width="100%" src="./images/proyectos.png">
					</a>
					</h3>
				</div>
				<div class="col-md-4">
					<h3 class="franja2">CATÁLOGO
					<a href="./productos.php">
						<img width="100%" src="./images/catalogo.png">
					</a>
					</h3>
				</div>
				<div class="col-md-4">
					<h3 class="franja3">TEXTURAS
					<a href="./texturas.php">
						<img width="100%" src="./images/texturas.png">
					</a>
					</h3>
				</div>
			</div>
		</div>
					<?php include("./include/footer.php");?>
</body>
</html>