
<div id="content-4" >

<?php
	include("./include/vars.php");
	
	foreach ($bar as $b => $b_value) 
	{
		echo '<a href="./page.php?id='.$b_value.'"><img class="img-responsive" src="./images/e_'.$b_value.'.jpg" alt=""></a>';
		if($b_value != $pro)
			echo '<hr>';
	}

?>

</div>
