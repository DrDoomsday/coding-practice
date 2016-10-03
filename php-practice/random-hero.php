<?php
	require('heroes.php');
	/*Create if function that excludes all checked items from list that then picks a random item from the list on hero-list.php from the remaining items.
	*/
	foreach (isset($_POST[])) {
		$excludeHeroes = array($_POST[]);
	}
	/* foreach loop to take each value in the $_POST, create an array to be compared to heroes.php array and eliminate
	matching values */
?>
<!DOCTYPE html>
<html>
<body>

	<p> <?php 
		echo array_rand($result, 1) = array_diff($excludeHeroes, $heroes);

		// Comapares two arrays (excluding the same elements from the two arrays) then echos a rand element from the resulting array.
		?>
	</p>
</body>
</html>
