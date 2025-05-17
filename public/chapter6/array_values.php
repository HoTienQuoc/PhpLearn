array_values trong PHP
array_values() là hàm dùng để lấy tất cả giá trị của một mảng và đánh lại chỉ mục (key) theo thứ tự số từ 0.
array_values(array $array): array
$array: Mảng đầu vào (có thể là mảng kết hợp hoặc bất kỳ mảng nào).
Trả về một mảng mới chỉ gồm các giá trị, key dạng số từ 0.

<?php
$assoc = [
    "name" => "Alice",
    "age" => 30,
    "city" => "Hanoi"
];

$result = array_values($assoc);

print_r($result);

// Array
// (
//     [0] => Alice
//     [1] => 30
//     [2] => Hanoi
// )

$weird = [
    5 => "a",
    "b" => "b",
    10 => "c"
];

$result = array_values($weird);

print_r($result);

// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
// )


$numbers = [1, 2, 3, 4, 5];
$filtered = array_filter($numbers, fn($n) => $n > 2);

print_r(array_values($filtered)); // Reset key từ 0

