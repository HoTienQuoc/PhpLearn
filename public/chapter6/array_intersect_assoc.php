array_intersect_assoc() — So sánh mảng theo cả key và value


<?php
$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["a" => "red", "b" => "blue", "c" => "blue"];

$result = array_intersect_assoc($array1, $array2);
print_r($result);
// Array
// (
//     [a] => red
//     [c] => blue
// )

