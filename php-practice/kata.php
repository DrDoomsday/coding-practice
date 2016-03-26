<?php

	function sumBetween($start, $end) {
		for($counter=$start;$counter <= $end; $counter++) {
			$total = $total + $counter;
		}
		return $total;
	}

	// echo sumBetween(5, 8);

	function divideUntilBelowThree($a) {
		while($a >= 3) {
			$a= $a / 2;
		}
		return $a;
	}

	echo divideUntilBelowThree(8);
?>