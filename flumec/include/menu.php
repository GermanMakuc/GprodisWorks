
<?php include("./include/vars.php");?>
<!-- Single button -->
<div class="btn-group menu text-center">
  <a class="btn btn-link" href="./index.php">INICIO</a>
  <a class="btn btn-link" href="./empresa.php">EMPRESA</a>
  <a class="btn btn-link" href="./servicios.php">SERVICIOS</a>
  <a class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
    PRODUCTOS <span class="caret"></span>
  </a>
  <ul class="dropdown-menu dropdown-menu-right">
    <?php 
                        foreach ($productos as $p => $p_value) {
                          echo 
                          '<li>
                          <a href="./page.php?id='.$p_value.'">'.$p.'</a>
                          </li>';
                          if(end($productos) != $p_value)
                            echo '<hr>';
                        }
                    ?>
  </ul>
  <a class="btn btn-link" href="./contacto.php">CONTACTO</a>
</div>