<?php
include("./include/vars.php");
?>
<nav class="navbar navbar-default" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" 
										data-toggle="collapse" data-target="#navegacion">
										<span class="sr-only">Mostrar Navegación</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="navegacion">
									<ul class="nav navbar-nav" role="tablist">
										<?php 
												foreach ($productos as $p => $p_value) {
													echo 
													'<li>
													<a class="btn btn-link" data-target="#navegacion" href="./page.php?id='.$p_value.'">'.$p.'</a>
													</li>';
													if(end($productos) != $p_value)
														echo '<li><div class="ball hidden-xs"><strong>•</strong></div></li>';
												}
										?>
									</ul>
								</div>
	</nav>