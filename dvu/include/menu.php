<?php include("./include/vars.php");?>
<script>
  /*$(document).ready(function () {
    $('.dropdown-toggle').mouseover(function() {
        $('.dropdown-menu').show();
    })

    $('.dropdown-toggle').mouseout(function() {
        t = setTimeout(function() {
            $('.dropdown-menu').hide();
        }, 100);

        $('.dropdown-menu').on('mouseenter', function() {
            $('.dropdown-menu').show();
            clearTimeout(t);
        }).on('mouseleave', function() {
            $('.dropdown-menu').hide();
        })
    })
})*/
</script>
<a class="btn btn-link" href="./index.php">HOME</a>
<a class="btn btn-link" href="./quien.php">QUIENES SOMOS</a>
<!-- <a id="testF" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
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
  </ul> -->
<a class="btn btn-link" href="./productos.php">PRODUCTOS</a>
<a class="btn btn-link" href="./proyectos.php">PROYECTOS</a>
<a class="btn btn-link" href="./contacto.php">CONTACTO</a>