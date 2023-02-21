<?php

include("./include/vars.php");

 if( $_GET["c"] == "l" || $_GET["c"] == "e" || $_GET["c"] == "t" || $_GET["c"] == "p" || $_GET["c"] == "s")
   {
   	$path="./images/".$_GET["c"]."_".$_GET["id"].".png";
   	$des="No agregado";
   	$rec="No agregado";
   	$seg="No agregado";
   	$pre="No agregado";
   	$nota="No agregado";
   	$nombre="No agregado";
// LATEX
   		if ($_GET["c"] == "l" && ($_GET["id"] >=1 && $_GET["id"] <= $pro_l)) 
   		{
   			foreach ($latex as $l => $l_value)
   			{
   				if($_GET["id"] == $l_value)
   				{
					$nombre = $l;
   				}
   			}
   			if($_GET["id"] == 1)
   			{
   				$des="Pintura preparada a base de resinas acrílicas de excelente resistencia a los álcalis. 
   				Tiene un buen poder cubritivo, de excelente brochabilidad y terminación mate. Su resistencia a los 
   				álcalis lo hace un excelente producto para sustratos nuevos.";
   				
   				$rec="Se emplea  para proteger muros alcalinos, como estucos, hormigón, ladrillos y fibrocemento, 
   				así también sobre muros neutros, como los alisados con pasta para muros, enlucidos con yeso  y de vulcanita.";
   				
   				$seg="Seguridad: Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados. Los componentes de este producto
   				 no son inflamables y respetan al medio ambiente.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, 
   				ladrillos y fibrocemento, deberán estar fraguadas 28 días y se lavarán con agua (hidrolavado) 
   				para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
				Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en interior, 
				debe estar sellado con una mano de sellador D.V.U., antes de aplicar el látex Aparejo.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, 
				como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 2)
   			{
   				$des="Pintura preparada a base de estireno acrílico modificada de excelente resistencia a los álcalis. Tiene un buen poder cubritivo, de excelente brochabilidad y terminación mate.";
   				
   				$rec="Se emplea  para proteger muros alcalinos, como estucos, hormigón, ladrillos y fibrocemento, 
   				así también sobre muros neutros, como los alisados con pasta para muros, enlucidos con yeso y de vulcanita.";
   				
   				$seg="Seguridad: poder cubritivo, de excelente brochabilidad y terminación mate. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados. Los componentes de este producto no son inflamables y respetan al medio ambiente.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos y fibrocemento, deberán estar fraguadas 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
					Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. 
					Si se emplea sobre yeso en interior, debe estar sellado con una mano de sellador Cal., antes de aplicar el látex acrílico.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 3)
   			{
   				$des="Es una pintura Acrílica-Vinílica y su factor principal es una resina de aceitato de vinilo copolimerizado 
						con acrílica emulsionada en agua. Es lo nuevo en cuanto a dureza, resistencia, elasticidad y adherencia 
						en el mercado nacional de pinturas. Está formulada para recubrir toda clase de superficies (exteriores 
						e interiores), principalmente para pintar sobre madera. Esta capa tiene una permeabilidad selectiva, 
						la que permite el paso de la humedad atrapada en el muro, pero no, el paso de la humedad exterior.";
   				
   				$rec="Se emplea  para proteger muros alcalinos, como estucos, hormigón, ladrillos y fibrocemento, así también 
				sobre muros neutros, como los alisados con pasta para muros, enlucidos con yeso y de vulcanita.";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables y respetan al medio ambiente. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos y fibrocemento, deberán estar fraguadas  28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay. Dos manos serán 
					suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en 
					Interior, debe estar sellado con una mano de sellador de Cal., antes de aplicar el látex Extra D.V.U.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 4)
   			{
   				$des="Látex Hidrófugo D.V.U. es una pintura formulada con emulsiones Acrílicas, espesantes sintéticos, 
				extendedores y agentes hidrófugos de la mejor calidad. Está destinada a dejar una terminación 
				mate e hidrorrepelente de una vez. Eliminando así las aplicaciones consecutivas de pintura e 
				Hidrorrepelentes por separados.";
   				
   				$rec="Se emplea  para proteger e impermeabilizar superficies como: ladrillos, estucos, hormigones, 
   				tejas, cemento, cartón, madera, etc.";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables y respetan al medio ambiente. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos y fibrocemento, deberán estar fraguadas 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
					Dos manos serán suficientes si se emplea sobre muros interiores y 2 sobre muros exteriores. Si se emplea sobre
					yeso en interior, debe estar sellado con una mano de sellador de cal antes de aplicar el látex Extra D.V.U.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles)";
   			}
   			if($_GET["id"] == 5)
   			{
   				$des="Este producto está desarrollado para absorber fisuras, formulado con dispersiones acrílicas estirenadas, solubles con agua, alta elasticidad y resistencia sobre sustratos alcalinos.";
   				
   				$rec="Se emplea  para embellecer y generar mejores adherencias sobre superficies estucadas, hormigón escofrado, hormigón celular y fibrocemento, cuando se aplican sobre la superficie de los revestimientos elastoméricos";
   				
   				$seg="Seguridad: Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

   				$pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas, libres de sales, polvo y suciedades.";

				$nota="";
   			}
   			if($_GET["id"] == 6)
   			{
   				$des="Esta pintura está desarrollada a base de una emulsión de vinil-acrílica. Látex aparejo decomural D.V.U., contesta al requerimiento de contar con un producto de extraordinaria solidez y la adherencia que sirve como puente entre las superficies y el papel con el cual son recubiertos frecuentemente los muros de las casas habitación.";
   				
   				$rec="Puede ser utilizada sobre cualquier superficie sólida y limpia. En muros pintados con productos brillantes, 
				se recomienda lijar previamente. Sobre yesos y recorridos con yeso se requiere mezclar la base del papel con 20 - 30% de óleo opaco o brillante para mejorar su impermeabilidad.
				También se puede usar combinado con otros látex, como enriquecedor de resistencia y adherencia.";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, ladrillos y fibrocemento, deberán estar fraguadas 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
					Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en interior, debe estar sellado con una mano de sellador de Cal., antes de aplicar el látex Aparejo decomural D.V.U.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 7)
   			{
   				$des="Pintura formulada con emulsiones acrílicas, espesantes sintéticos. Está destinada a dejar una terminación mate hidrorepelente de una vez, eliminando así las aplicaciones consecutivas de pinturas e hidrorepelente por separado.";
   				
   				$rec="Se emplea  para proteger e impermeabilizar superficies interior y exterior como; ladrillos, estucos, hormigones, tejas, cemento, madera y cartón.";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
						Su fórmula es libre de plomo, mercurio, cromo y metales pesados.";

   				$pre="Preparación de la superficie y aplicación: En las superficies como estuco, hormigón, ladrillos y fibrocemento, deberán estar fraguadas 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, material suelto o disgregado, suciedades y los desmoldeantes si los hay.
					2 manos serán suficientes si se emplea sobre muros interiores y exteriores. Si se emplea sobre yeso en interior debe estar sellado con una mano de sellador cal.";

				$nota="";
   			}
   			
   		}
   		else
         {
// ESMALTE

   	if ($_GET["c"] == "e" && ($_GET["id"] >=1 && $_GET["id"] <= $pro_e)) 
   	{
   			foreach ($esmalte as $e => $e_value)
   			{
   				if($_GET["id"] == $e_value)
   				{
					$nombre = $e;
   				}
   			}
   			if($_GET["id"] == 1)
   			{
   				$des="Esmalte al agua esta formulado en base a resinas acrílicas estineradas diluibles con agua. Son de alto rendimiento, gran poder cubridor, resistencia en superficies alcalinas expuestas a la intemperie, en interiores y exteriores. No es inflamable, respeta el medio ambiente y el hogar.";
   				
   				$rec="Para proteger y embellecer muros interiores y exteriores, como estucos, hormigón, ladrillos, hormigón celular y fibrocemento. En interior se puede aplicar sobre superficies esmaltadas, enlucidos con yeso y vulcanita.";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos, hormigón celular y fibrocemento, deberán estar fraguadas  28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
				Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en interior, recomendamos sellarlo con una mano de sellador acrílico neutro., antes de aplicar el esmalte al agua D.V.U. para disminuir la absorción del yeso y obtener mejores resultados.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 2)
   			{
   				$des="Esmalte al agua esta formulado en base a resinas acrílicas estineradas diluibles con agua. Son de alto rendimiento, gran poder cubridor, resistencia en superficies alcalinas expuestas a la intemperie, en interiores y exteriores. No es inflamable, respeta el medio ambiente y el hogar.";
   				
   				$rec="Para proteger y embellecer muros interiores y exteriores, como estucos, hormigón, ladrillos, hormigón celular y fibrocemento. En interior se puede aplicar sobre superficies esmaltadas, enlucidos con yeso y vulcanita";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos, hormigón celular y fibrocemento, deberán estar fraguadas  28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
					Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en interior, recomendamos sellarlo con una mano de sellador acrílico neutro., antes de aplicar el esmalte al agua D.V.U. para disminuir la absorción del yeso y obtener mejores resultados.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 3)
   			{
   				$des="Esmalte al agua esta formulado en base a resinas acrílicas estineradas diluibles con agua. Son de alto rendimiento, gran poder cubridor, resistencia en superficies alcalinas expuestas a la intemperie, en interiores y exteriores. No es inflamable, respeta el medio ambiente y el hogar.";
   				
   				$rec="Para proteger y embellecer muros interiores y exteriores, como estucos, hormigón, ladrillos, hormigón celular y fibrocemento. En interior se puede aplicar sobre superficies esmaltadas, enlucidos con yeso y vulcanita.";
   				
   				$seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos, hormigón celular y fibrocemento, deberán estar fraguadas  28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
					Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en interior, recomendamos sellarlo con una mano de sellador acrílico neutro., antes de aplicar el esmalte al agua D.V.U. para disminuir la absorción del yeso y obtener mejores resultados.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   			if($_GET["id"] == 4)
   			{
   				$des="Esmalte al agua extra esta formulado en base a resinas acrílicas estineradas diluibles con agua. Son de alto rendimiento, gran poder cubridor, protege de la radiación solar, resistencia en superficies alcalinas expuestas a la intemperie, en interiores y exteriores.
					Su película satinada permite buena limpiabilidad para eliminar periódicamente el polvo y las suciedades sobre la superficie pintada, frotándola con un paño húmedo sin dañar la película pintada.";
   				
   				$rec="Para proteger y embellecer muros interiores y exteriores, como estucos, hormigón, ladrillos, hormigón celular y fibrocemento. En interior se puede aplicar sobre superficies esmaltadas, enlucidos con yeso y vulcanita.";
   				
   				$seg="";

   				$pre="Preparación de la superficie y aplicación: Las superficies como estucos, hormigón, ladrillos, hormigón celular y fibrocemento, deberán estar fraguadas 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
					Dos manos serán suficientes si se emplea sobre muros interiores y 3 sobre muros exteriores. Si se emplea sobre yeso en interior, recomendamos sellarlo con una mano de sellador acrílico neutro., antes de aplicar el esmalte al agua extra D.V.U. para disminuir la absorción del yeso y obtener mejores resultados.
				Las maderas en interior deben estar previamente impregnadas con aceite antes de aplicar el esmalte al agua extra con el propósito de evitar que el tanino de la madera afecte y manche el color de la película del esmalte al agua extra.";

				$nota="Nota N° 1: No debe aplicarse sobre papeles interiores que estén plastificados, como tampoco sobre plásticos denominados como (papeles).";
   			}
   		}	
         else{
            // texturas
         if ($_GET["c"] == "t" && ($_GET["id"] >=1 && $_GET["id"] <= $pro_t)) 
         {
            foreach ($texturas as $t => $t_value)
            {
               if($_GET["id"] == $t_value)
               {
               $nombre = $t;
               }
            }
            if($_GET["id"] == 1)
            {
               $des="Revestimiento texturado pastoso, formulada con mezclas equilibradas de cuarzo de diferentes tamaños, para obtener terminaciones texturadas irregulares de dibujos verticales, cruzados o circulares, altamente decorativas y enmascaradoras de efectos superficiales. Su excelente comportamiento a los efectos climáticos externos, unido a sus mejoradas propiedades mecánicas de adherencia y dureza de su película, hacen de este revestimiento una excelente alternativa arquitectónica para cubrir fachadas de grandes y pequeñas construcciones. Su campo de aplicación se extiende también al cubrimiento de superficies interiores, que requieren de un producto
                  texturado armónico y elegante. 
                  <div class='boton-list'>* Cubre imperfecciones de la superficie.</div>
                  <div class='boton-list'>* Excelente adherencia sobre superficies lisas.</div>
                  <div class='boton-list'>* Terminación latamente decorativa.</div>
                  <div class='boton-list'>* Gran flexibilidad.</div>
                  <div class='boton-list'>* Excelente estabilidad a la intemperie y a la luz solar.</div>
                  <div class='boton-list'>* Alta resistencia a los hongos.</div>";
               
               $rec="Para proteger y decorar muros alcalinos como estucos, hormigón, fibrocemento y hormigón celular y evitar daños producidos por el clima exterior.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="";

            $nota="";
            }
            if($_GET["id"] == 2)
            {
               $des="Formulado con resinas acrílicas modificadas y partículas  de cuarzo de diferentes granulometrías, 
               de gran elasticidad y resistencias en interiores y exteriores para disimular imperfecciones y junturas en 
               planchas, no requebrándose cuando estas trabajan, especial para muros expuestos a la intemperie.
                  <div class='boton-list'>* Cubre imperfecciones de la superficie.</div>
                  <div class='boton-list'>* Excelente adherencia sobre superficies lisas.</div>
                  <div class='boton-list'>* Terminación latamente decorativa.</div>
                  <div class='boton-list'>* Gran flexibilidad.</div>
                  <div class='boton-list'>* Excelente estabilidad a la intemperie y a la luz solar.</div>
                  <div class='boton-list'>* Alta impermeabilidad e hidrorrepelencia.</div>
                  <div class='boton-list'>* Soporta lluvias después de 24 horas.</div>
                  <div class='boton-list'>* Alta resistencia a los hongos.</div>";
               
               $rec="Se emplea para revestir y texturar superficies estucadas, fibrocemento y de hormigón. Para proteger, enlucir y embellecer los exteriores de edificios y casas.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: La superficie debe estar fraguada, seca y  libre de sales. 
               Se aplicará como primera mano un látex elástico D.V.U. Sobre la superficie y 4 horas después el revestimiento con llanas metálicas o pistolas especiales.";

            $nota="";
            }
            if($_GET["id"] == 3)
            {
               $des="DVULINA orgánica DVY es un revestimiento acrílico de textura en pasta que otorga una elegante terminación y un fino detalle a las líneas arquitectónicas. Su terminación de grano homogéneo la hace muy decorativa tanto en interiores como en exteriores.";
               
               $rec="Es el revestimiento más adecuado para proteger de la humedad todas las superficies de construcción en Interiores y exteriores.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.";

               $pre="";

            $nota="";
            }
            if($_GET["id"] == 4)
            {
               $des="Revestimiento texturado en pasta. Pero con una acentuada repelencia al agua, lo que permite ser usada en zonas de gran solicitación climática, con excelentes resultados.";
               
               $rec="Se emplea para proteger y decorar muros alcalinos como estucos, hormigón, fibrocemento y hormigón celular y evitar daños producidos por el clima exterior.";
               
               $seg="Seguridad: los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.
               Su fórmula es libre de plomo, mercurio, cromo y metales pesados.";

               $pre="";

            $nota="";
            }
            if($_GET["id"] == 5)
            {
               $des="Revestimiento texturado pastoso formulado con mezclas equilibradas de cuarzo de diferentes tamaños para obtener terminaciones texturadas irregulares altamente decorativas y de efectos superficiales. Su excelente adherencia y dureza de su película, hacen de este revestimiento una excelente alternativa económica para cubrir fachadas de grandes y pequeñas construcciones.";
               
               $rec="Para Superficies exteriores como estucos, hormigón, ladrillos, O.S.B. etc.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: La superficie estucadas de hormigón y hormigón celular deberán estar fraguadas durante 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, 
                  el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.";

            $nota="";
            }
            if($_GET["id"] == 6)
            {
               $des="Revestimiento texturado pastoso formulado con mezclas equilibradas de cuarzo de diferentes tamaños para obtener terminaciones texturadas irregulares altamente decorativas y de efectos superficiales. Su excelente adherencia y dureza de su película, hacen de este revestimiento una excelente alternativa económica para cubrir fachadas de grandes y pequeñas construcciones.";
               
               $rec="Se utiliza especialmente para cielos rasos, pero también se aplica en muros interiores, sobre estucos, losas, empastes, etc.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: La superficie estucadas de hormigón y hormigón celular deberán estar fraguadas durante 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.
                  Se aplicará sobre toda la superficie a texturar una sola mano de látex aparejo del color deseado.";

            $nota="";
            }
            if($_GET["id"] == 7)
            {
               $des="Es un revestimiento 100% acrílico y con excelentes entendedores que otorgan mayor plasticidad y trabajabilidad que le permite dar una terminación muy elegante, es un producto económico para la construcción moderna y no es abrasivo para uso exterior.";
               
               $rec="DVUTEX EXTERIOR DVU, fue desarrollada para dar una terminación texturada y no abrasiva, económica y altamente impermeable, esta última propiedad se la confiere nuestro producto impermeabilizante en todas sus terminaciones.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: La superficie estucadas de hormigón y hormigón celular deberán estar fraguadas durante 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.";

            $nota="";
            }
             if($_GET["id"] == 8)
            {
               $des="Es un revestimiento formulado a base de resinas emulsionadas al agua, para uso interior base, pigmentos, exdendedores de alta calidad, arenas cuarzosas de malla controlada que le permite dar una terminación muy elegante, es un producto económico para la construcción moderna y no es abrasivo para usos interiores.";
               
               $rec="DVUTEX INTERIOR DVU. Fue diseñado para revestir cielos y muros interiores que tengan imperfecciones o bien para dar una terminación texturoza y no abrasiva. Es un producto base, se debe pintar con látex u oleos después de su aplicación.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: La superficie estucadas de hormigón y hormigón celular deberán estar fraguadas durante 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, el material suelto o disgregado, las suciedades y los desmoldeantes si los hay.";

            $nota="";
            }
            if($_GET["id"] == 9)
            {
               $des="Revestimiento formulado con mezclas equilibradas de cuerzo de diferentes tamaños para obtener terminaciones texturadas irregulares altamente decorativas y de efectos superficiales. Su excelente adherencia y dureza de su película hacen de este revestimiento una excelente alternativa económica para cubrir fachadas de grandes y pequeñas construcciones.";
               
               $rec="Se emplea  para superficies exteriores como estucos, hormigones, ladrillos O.S.B., maderas.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de plomo, mercurio, cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: En las superficies estucadas de hormigón y hormigón celular 
               deberán estar fraguadas durante 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, material suelto o disgregado, suciedades y los desmoldiantes si los hay.";

            $nota="";
            }
            
         }
         else
         {
         // pastas
         if ($_GET["c"] == "p" && ($_GET["id"] >=1 && $_GET["id"] <= $pro_p)) 
         {
            foreach ($pastas as $p => $p_value)
            {
               if($_GET["id"] == $p_value)
               {
               $nombre = $p;
               }
            }
            if($_GET["id"] == 1)
            {
               $des="Es una pasta de alta viscosidad, preparada a base de copolímeros Vinil-Acril, extendedores y espesantes sintéticos. Aplicable con llana metálica y fácil de lijar.";
               
               $rec="Se emplea para aislar superficies estucadas interiores y así obtener terminaciones lisas cuando se aplican 
               sobre ella. Látex y esmaltes al agua. También se emplea para mejorar superficies interiores enyesadas 
               y de yeso cartón, como la vulcanita para tapar las cabezas de los clavos o tornillos de fijación.
               No debe emplearse para tapar grietas, hoyos y defectos de plomada. Estas deben ser tapadas con yeso 
               o morteros rápidos.";
               
               $seg="";

               $pre="";

            $nota="";
            }
            if($_GET["id"] == 2)
            {
               $des="Es una pasta de enlucido liso a base de resinas de acril - vinílicas, entendedores y espesantes sintéticos. 
               Su dureza está regulada por su especial formulación, la que le confiere características de fácil lijabilidad 
               no siendo deslizable. Su terminación es blanca, por lo que constituye la base ideal para acabados con 
               pinturas de color blanco.";
               
               $rec="Para enlucir cualquier superficie usual en construcción, con la sola condición que se encuentren limpias y secas. Es el producto más adecuado para recorrer cielos sin ensuciarlos, cosa inevitable al usar pastas de muro oscuras. Pasta muro especial blanca es la base más idónea para terminaciones con  látex, óleos o esmaltes blancos. También se emplea para mejorar superficies interiores enyesadas y de yeso cartón como la volcanita, tapar 
                  la cabeza de clavos o tornillos de fijación. 
                  No debe emplearse para tapar grietas, hoyos y defecto de plomadas. Estas deben ser tapadas con yeso o morteros rápidos.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, 
               polvo y suciedades. Dos manos con llana metálica serán suficientes con un lijado entre ellas.";

            $nota="";
            }
            if($_GET["id"] == 3)
            {
               $des="La pasta cemento D.V.U. está preparada a base de copolímeros estireno acrílico compatible con el cemento. Que una vez agregado forma un producto de alta resistencia a la intemperie, adherencia, baja contracción y trabajabilidad. Esto permite un variado campo de aplicación en construcción.";
               
               $rec="Para enlucir interiores y exteriores, superficies 'difíciles', para emparejar o reparar nidos, grietas, molduras o pequeños poros. Puede utilizarse sobre una gran cantidad de superficies tales como: pinturas antiguas firmes, estucos, estucos partidos, grietas, ladrillos, hormigón, fibra cemento, O.S.B, revoques a base de cal firme o texturas deterioradas cuyas superficies se requieran alisar sin desprenderlas. También se emplea para mejorar superficies interiores enyesadas y de yeso cartón como la vulcanita, tapar la cabeza de clavos o tornillos de fijación.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, polvo 
               y suciedades. Una tineta de pasta cemento D.V.U. 30 kilos se mezcla con una pasta formada con medio 
               saco de cemento (21kg.) y 2 a 2.5 galones de agua, lo cual da aproximadamente 61 kilos de pasta útil.";

            $nota="Nota: La vida útil de esta pasta formada con cemento es de 24 horas.";
            }
            if($_GET["id"] == 4)
            {
               $des="Pasta secante yeso D.V.U. es una modificación de nuestra pasta secante. Esta formulada con resinas acrílicas con propiedades elásticas y compatible con yeso o cales. Sus excelentes propiedades garantizan mejor adhesión, trabajabilidad, baja contracción y dureza.";
               
               $rec="Para enlucir interiores en los que exista una diferencia de niveles que los hagan difíciles para una pasta muro, pero que no justifiquen estucar o enlucir con yeso, permite ser aplicado en diferentes espesores sin variar sus propiedades. Se puede adicionar con pequeñas porciones de cemento para mejorar la dureza. Las propiedades de esta pasta secante yeso D.V.U. son múltiples y se adecuan perfectamente al trabajo del yesero. También se emplea para mejorar superficies interiores enyesadas y de yeso cartón como la volcanita, para tapar las cabezas de clavos o tornillos de fijación.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales,
               polvo y suciedades. Dos manos con llana metálica serán suficientes con un lijado entre ellas.";

            $nota="";
            }
            if($_GET["id"] == 5)
            {
               $des="La pasta estuco D.V.U. está preparada a base de copolímeros estireno acrílico adicionados con partículas de arenas silíceas lavadas y desmineralizadas y de malla controlada compatible con el cemento, para lograr una mejor resistencia a la intemperie, adherencia, bajas contracciones y trabajabilidad. Permitiendo un variado campo de aplicaciones.";
               
               $rec="Para enlucir interiores y exteriores, diseñado para superficies 'difíciles', para emparejar o reparar nidos, grietas, molduras o pequeños poros. Puede utilizarse sobre una gran cantidad de superficies tales como: pinturas antiguas firmes, estucos, estucos partidos, grietas, ladrillos, hormigón, fibra cemento, O.S.B, revoques a base de cal firme o texturas deterioradas cuyas superficies se requieran alisar sin desprenderlas.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, 
               polvo y suciedades. Una tineta de pasta estuco D.V.U. 30 kilos se mezcla con una pasta formada con medio 
               saco de cemento (21kg.) y 2 a 2.5 galones de agua, lo cual da aproximadamente 61 kilos de pasta útil";

            $nota="Nota: La vida útil de esta pasta formada con cemento es de 3 horas. Además no debe aplicarse sobre espesores de 3mm de una vez.";
            }
            if($_GET["id"] == 6)
            {
               $des="Está fabricada con resinas y aditivos de última generación y es una solución para los conocidos problemas en estucos sobre elementos con movimiento o dilatación (excelente para uniones).";
               
               $rec="Para superficies tales como estucos, hormigón, fibra cemento, O.S.B. entre otros.
               No debe mezclarse con cemento para no perder sus propiedades elásticas que le permiten impregnar las fisuras en los estucos y en las junturas que tengan movimiento";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar limpias y firmes. Si existen fisuras es conveniente profundizarlas para lograr mejor adherencia. Pasta estuco elástica viene lista para ser usada.";

            $nota="";
            }
         }
         else
         {
             if ($_GET["c"] == "s" && ($_GET["id"] >=1 && $_GET["id"] <= $pro_s)) 
         {
            foreach ($sellos as $s => $s_value)
            {
               if($_GET["id"] == $s_value)
               {
               $nombre = $s;
               }
            }
             if($_GET["id"] == 1)
            {
               $des="Producto transparente e incoloro de terminación semi brillante. Formulado con dispersiones acrílico estireno solubles con agua y de alta resistencia sobre sustratos alcalinos.";
               
               $rec="Se emplea para sellar y generar mejores adherencias sobre superficies estucadas, hormigón encofrado, hormigón celular y fibrocemento. Para sellar superficies enlucidas con yeso y disminuir su absorción, permitiendo que las pinturas que se aplique tengan mejor rendimientos y para que las pastas para muros se extiendan con facilidad sin secarse o pelarse. Como suele suceder cuando las superficies son muy absorbentes.
                  Se recomienda para sellar superficies estucadas, hormigón, ladrillos y superficies pintadas en general.
                  Tiene excelentes resultados cuando se aplica para sellar previamente superficies alcalinas y evitar la saponificación de óleos y esmaltes sintéticos.";
               
               $seg="";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, polvo y suciedades. Si se emplea para sellar yeso en interior (previo a la pasta muro) debe aplicarse solo una mano diluida. Como mata polvo.";

            $nota="";
            }
             if($_GET["id"] == 2)
            {
               $des="Es un impermeabilizante superficial que contiene resinas sintéticas en base a un Ester acrílico estireno y aditivos que en conjunto con el cemento forman un poderoso impermeabilizante de gran adherencia y resistencia mecánica en condiciones extremas. Está especialmente diseñado para obras de tipo hidráulico.";
               
               $rec="Actúa de manera eficiente en superficies de hormigón. Mortero, estucos, albañilería de ladrillos, bloques de cemento, entre otras. Se emplea como impermeabilizador superficial en todo tipo de obras civiles, canalizaciones, túneles, estanques, piscinas o contenedores de agua potable, obras hidráulicas, etc. En la construcción de viviendas otorga altas prestaciones en rádieles, cimientos y sobre cimientos siendo muy utilizado como barrera o corte a la ascensión de humedad por capilaridad. Subterráneos, muros perimetrales contra terreno, fundaciones y toda zona en general con riesgo de sufrir filtraciones de agua y humedad.";
               
               $seg="Sellador mortero otorga máxima impermeabilidad bajo condiciones muy desfavorables como puede ser una gran presión de agua en forma directa como en un estanque de agua o directamente como un subterráneo. Es un producto de fácil aplicación por ser de muy buena calidad otorgando grandes garantías respecto de sus prestaciones, características y resultados esperados. La aplicación en espesores de 1 a 1.5mm es suficiente para obtener máxima impermeabilidad.";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, polvo y suciedades. Un galón de sellador mortero se mezcla con 4kg de pasta cemento hasta eliminar grumos y obtener una para de mejor consistencia y homogénea.";

            $nota="Nota: la vida útil de esta pasta formada con cemento es de 4 horas.";
            }
             if($_GET["id"] == 3)
            {
               $des="Es un polímero acrílico modificado destinado a servir de puente entre las superficies de construcción normales con yeso y/o estucos.";
               
               $rec="Como puente de adherencia para enlucidos de yeso o estucos de alta fuerza adhesiva sobre morteros u hormigón de cielo, columnas, vigas, muros, revoques y sobre superficies cementinas lisas.";
               
               $seg="";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, polvo y suciedades. Si se emplea para sellar yeso interior (previo a la pasta de muro) debe aplicarse una sola mano diluida con 1/2  litro de agua por galón.";

            $nota="";
            }
             if($_GET["id"] == 4)
            {
               $des="Es un revestimiento de una granulometría de malla controlada y de un excelente polímero modificado en agua destinado a servir como puente entre las superficies de construcción normales  con yeso y/o estucos.";
               
               $rec="Como puente de adherencia para enlucidos de yeso o estucos de alta fuerza adhesiva, sobre mortero u hormigón en cielos, columnas, vigas, muros, revoques y sobre superficies centinas lisas.";
               
               $seg="";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar limpias y firmes.";

            $nota="";
            }
            if($_GET["id"] == 5)
            {
               $des="Transparente e incoloro de terminación mate formulado con dispersiones acrílicas puras diluidas en agua, 
               de alta resistencia sobre sustratos alcalinos y de gran hidrorrepelencia a las agua de lluvia.";
               
               $rec="Se emplea para proteger, sellar e impermeabilizar enchapes de ladrillos y otorgarles impermeabilidad a las aguas lluvia evitando así los daños causados por las heladas. Tiene excelentes resultados para sellar previamente superficies alcalinas como los estucos.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables y respetan al medio ambiente.";

               $pre="Preparación de la superficie y aplicación: El producto recién aplicado tiene un aspecto lechoso que desaparece en algunas horas quedando una película transparente e incolora.
                  Las superficies deben estar fraguadas, secas libres de sales, polvo y suciedades. 
                  Si se emplea para sellar yeso en interiores debe aplicarse una sola mano diluida con 1/2 litro de agua por galón.";

            $nota="";
            }
            if($_GET["id"] == 6)
            {
               $des="Su fabricación es con resinas acríl - vinilicas con excelentes pigmentos que resisten la radiación ultra violeta. Es por eso que tiene mayor resistencia y duración a la intemperie. Imprimante ladrillo D.V.U. está diseñado principlamente para dar un semi brillo impermeabilizante sobre superficies de ladrillos a la vista en interiores y exteriores.";
               
               $rec="Se emplea para proteger superficies como ladrillos, estucos, tejas, cemento, cartón madera entre otras.";
               
               $seg="Preparación de la superficie y aplicación: Se aplica directamente sobre el ladrillo a la vista, se utilizan entre una y dos manos la impregnación, acabado y grado de impermeabilidad que requiera la superficie.";

               $pre="Precauciones: Las superficies como estucos, hormigón, ladrillos, hormigón celular y fibrocemento deberán estar graguadas 28 días y se lavarán con agua (hidrolavado) para eliminar las sales de fraguado, material suelto o disgregado, suciedades y los desmoldeantes si los hay.
               Dos manos serán suficientes si se emplea sobre muros interiores y tres sobre muros exteriores. Si se emplea sobre yeso en interior debe estar sellado con una mano de sellador D.V.U. neutro. Las superficies deben estar fraguadas, secas libres de sales, polvo y suciedades.";

            $nota="";
            }
            if($_GET["id"] == 7)
            {
               $des="Está diseñado para proteger y dar una terminación hidrorrepelente a la madera. Su terminación deja un 
               semi brillo, elástico, altamente impermeable, con gran potencia fungicida y alguicida.  Las garantías que 
               tiene comparadas con un barniz o pintura de óleo normal son muchas. No craquelea ni se desgasta con 
               la radiación solar.";
               
               $rec="Se utiliza para pintar e impermeabilizar maderas o cualquier superficie.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Preparación de la superficie y aplicación: Se aplica sobre madera nueva sin resinas, secas, sin suciedad ni pinturas antiguas.";

            $nota="";
            }
            if($_GET["id"] == 8)
            {
               $des="Producto a base de resinas acrílicas y aditivos desarrollados principalmente para impartir a los estucos una  mejor  adherencia, plasticidad y resistencia a las quebraduras.";
               
               $rec="Se aplica sobre las junturas de una gran variedad de sustratos, sobre todo cuando se requiere obtener una buena unión entre planchas en base a rellenos y cemento. Además permite estucar en forma parecida a un empastado sin que sea necesario fraguar después con agua.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar. 
               Su fórmula es libre de Plomo, Mercurio, Cromo y metales pesados.";

               $pre="Para su preparación es imprescindible utilizar la siguiente dosificación:
              <div class='boton-list'> - Arena 3 volúmenes.</div>
              <div class='boton-list'> - Cemento 1 volumen.</div>
              <div class='boton-list'> - Aditivo estuco 1/2 volumen.</div>
              <div class='boton-list'> - Agua aproximadamente 1/2 volumen (para regular la viscosidad) 2 litros de aditivo estuco y 3 litros de agua.</div>";

            $nota="";
            }
            if($_GET["id"] == 9)
            {
               $des="El impermeabilizante de silicona Q.H.C. es un hidrofugante especialmente desarrollado para proteger de los efectos de la humedad a los materiales de construcción. La aplicación de Q.H.C. no altera el color ni el brillo de la superficie protegida por esta silicona. Su terminación no es visible puesto que no forma película y actúa por efecto físico - químico para impedir la entrada de agua a los materiales.";
               
               $rec="Los usos de Q.H.C son muy variados de acuerdo a sus características y siendo un líquido transparente de gran fluidez penetra profundamente en los materiales evitando así las eflorescencias alcalinas y es una efectiva barrera contra la humedad. Su resistencia a los álcalis es extraordinaria. Una vez seco el impermeabilizante Q.H.C. no es pegajoso y por su gran  poder de penetración es posible aplicarlo sobre superficies algo húmedas. Sin embargo su mejor efectividad es sobre materiales secos y absorbentes. Impermeabilizante de silicona Q.H.C. impide la aparición de materias orgánicas en las superficies tales como hongos, musgo, etc. La superficie sobre la que se aplica permite el paso de vapor de agua, lo que es una ventaja para el aislamiento térmico y la transferencia natural de gases.";
               
               $seg="Seguridad: Los componentes de este producto no son inflamables, respetan al medio ambiente y el hogar.";

               $pre="Preparación de la superficie y aplicación: En general, los sustratos deben estar limpios, secos sin partes sueltas, sin grietas o fisuras. En caso de suciedad no removible por simple escobillado, se recomienda lavar con la cantidad mínima de agua. Recuerde que el agua en exceso que absorba el sustrato volverá a salir acompañada de sales disueltas que en la superficie se manifiestan con manchas blancas. El 'quemado con ácido' para enchapes no es recomendable.";

            $nota="";
            }
            if($_GET["id"] == 10)
            {
               $des="Producto transparente e incoloro de terminación semi brillante. Formulado con dispersiones acrílico estireno solubles con agua y de alta resistencia sobre sustratos alcalinos.";
               
               $rec="Se emplea para sellar y generar mejores adherencias sobre superficies estucadas, hormigón encofrado, hormigón celular y fibrocemento. Para sellar superficies enlucidas con yeso y disminuir su absorción, permitiendo que las pinturas que se aplique tengan mejor rendimientos y para que las pastas para muros se extiendan con facilidad sin secarse o pelarse. Como suele suceder cuando las superficies son muy absorbentes.
                  Se recomienda para sellar superficies estucadas, hormigón, ladrillos y superficies pintadas en general.
                  Tiene excelentes resultados cuando se aplica para sellar previamente superficies alcalinas y evitar la saponificación de óleos y esmaltes sintéticos.";
               
               $seg="";

               $pre="Preparación de la superficie y aplicación: Las superficies deben estar fraguadas, secas libres de sales, polvo y suciedades. Si se emplea para sellar yeso en interior (previo a la pasta muro) debe aplicarse solo una mano diluida. Como mata polvo.";

            $nota="";
            }
         }

         }
      }
   }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>D.V.U - <?php echo $nombre;?></title>
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
 					<h2 class="text-center"><strong><?php echo $nombre;?></strong></h2>
 					<!-- <hr style="border-top: 2px solid yellow;"> -->
 						<h3>DESCRIPCIÓN DEL PRODUCTO</h3>
							<p class="text-justify"><?php echo $des;?></p>

						<h3>USOS RECOMENDADOS</h3>
						<p class="text-justify"><?php echo $rec;?></p>

						<p class="text-justify"><?php echo $seg;?></p>
						
						<p class="text-justify"><?php echo $pre;?></p>

						<p class="text-justify"><?php echo $nota;?></p>
 				</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img width="100%" src="<?php echo $path;?>">
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

<?php
   }
   else
   {
   		echo "Producto no Registrado";
   }
?>













