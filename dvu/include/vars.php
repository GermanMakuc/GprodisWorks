<?php 


$pro_l = 0;
$pro_e = 0;
$pro_t = 0;
$pro_p = 0;
$pro_s = 0;

$latex = array(
	'LÁTEX BASE CONSTRUCTORA DVU' => 0,
	'LÁTEX ACRILICO TERMINACION DVU' => 0,
	'LÁTEX EXTRA DVU' => 0,
	'LÁTEX HIDROFUGO DVU' => 0, 
	'LÁTEX ELASTICO DVU' => 0,
	'LÁTEX BASE DECOMURAL DVU' => 0,
	'LÁTEX HIDROLAVABLE DVU' => 0 
	);

$esmalte = array(
	'ESMALTE AL AGUA SEMIBRILLO DVU' => 0,
	'ESMALTE SATINADO DVU' => 0,
	'ESMALTE BRILLANTE DVU' => 0,
	'ESMALTE AL AGUA EXTRA SEMIBRILLO DVU' => 0
	);

$texturas = array(
	'DVULINA STANDARD DVU' => 0,
	'DVULINA ELASTOAMERICA DVU' => 0,
	'DVULINA ORGANICA DVU' => 0,
	'DVULINA HIDRORREPELENTE DVU' => 0,
	'TEXTURA GRANEADA EXTERIOR DVU' => 0,
	'TEXTURA GRANEADA INTERIOR DVU' => 0,
	'DVUTEX EXTERIOR' => 0,
	'DVUTEX INTERIOR' => 0,
	'REVESTIMIENTO REVEMUR DVU' => 0,
	'REVESTIMIENTO REVEMUR ELASTOAMERICO DVU' => 0
	);

$pastas = array(
	'PASTA MURO DVU' => 0,
	'PASTA MURO ESPECIAL BLANCA DVU' => 0,
	'PASTA CEMENTO DVU' => 0,
	'PASTA SECANTE YESO DVU' => 0,
	'PASTA ESTUCO DVU' => 0,
	'PASTA ESTUCO ELASTICA DVU' => 0,
	'PASTA TIPO LOSALIN CIELO BLANCO' => 0
	);

$sellos = array(
	'SELLADOR ACRILICO DVU' => 0,
	'SELLADOR Z.H MORTERO DVU' => 0,
	'ADHERENTE YESO DVU' => 0,
	'ADHERENTE TEXTURA DVU' => 0,
	'IMPEARMEABILIZANTE PARA ENCHAPE DVU' => 0,
	'IMPRIMANTE LADRILLO DVU' => 0,
	'IMPEARMEABILIZANTE PARA MADERA DVU' => 0,
	'ADITIVO ESTUCO DVU' => 0,
	'IMPEARMEABILIZANTE Q.H.C DVU' => 0,
	'SELLADOR DE CAL DVU' => 0,
	'ANTICORROSIVO AL AGUA DVU' => 0
	);

foreach ($latex as $l => $l_value) {
	$pro_l++;
	$latex[$l] = $pro_l;
}
foreach ($esmalte as $e => $e_value) {
	$pro_e++;
	$esmalte[$e] = $pro_e;
}
foreach ($texturas as $t => $t_value) {
	$pro_t++;
	$texturas[$t] = $pro_t;
}
foreach ($pastas as $p => $p_value) {
	$pro_p++;
	$pastas[$p] = $pro_p;
}
foreach ($sellos as $s => $s_value) {
	$pro_s++;
	$sellos[$s] = $pro_s;
}
?>