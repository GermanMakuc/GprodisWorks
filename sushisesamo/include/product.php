
<div id="content-4" >

<?php
	include("./include/vars.php");
	
	foreach ($productos as $p => $p_value) 
	{
		echo '<a href="./page.php?id='.$p_value.'"><img class="img-responsive" src="./images/e_'.$p_value.'.jpg" alt=""></a>';
		if($p_value != $pro)
			echo '<hr>';
	}

?>

</div>
