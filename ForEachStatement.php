<?php

$food = array("Healthy"=>
						array("salad","vegetables","pasta"),
			  "Unhealthy"=>
						array("pizza","ice cream"));
						
foreach ($food as $element => $inner_array){
	echo "<strong>".$element."</strong><br>";
	
	foreach ($inner_array as $item){
		echo $item."<br>";
	}
	echo "<br>";
}

?>