<?php
function myKeyCompare($a, $b) {
    return strcmp($a, $b); // So sánh key theo thứ tự từ điển
}

$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["a" => "yellow", "d" => "green"];

$result = array_diff_ukey($array1, $array2, "myKeyCompare");

print_r($result);
// Array
// (
//     [b] => green
//     [c] => blue
// )
