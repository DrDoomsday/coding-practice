<?php
	require('heroes.php');
	/*Create if function that excludes all checked items from list that then picks a random item from the list on hero-list.php from the remaining items.
	*/
		$excludeHeroes = array($_POST['name']);
		$result = array_diff($heroes, $excludeHeroes);
		echo array_rand(array_flip($result), 1);
?>
