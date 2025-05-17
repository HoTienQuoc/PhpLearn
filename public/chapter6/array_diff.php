<?php
$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["red", "yellow"];

$result = array_diff($array1, $array2);

print_r($result);
// Array
// (
//     [b] => green
//     [c] => blue
// )

echo "<br/>";

$array1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$array2 = ["red", "green"];
$array3 = ["yellow"];

$result = array_diff($array1, $array2, $array3);

print_r($result);
// Array
// (
//     [c] => blue
// )

