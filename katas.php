<?php

$string = "i watermelon";

function capitalize($string) {
    return strtoupper(substr($string, 0, 1)) . substr($string, 1, strlen($string));
}

function reverseString($string) {
	$reversedString = "";
	for ($i = strlen($string)-1;$i >= 0;$i--) {
		$letter = substr($string, $i, 1);
		$reversedString = $reversedString . $letter;
	}
	return $reversedString;
}

function cRaZyCaSe($string) {
	$crazyString = '';
	$nextIsLower = true;
	for($i = 0;$i <= strlen($string); $i++) {
		$letter = substr($string, $i, 1);
		if($nextIsLower === true) {
			$crazyString = $crazyString . strtolower($letter);
			$nextIsLower = false;
		} else {
			$crazyString = $crazyString . strtoupper($letter);
			$nextIsLower = true;
		}
	}
	return $crazyString;
}

echo cRaZyCaSe('ruSSELl');
echo cRaZyCaSe('RUSSELL');
echo cRaZyCaSe('russell');
echo cRaZyCaSe('RUSSell');

rUsSeLl;

