<?php 


$pro = 0;

$productos = array(

	'TOMAS DE FUERZA' => 0,
	'BOMBAS DE ENGRANAJES' => 0,
	'BOMBAS DE PISTONES' => 0,
	'MOTORES HIDRÁULICOS' => 0, 
	'VÁLVULAS REGULADORAS' => 0,
	'COMANDOS HIDRÁULICOS' => 0,
    'DEPÓSITOS Y CILINDROS' => 0,
    'ACEITES Y LUBRICANTES' => 0    
	);

foreach ($productos as $p => $p_value) {
	$pro++;
	$productos[$p] = $pro;
}

?>