<?php


if(isset($_POST["nombre"])){

	$x = 1;


	$nombre = $_POST["nombre"]; 
	$rut = $_POST["rut"];
	$giro = $_POST["giro"];
	$dir = $_POST["direccion"];
	$comuna = $_POST["comuna"]; 
	$email = $_POST["email"]; 
	$tel = $_POST["telefono"]; 
	$con = $_POST["contacto"]; 

$mail = "
Nombre: $nombre <br>
Rut: $rut <br>
Giro: $giro <br>
Direccion: $dir <br>
Comuna: $comuna <br>
E-Mail: $email <br>
Telefono: $tel <br>
Contacto: $con <br>
";
//Titulo
$titulo = "CONTACTO DESDE EL FORMULARIO WEB";
//cabecera
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
//dirección del remitente 
$headers .= "From: $nombre < $email >\r\n";
//Enviamos el mensaje a tu_dirección_email 
$bool = mail("contacto@cava-chile.cl",$titulo,$mail,$headers);

    }
    else
    	$x = 0;
?> 



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cava - Inicio</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/bootstrap.css">
	<link rel="stylesheet" href="./css/style.css">
</head>
<body>
	<audio src="./music/The_Engine_Room.mp3" autoplay loop></audio>
	
	<script>
	var angle = 0;
	setInterval(function(){
      angle+=1;
     $("#image").rotate(angle);
	},50);
	</script>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 header">
					<img class="text-left" src="./images/logo-01.png" id="image" width="12%">
					<img id="slogan" class="text-right" src="./images/text-01.png" width="60%">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 menu text-center">
					<a class="btn btn-default" href="./inicio.html" role="button">
						<strong>INICIO</strong>
					</a>
					<a class="btn btn-default" href="./kardex.html" role="button">
						<strong>KARDEX</strong>
					</a>
					<a class="btn btn-default" href="./armado.html" role="button">
						<strong>ARMADO</strong>
					</a>
					<a class="btn btn-default" href="./empresa.html" role="button">
						<strong>EMPRESA</strong>
					</a>
					<a class="btn btn-default" href="./contacto.html" role="button">
						<strong>CONTACTO</strong>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 box-center text-center">
					<div class="mascara text-muted">
						<?php
							if($x == 1 && $bool == true){
							    echo "<h3>El correo ha sido enviado, nos pondremos en contacto lo antes posible.</h3>";
							}else{
							    echo "<h3>El correo no ha sido enviado, contáctese con el administrador.</h3>";
							}
						?>
					</div>
				</div>
			</div>
			<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 box-buy text-right">
							<img src="./images/info-con.png" width="35%"/>
							<img src="./images/credito.png" width="15%"/>
						</div>
			</div>
		</div>
		<div class="container">
						<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 foot">
					<div class="text-center">
						<ul class="list-inline">
  							<li class="text-danger">
  								<strong>CAVA CHILE SPA</strong>
  							</li>
  							<li>
  								<strong>contacto@cava-chile.cl</strong>
  							</li>
  							<li>
  								<strong>Tel: 2293 66473</strong>
  							</li>
  							<li>
  									<img src="./images/Whatsapp_icon.png" />
  								<strong>Cel: +569 95498265</strong>
  							</li>
  							<li>
  								<a href="https://www.facebook.com/cavachilespa">
  									<img src="./images/facebook-icon.png" />
  								</a>
  								<strong>CAVA CHILE SPA</strong>
  							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/QueryRotateCompressed.js"></script>
	
</body>
</html>


