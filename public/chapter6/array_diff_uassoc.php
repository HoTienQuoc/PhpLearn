<?php
function myKeyCompare($a, $b) {
    return strcmp($a, $b); // So sánh key theo thứ tự chữ cái
}

$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["a" => "red", "b" => "green", "d" => "yellow"];

$result = array_diff_uassoc($array1, $array2, "myKeyCompare");

print_r($result);
// Array
// (
//     [c] => blue
// )
