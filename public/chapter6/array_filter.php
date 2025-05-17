array_filter(
    array $array, 
    ?callable $callback = null, 
    int $mode = 0
) : array

$mode gồm các giá trị sau:
Hằng số	                Giá trị	       Ý nghĩa
0 (mặc định)	        0	Chỉ truyền giá trị ($value) vào callback
ARRAY_FILTER_USE_KEY	1	Chỉ truyền key ($key) vào callback
ARRAY_FILTER_USE_BOTH	2	Truyền cả key và value vào callback (function($value, $key))


<?php
$data = ["a" => 1, "b" => 2, "c" => 3];

$result = array_filter($data, function($key) {
    return $key === "b";
}, ARRAY_FILTER_USE_KEY);

print_r($result);

// Array
// (
//     [b] => 2
// )


echo "<br/>";


$data = ["a" => 1, "b" => 2, "c" => 3];

$result = array_filter($data, function($value, $key) {
    return $key === "c" || $value === 1;
}, ARRAY_FILTER_USE_BOTH);

print_r($result);


// Array
// (
//     [a] => 1
//     [c] => 3
// )



