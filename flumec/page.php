<?php

include("./include/vars.php");

 if( $_GET["id"] >=1 && $_GET["id"] <= $pro)
   {
   		foreach ($productos as $p => $p_value) {
   			if($_GET["id"] == $p_value)
   				$nombre = $p;
   		}
$titulo = mb_convert_case($nombre, MB_CASE_TITLE, "UTF-8");
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Flumec - <?php echo $titulo;?></title>
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
  $('.bxslider').bxSlider({
  minSlides: 2,
  maxSlides: 2,
  slideWidth: 1500,
  slideMargin: 10,
  infiniteLoop: false,
  hideControlOnEnd: true
});
});
   </script>
      <div class="container">
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
               <?php if($nombre == 'TOMAS DE FUERZA'){?>
                   <img id="slider" src="./images/banner_toma.jpg" alt="">
               <?php }?>
               <?php if($nombre == 'MOTORES HIDRÁULICOS'){?>
                   <img id="slider" src="./images/banner_motor_hidraulico.jpg" alt="">
               <?php }?>
               <?php if($nombre == 'COMANDOS HIDRÁULICOS'){?>
                   <img id="slider" src="./images/banner_comando.jpg" alt="">
               <?php }?>
                <?php if($nombre == 'BOMBAS DE ENGRANAJES'){?>
                   <img id="slider" src="./images/banner_bombaE.jpg" alt="">
               <?php }?>
               <?php if($nombre == 'BOMBAS DE PISTONES'){?>
                   <img id="slider" src="./images/banner_bombaP.jpg" alt="">
               <?php }?>
               <?php if($nombre == 'VÁLVULAS REGULADORAS'){?>
                   <img id="slider" src="./images/banner_val.jpg" alt="">
               <?php }?>
               <?php if($nombre == 'DEPÓSITOS Y CILINDROS'){?>
                   <img id="slider" src="./images/banner_dep.jpg" alt="">
               <?php }?>
               <?php if($nombre == 'ACEITES Y LUBRICANTES'){?>
                   <img id="slider" src="./images/banner_ace.jpg" alt="">
               <?php }?>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <ul class="bxslider">
               <?php if($nombre == 'TOMAS DE FUERZA'){?>
                   <li><img src="./images/toma_1.jpg"/></li>
                   <li><img src="./images/toma_2.jpg"/></li>
                   <li><img src="./images/toma_3.jpg"/></li>
                   <li><img src="./images/toma_4.jpg"/></li>
                   <li><img src="./images/toma_5.jpg"/></li>
                   <li><img src="./images/toma_6.jpg"/></li>
                   <li><img src="./images/toma_7.jpg"/></li>
                   <li><img src="./images/toma_8.jpg"/></li>
                   <li><img src="./images/toma_9.jpg"/></li>
               <?php }?>
               <?php if($nombre == 'MOTORES HIDRÁULICOS'){?>
                   <li><img src="./images/motorH_1.jpg"/></li>
                   <li><img src="./images/motorH_2.jpg"/></li>
                   <li><img src="./images/motorH_3.jpg"/></li>
                   <li><img src="./images/motorH_4.jpg"/></li>
               <?php }?>
               <?php if($nombre == 'COMANDOS HIDRÁULICOS'){?>
                   <li><img src="./images/comando_1.jpg"/></li>
                   <li><img src="./images/comando_2.jpg"/></li>
                   <li><img src="./images/comando_3.jpg"/></li>
                   <li><img src="./images/comando_4.jpg"/></li>
               <?php }?>
               <?php if($nombre == 'BOMBAS DE ENGRANAJES'){?>
                   <li><img src="./images/bombaE_1.jpg"/></li>
                   <li><img src="./images/bombaE_2.jpg"/></li>
                   <li><img src="./images/bombaE_3.jpg"/></li>
                   <li><img src="./images/bombaE_4.jpg"/></li>
                   <li><img src="./images/bombaE_5.jpg"/></li>
                   <li><img src="./images/bombaE_6.jpg"/></li>
               <?php }?>
               <?php if($nombre == 'BOMBAS DE PISTONES'){?>
                   <li><img src="./images/bombaP_1.jpg"/></li>
                   <li><img src="./images/bombaP_2.jpg"/></li>
                   <li><img src="./images/bombaP_3.jpg"/></li>
                   <li><img src="./images/bombaP_4.jpg"/></li>
               <?php }?>
              <?php if($nombre == 'VÁLVULAS REGULADORAS'){?>
                   <li><img src="./images/val_1.jpg"/></li>
                   <li><img src="./images/val_2.jpg"/></li>
                   <li><img src="./images/val_3.jpg"/></li>
                   <li><img src="./images/val_4.jpg"/></li>
                   <li><img src="./images/val_5.jpg"/></li>
               <?php }?>
              <?php if($nombre == 'DEPÓSITOS Y CILINDROS'){?>
                   <li><img src="./images/dep_1.jpg"/></li>
                   <li><img src="./images/dep_2.jpg"/></li>
                   <li><img src="./images/dep_3.jpg"/></li>
                   <li><img src="./images/dep_4.jpg"/></li>
                   <li><img src="./images/dep_5.jpg"/></li>
               <?php }?>
               <?php if($nombre == 'ACEITES Y LUBRICANTES'){?>
                   <li><img src="./images/ace_1.jpg"/></li>
                   <li><img src="./images/ace_2.jpg"/></li>
                   <li><img src="./images/ace_3.jpg"/></li>
               <?php }?>
               </ul>
         </div>
      </div>
      <div class="container">
         <?php include("./include/footer.php");?>
      </div>
   
</body>
</html>





<?php
   }
   else
   {
   		echo "Producto no Registrado";
   }
?>