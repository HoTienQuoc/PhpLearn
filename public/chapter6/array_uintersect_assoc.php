array_uintersect_assoc trong PHP là hàm dùng để lấy giao giữa các mảng (intersection), xét cả key và value, và so sánh các phần tử bằng một hàm callback do người dùng định nghĩa.
array_uintersect_assoc(array $array1, array $array2, array ...$arrays, callable $callback): array

$array1: Mảng đầu tiên để so sánh.
$array2, ...$arrays: Một hoặc nhiều mảng khác để so sánh.
$callback: Hàm callback dùng để so sánh các giá trị (values). Hàm này nhận 2 tham số và trả về:
< 0 nếu phần tử thứ nhất nhỏ hơn phần tử thứ hai.
0 nếu hai phần tử bằng nhau.
> 0 nếu phần tử thứ nhất lớn hơn phần tử thứ hai.

Lưu ý:

Khác với array_intersect_assoc, array_uintersect_assoc dùng hàm callback cho việc so sánh giá trị (value), nhưng key được so sánh bằng cách so sánh trực tiếp (==).
Các phần tử trong mảng trả về giữ nguyên key.

<?php
$array1 = [
    "a" => "green",
    "b" => "brown",
    "c" => "blue",
    "d" => "red"
];

$array2 = [
    "a" => "green",
    "b" => "yellow",
    "c" => "blue",
    "e" => "red"
];

$result = array_uintersect_assoc($array1, $array2, function($val1, $val2) {
    return strcmp($val1, $val2); // So sánh chuỗi
});

print_r($result);
// Array
// (
//     [a] => green
//     [c] => blue
// )
