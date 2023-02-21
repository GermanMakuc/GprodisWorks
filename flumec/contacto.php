<?php


if(isset($_POST["name"])){

	$nombre = $_POST["name"]; 
	$tel = $_POST["telephone"]; 
	$email = $_POST["email"]; 
	$com = $_POST["comment"]; 

$mail = "
Nombre: $nombre <br>
Fono: $tel <br>
E-Mail: $email <br>
Asunto: $com <br>
";

$titulo = "CONTACTO DESDE EL FORMULARIO WEB";
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$headers .= "From: $nombre < $email >\r\n";

$bool = mail("psaavedra@flumec.cl",$titulo,$mail,$headers);
if($bool == true)
	$x = "El correo ha sido enviado satisfactoriamente a psaavedra@flumec.cl, te responderemos a la brevedad posible.";
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
	<title>Flumec - Contacto</title>
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

$('.slider').bxSlider({
  auto: true,
  pause: 7000,
  autoControls: false,
  controls: false
});

});
	</script>
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
					<ul class="slider">
 						 <li><img src="./images/cs_1.jpg"/></li>
 						 <li><img src="./images/cs_2.jpg"/></li>
					</ul>
					<div class="col-xs-12 col-sm-12 col-md-12 mascara">
						<div class="col-md-6">
							<iframe 
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.0615093738147!2d-70.69963168480076!3d-33.44770398077468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c466cd9f0111%3A0xd32bbf7fff03c45a!2sPorto+Seguro+4596%2C+Quinta+Normal%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1ses-419!2s!4v1449116437659" 
							width="100%" height="260" frameborder="0" style="border:0" allowfullscreen>
								
							</iframe>
						</div>
						<div class="col-md-6">
							<form role="form" name="formulario1" method="post" action="./contacto.php">
							<div class="form-group">
    							<input type="text" class="form-control" id="nombre" name="name" placeholder="NOMBRE" required>
  							</div>
							<div class="form-group">
    							<input type="email" class="form-control" id="email" name="email" placeholder="E-MAIL" required>
  							</div>
  							<div class="form-group">
    							<input type="text" class="form-control" id="telefono" name="telephone" placeholder="FONO" required>
  							</div>
  							<div class="form-group">
  									<textarea class="form-control" placeholder="ASUNTO" rows="5" id="comentario" name="comment" required></textarea>
							</div>
							<div class="text-center">
								<p class="bg-primary"><?php echo $x?></p>
							</div>
							<div class="text-right">
						  		<button type="submit" class="btn btn-link">ENVIAR</button>
						  		<div class="ball"><strong>|</strong></div>
						  		<button type="button" onclick="borrarF()" class="btn btn-link">BORRAR</button>
						  </div>
						  </form>
						</div>
					</div>
			</div>
		</div>
		<div class="container">
			<?php include("./include/footer.php");?>
		</div>
</body>
</html>