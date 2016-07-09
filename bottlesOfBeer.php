<!DOCTYPE html>

<html>

	<head>
		<title>99 Bottles of Beer</title>
	</head>

	<body>
		<h1>Lyrics of the Song <em>99 Bottles of Beer</em></h1>

		<?php
		$beer = 99; //initial value of $beer
		while($beer>0) {	
			echo $beer." bottles of beer on the wall, ".$beer." bottles of beer.<br>";
			$beer -= 1; //subtract the value of $beer by one for the second line of each stanza
			echo "Take one down and pass it around, ".$beer." bottles of beer on the wall.<br><br>";
		}
		//when loop is finished, print the final stanza as pure text
		echo "No more bottles of beer on the wall, no more bottles of beer. <br>Go to the store and buy some more, 99 bottles of beer on the wall.<br>";
		?>

	</body>

</html>