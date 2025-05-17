array_uintersect_uassoc trong PHP là hàm dùng để lấy giao giữa các mảng (intersection), nhưng cả key và value đều được so sánh bằng hàm callback do người dùng định nghĩa.
array_uintersect_uassoc(array $array1, array $array2, array ...$arrays, callable $value_compare_func, callable $key_compare_func): array

$array1, $array2, ...: Các mảng để so sánh.
$value_compare_func: Hàm callback dùng để so sánh giá trị (values).
$key_compare_func: Hàm callback dùng để so sánh key.

Cách hoạt động

Hàm sẽ giữ lại các phần tử có cả key và value tồn tại trong tất cả các mảng khác, dựa trên kết quả so sánh của 2 hàm callback.
Cả key và value được so sánh dựa trên hàm callback do bạn định nghĩa (khác với array_uintersect_assoc chỉ callback với value).
Mảng trả về giữ nguyên key của $array1.

<?php
$array1 = [
    "a" => "green",
    "B" => "brown",
    "c" => "blue",
    "d" => "red"
];

$array2 = [
    "A" => "green",
    "b" => "brown",
    "c" => "blue",
    "e" => "red"
];

$result = array_uintersect_uassoc(
    $array1, $array2,
    function($val1, $val2) {  // So sánh value
        return strcmp($val1, $val2);
    },
    function($key1, $key2) {  // So sánh key không phân biệt hoa thường
        return strcasecmp($key1, $key2);
    }
);

print_r($result);
// Array
// (
//     [a] => green
//     [B] => brown
//     [c] => blue
// )

