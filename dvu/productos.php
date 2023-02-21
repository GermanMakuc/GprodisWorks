<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D.V.U - Productos</title>
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
				<div class="col-xs-12 col-sm-12 col-md-12 fondo">
 					<div class="col-md-6">
 						<img width="100%" src="./images/p1.png">
 					</div>
 					<div class="col-md-6 text-left">
	 					<h3 style="color: black;"><strong>PRODUCTOS</strong></h3>
	 					<h4 style="color: black;"><strong>PINTURA LATEX HIDROLAVABLE DVU</strong></h4>
	 					<p>Terminación Mate</p>
	 					<p>Mayor Durabilidad al Flote</p>
	 					<p>Lavable y Desmanchable</p>
	 					<a class="btn btn-default" href="./page.php?id=7&c=l">VER FICHA TECNICA</a>
 					</div>
 					<div class="col-md-6 text-left">
	 					<h4 style="color: black;"><strong>REVESTIMIENTO REVEMUR DVU</strong></h4>
	 					<p>Fácil de Aplicar</p>
	 					<p>En Hormigón no Requiere Maquillaje</p>
	 					<p>Diferentes texturados tipo martelina</p>
	 					<a class="btn btn-default" href="./page.php?id=9&c=t">VER FICHA TECNICA</a>
 					</div>
 				</div>
			</div>
		</div>
		<div class="container trans-2">
			<div class="row">
			<div class="col-md-12">
 					<div class="col-md-4">
 					<h3 class="text-left" style="color: white;">LATEX</h3>
 					<hr>
 					<?php 
 						 foreach ($latex as $l => $l_value) {
                          echo '<a class="btn btn-link boton-list" href="./page.php?id='.$l_value.'&c=l">'.$l.'</a>';
                        }
 					 ?>
 					</div>
 				
 					<div class="col-md-4">
 					<h3 class="text-left" style="color: white;">ESMALTE</h3>
 					<hr>
 						<?php 
 						 foreach ($esmalte as $e => $e_value) {
                          echo '<a class="btn btn-link boton-list" href="./page.php?id='.$e_value.'&c=e">'.$e.'</a>';
                        }
 					 ?>
 					</div>
 				
 					<div class="col-md-4">
 					<h3 class="text-left" style="color: white;">TEXTURAS</h3>
 					<hr>
 						<?php 
 						 foreach ($texturas as $t => $t_value) {
                          echo '<a class="btn btn-link boton-list" href="./page.php?id='.$t_value.'&c=t">'.$t.'</a>';
                        }
 					 ?>
 					</div>
 			</div>
			</div>
			<div class="row">
			<div class="col-md-12">
				<div class="col-md-4">
 					<h3 class="text-left" style="color: white;">PASTAS</h3>
 					<hr>
 						<?php 
 						 foreach ($pastas as $p => $p_value) {
                          echo '<a class="btn btn-link boton-list" href="./page.php?id='.$p_value.'&c=p">'.$p.'</a>';
                        }
 					 ?>
 				</div>
 				<div class="col-md-4">
 					<h3 class="text-left" style="color: white;">SELLOS E IMPEARMEABILIZANTE</h3>
 					<hr>
 						<?php 
 						 foreach ($sellos as $s => $s_value) {
                          echo '<a class="btn btn-link boton-list" href="./page.php?id='.$s_value.'&c=s">'.$s.'</a>';
                        }
 					 ?>
 				</div>
 				<div class="col-md-4">
 					<img class="text-center" width="100%" src="./images/p1.png">
 				</div>
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