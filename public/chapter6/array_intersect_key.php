array_intersect_key() — So sánh mảng theo key


<?php
$array1 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$array2 = ["a" => 100, "c" => 200];
$array3 = ["a" => true, "b" => false, "c" => true];

$result = array_intersect_key($array1, $array2, $array3);

print_r($result);
// Array
// (
//     [a] => apple
//     [c] => cherry
// )


