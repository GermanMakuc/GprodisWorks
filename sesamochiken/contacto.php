<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>SésamoChicken - Contacto</title>
	<?php include("./include/header.php");?>
</head>
<body>
	<style>
		h1,h2{
			padding: 0;
			margin: 0;
		}
		label{
			color: white;
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
				<div class="col-xs-12 col-sm-12 col-md-12 bg_contact">
					<div class="col-md-6">
						<img src="./images/fono.png" alt="" width="400px">
						<h1 id="contacto" class="text-left" style="color:red;"><em><strong>Contacto</strong></em></h1>
						<div class="mascara">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3332.180293602862!2d-70.7253424848028!3d-33.36635878079815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c0d6af23c92b%3A0xe8c4c79023b47ea0!2sManuel+Antonio+Matta+805%2C+Quilicura%2C+Regi%C3%B3n+Metropolitana%2C+Chile!5e0!3m2!1ses-419!2s!4v1454522398635" width="100%" height="445" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div class="franja2 text-center">
						  	<h5 style="color:black;"><em><strong>HORARIO DE ATENCIÓN: Lunes a Domingo de 12:00 a 23:00 Hrs.</strong></em></h5>
						 </div>
					</div>
					<div class="col-md-6">
						<div class="mascara ajuste">
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
							<div class="text-right">
						  		<button type="submit" class="btn btn-link">Enviar</button>
						  		<div class="ball"><strong>|</strong></div>
						  		<button type="button" onclick="borrarF()" class="btn btn-link">Borrar</button>
						  </div>
						  </form>
						</div>
						
								<div class="franja2">
									<div class="col-xs-12 col-sm-12 col-md-12 franja2 text-center">
										<p class="bg-primary">Formato soportado: PDF Tamaño Máximo: 2MB</p>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 franja2 text-right">
										<h6 style="color:black;"><em><strong>Trabaja con nosotros</strong></em></h6>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 franja2">
									<form method="post" action="./get_file.php" enctype="multipart/form-data">
										<span class="btn btn-default btn-file">
    										Exáminar <input id="filead" name="filead" type="file" required>
										</span>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 franja2">
										<button type="submit" class="btn btn-default btn-send">Enviar</button>
									</div>
									</form>
						 		</div>
					</div>
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