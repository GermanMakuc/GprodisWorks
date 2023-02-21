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
		<div class="container">
			<div class="col-md-12 header">
				<div class="row">
						<div class="col-md-5 header">
								<h1 class="relleno_form text-center" style="color: white;">PRODUCTOS</h1>
						</div>
						<nav class="col-md-7 trans-1" id="myScrollspy">
								<?php include("./include/menu.php");?>
						</nav>
					</div>
				</div>
			</div>
		<div class="container">
			<div class="row">
			<?php
					include("./include/vars.php");

					$sql = "SELECT id, nombre, des FROM productos";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						?>
						<div class="col-md-12">
						<?php
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					    		echo "<br>";
					    		?>
					    		<div id="section<?php echo $row["id"];?>">
					    			<img class="pull-left" width="50%" src="./images/p_<?php echo $row["id"];?>.png">
					    			 <h1 class="text-left"><?php echo $row["nombre"];?></h1>
					    			 <p class="text-justify text-left container"><?php echo $row["des"];?></p>
					    		</div>
					    		 <hr>
					    				       
					        <?php
					    }
					    ?>
					    </div>
					     <?php
					} else {
					    echo "0 results";
					}
					$conn->close();
			?>
			</div>
		</div>
					<?php include("./include/footer.php");?>
</body>
</html>