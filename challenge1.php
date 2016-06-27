<?php function runSong($song) {
	while ($song >= 95) {
		echo " " . $song . ' bottles of beer on the wall ' . $song . ' bottles of beer. Take one down and pass it around, ';
		$song--; 
		echo $song . ' bottles of beer on the wall.';
	}
}

runSong(99);