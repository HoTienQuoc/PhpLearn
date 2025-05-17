array_unique trong PHP
array_unique() là hàm dùng để loại bỏ các phần tử trùng lặp trong một mảng — chỉ giữ lại giá trị đầu tiên của mỗi phần tử duy nhất

array_unique(array $array, int $flags = SORT_STRING): array

$array: Mảng cần xử lý.
$flags (tuỳ chọn): Cách so sánh giá trị. Một số lựa chọn:
SORT_STRING (mặc định): So sánh theo chuỗi.
SORT_NUMERIC: So sánh theo số.
SORT_REGULAR: So sánh bình thường (tuỳ theo kiểu dữ liệu).
SORT_LOCALE_STRING: So sánh theo locale (ngôn ngữ).

<?php
$array = [4, "4", 2, 8, "2", 4, 2];

$result = array_unique($array);

print_r($result);

// Array
// (
//     [0] => 4
//     [2] => 2
//     [3] => 8
// )

$array = [4, "4", 2, 8, "2", 4, 2];

$result = array_unique($array, SORT_NUMERIC);

print_r($result);
// Kết quả giống như trên, vì "4" và 4 đều là 4 khi so sánh kiểu số.


$array = ["Apple", "Banana", "apple", "banana", "APPLE"];

$result = array_unique($array, SORT_STRING);

print_r($result);
// Array
// (
//     [0] => Apple
//     [1] => Banana
//     [2] => apple
//     [3] => banana
// )
//array_unique() phân biệt chữ hoa/thường khi dùng SORT_STRING.


