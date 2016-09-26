<?php
	require('heroes.php');
	/*Create if function that excludes all checked items from list that then picks a random item from the list on hero-list.php from the remaining items.
	*/
?>
<!DOCTYPE html>
<html>
<body>

	<p> <?php 
		if(isset($_POST["Abathur"])) {
			echo ($_POST["Abathur"]."is most important");
		}
		?>
	</p>
</body>
</html>
