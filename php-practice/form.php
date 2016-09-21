<!DOCTYPE html>
<html>
<body>

	<p> <?php 
		if(isset($_POST["name"])) {
			echo ($_POST["name"]."is most important");
		}
		?>
	</p>
</body>
</html>