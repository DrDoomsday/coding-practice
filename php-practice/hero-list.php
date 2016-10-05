<?php 
	require('heroes.php');
 ?>
<!DOCTYPE html>
<html>
	<body>
		<h1>Heroes List</h1>
		<form action="random-hero.php" method="post">
			<?php
				foreach($heroes as $singleHero) {?>
					<input style="display:block"; type="checkbox" name="name" value="<?php print $singleHero?>">
					<?php
						print $singleHero;
				}?>
			<input type="submit" value="submit">
		</form>
	</body>
</html>