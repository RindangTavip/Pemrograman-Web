<?php 
	$i = 1;

	while ($i <= 5) {
	    $j = 5;
	    while ($j >= 1) {
	        if ($i < $j) {
	            echo '';
	        } else {
	            echo $i;
	        }
	        $j--;
	    }
	    echo "<br>";
	    $i++;
	}
?>