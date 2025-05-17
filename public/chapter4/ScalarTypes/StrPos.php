<?php
$awesome = "Super Awesome!";
echo strpos($awesome, "!");
echo PHP_EOL;
$awesome = "Super Awesome!";
echo strpos($awesome, 'm', 3);
$awesome = "Super Awesome!";
echo PHP_EOL;

$result = strpos ( $awesome, 'G' );
if ($result === false) {
echo 'Not found';
} else {
echo 'Found at position ' . $result;
}
// Not found