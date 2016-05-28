<!DOCTYPE html>
<html>
	<body>
		<form method="post">
			<input type="number" placeholder="First Value" name="firstValue"> <br>
			<input type="number" placeholder="Second Value" name="secondValue"> <br>
			<input type="radio" name="operation" value="addition"> Addition <br>
			<input type="radio" name="operation" value="subtraction"> Subraction <br>
			<input type="radio" name="operation" value="multiplication"> Multiplication <br>
			<input type="radio" name="operation" value="division"> Division <br>
			<input type="submit">
			<p> Answer: 
			<?php 
				$operation = $_POST["operation"];
				switch ($operation) {
					case "addition":
						echo $_POST["firstValue"] + $_POST["secondValue"];
						break;
					case "subtraction":
						echo $_POST["firstValue"] - $_POST["secondValue"];
						break;
					case "multiplication":
						echo $_POST["firstValue"] * $_POST["secondValue"];
						break;
					case "division":
						if ($_POST["secondValue"] == 0) {
							echo "Cannot divide by zero";
						} else {
							echo $_POST["firstValue"] / $_POST["secondValue"];
						}
						break;
				}
			?>
			</p>
		</form>
	</body>
</html>