<?php



   //Copyright © McAnam.com 
   
	
if(isset($_FILES["filead"])){

$allowedMimes = array
( "application/msword" , "application/vnd.openxmlformats-officedocument.wordprocessingml.document" , "application/vnd.ms-word");

if (($_FILES["filead"]["type"] == "application/pdf")
|| ($_FILES["filead"]["type"] == "application/msword")
&& ($_FILES["filead"]["size"] <= 2000000)
&& in_array($_FILES["file"]["type"], $allowedMimes))
{

   function form_mail($sPara, $sAsunto, $sTexto, $sDe){
      
      $bHayFicheros = 0;
      $sCabeceraTexto = "";
      $sAdjuntos = "";
      
      if ($sDe)$sCabeceras = "From:".$sDe."\n"; else $sCabeceras = "";
      $sCabeceras .= "MIME-version: 1.0\n"; 

      foreach ($_POST as $sNombre => $sValor)
             $sTexto = $sTexto."\n".$sNombre." = ".$sValor; 
      
      foreach ($_FILES as $vAdjunto){
             
             if ($bHayFicheros == 0){
             
                $bHayFicheros = 1;
                
                $sCabeceras .= "Content-type: multipart/mixed;"; 
               $sCabeceras .= "boundary=\"--_Separador-de-mensajes_--\"\n";
               
               $sCabeceraTexto = "----_Separador-de-mensajes_--\n"; 
               $sCabeceraTexto .= "Content-type: text/plain;charset=iso-8859-1\n"; 
               $sCabeceraTexto .= "Content-transfer-encoding: 7BIT\n";
               
               $sTexto = $sCabeceraTexto.$sTexto;

             }
             

             if ($vAdjunto["size"] > 0){
                                
                $sAdjuntos .= "\n\n----_Separador-de-mensajes_--\n";
                $sAdjuntos .= "Content-type: ".$vAdjunto["type"].";name=\"".$vAdjunto["name"]."\"\n";;
               $sAdjuntos .= "Content-Transfer-Encoding: BASE64\n"; 
               $sAdjuntos .= "Content-disposition: attachment;filename=\"".$vAdjunto["name"]."\"\n\n";             
                
                $oFichero = fopen($vAdjunto["tmp_name"], 'r'); 
               $sContenido = fread($oFichero, filesize($vAdjunto["tmp_name"])); 
               $sAdjuntos .= chunk_split(base64_encode($sContenido));
               fclose($oFichero); 
             }
             
      }
      
      if ($bHayFicheros)
         $sTexto .= $sAdjuntos."\n\n----_Separador-de-mensajes_----\n"; 
       
      return(mail($sPara, $sAsunto, $sTexto, $sCabeceras));
   }
   $q = "El Archivo ha sido enviado satisfactoriamente.";
   //Ejemplo de como usar:
   if (
   	form_mail("jaruquipa@gmail.com", 
              "Envio Curriculum Desde Formulario Web", 
              "Los datos introducidos en el formulario son:\n\n",
              "no-responder-curri@sushisesamo.cl"
             )
      );
 }
  else
    $q = "Error de extensión en el archivo, o tamaño excedido a lo permitido inténtelo nuevamente.";
}
else
	$q = "Stand";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SushiSésamo - Cargando</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link rel="stylesheet" href="./css/style.css">
</head>
<style>
  body{
    background-image: none;
  }
</style>
<body>
  <?php 
echo "<script type='text/javascript'>alert('$q');window.location.href='./contacto.php';</script>";

?>
</body>
<!-- Google CDN jQuery with fallback to local -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../js/minified/jquery-1.11.0.min.js"><\/script>')</script>
  <script src="./js/bootstrap.min.js"></script>
  <!-- custom scrollbar plugin (latest version) via Github with fallback to local -->
  <script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
  <script>window.mCustomScrollbar || document.write('<script src="../jquery.mCustomScrollbar.concat.min.js"><\/script>')</script>
</html>
