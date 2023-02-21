<?php 


$pro = 0;

$bar = array( 
    'Bebidas' => 1, 
    'Pisco Sour' => 1,
    'Cervezas' => 1,
    'Tragos Largos' => 1,
    'Digestivos' => 1,
    'Vinos Blancos' => 1,
    'Vinos Tintos' => 1,
    'Licores' => 1
    );

$productos = array(

	'Entradas' => 0,
	'Ceviches' => 0, 
	'Especial Rolls' => 0, 
	'Crispy Rolls' => 0, 
	'Tempura Rolls' => 0,
    'Nikkei Rolls' => 0,
    'Deli Rolls' => 0, 
    'Combinaciones' => 0,
    'Platos de Fondo' => 0, 
    'Tiraditos' => 0, 
    'Temaki' => 0,
    'Hosomaki' => 0,
    'Sashimi' => 0, 
    'Nigiri' => 0,
    'Postres' => 0,
    'Café-Té' => 0, 
    'Nuestras Salsas' => 0, 
    'Bebidas' => 1, 
    'Pisco Sour' => 1,
    'Cervezas' => 1,
    'Tragos Largos' => 1,
    'Digestivos' => 1,
    'Vinos Blancos' => 1,
    'Vinos Tintos' => 1,
    'Licores' => 1

	);

foreach ($productos as $p => $p_value) {
	$pro++;
	$productos[$p] = $pro;
        if($pro > 17 && $pro <= 25)
            $bar[$p] = $pro;
}

?>