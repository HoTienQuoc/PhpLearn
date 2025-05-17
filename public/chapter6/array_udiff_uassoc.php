array_udiff_uassoc() — So sánh key và value của các mảng, dùng hàm so sánh người dùng định nghĩa cho cả key và value
array_udiff_uassoc(array $array1, array $array2, array ...$arrays, callable $value_compare_func, callable $key_compare_func): array

Tham số	            Kiểu	    Ý nghĩa
$array1	            array	    Mảng gốc để so sánh
$array2	            array	    Mảng thứ hai để so sánh
$arrays	            array[]	    Các mảng bổ sung để so sánh (tuỳ chọn)
$value_compare_func	callable	Hàm dùng để so sánh value (giá trị)
$key_compare_func	callable	Hàm dùng để so sánh key (chìa khóa)


Cách hoạt động:
So sánh key của các phần tử bằng hàm $key_compare_func
So sánh value của các phần tử bằng hàm $value_compare_func
Trả về mảng gồm các phần tử trong $array1 không có trong các mảng còn lại theo so sánh key & value

<?php
function compare_values($v1, $v2) {
    return strcmp($v1, $v2);  // So sánh giá trị theo chuỗi
}

function compare_keys($k1, $k2) {
    return strcmp($k1, $k2);  // So sánh key theo chuỗi
}

$array1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
$array2 = ['a' => 'red', 'b' => 'yellow', 'd' => 'black'];

$result = array_udiff_uassoc(
    $array1,
    $array2,
    'compare_values',
    'compare_keys'
);

print_r($result);

// Array
// (
//     [b] => green
//     [c] => blue
// )

