<?php
$array1 = ["a" => "green", "b" => "brown", "c" => "blue", "d" => "red"];
$array2 = ["a" => "green", "b" => "yellow", "c" => "blue"];

$result = array_diff_assoc($array1, $array2);

print_r($result);
/*
Array
(
    [b] => brown  // khác giá trị (brown vs yellow)
    [d] => red    // không có trong array2
)
*/

echo "<br/>";

$array1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$array2 = ["a" => "red", "b" => "green"];
$array3 = ["d" => "yellow", "e" => "black"];

$result = array_diff_assoc($array1, $array2, $array3);

print_r($result);
// Array
// (
//     [c] => blue
// )
