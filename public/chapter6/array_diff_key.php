<?php
$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["a" => "black", "d" => "yellow"];

$result = array_diff_key($array1, $array2);

print_r($result);

/**
* 
* Array
*(
*    [b] => green
*    [c] => blue
*)
 */

echo "<br/>";

$array1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$array2 = ["a" => "black", "d" => "white"];
$array3 = ["b" => "gray"];

$result = array_diff_key($array1, $array2, $array3);

print_r($result);
// Array
// (
//     [c] => blue
// )
