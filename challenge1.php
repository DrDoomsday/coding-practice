<?php function runSong($bottles) {
	while ($bottles >= 95) {
		echo " " . $bottles . ' bottles of beer on the wall ' . $bottles . ' bottles of beer. Take one down and pass it around, ';
		$bottles--;
		echo $bottles . ' bottles of beer on the wall.';
	}
}

runSong(99);
