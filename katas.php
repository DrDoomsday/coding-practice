<?php

$string = "i watermelon";

function capitalize($string) {
    return strtoupper(substr($string, 0, 1)) . substr($string, 1, strlen($string));
}

echo capitalize($string);
