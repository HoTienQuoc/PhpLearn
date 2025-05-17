array_udiff_assoc() — So sánh phần tử và key của các mảng, dùng hàm so sánh người dùng định nghĩa
array_udiff_assoc(array $array1, array $array2, array ...$arrays, callable $key_compare_func): array

Tham số	            Kiểu	    Ý nghĩa
$array1	            array	    Mảng gốc để so sánh
$array2	            array	    Mảng thứ hai để so sánh
$arrays	            array[]	    Các mảng bổ sung để so sánh (tuỳ chọn)
$key_compare_func	callable	Hàm dùng để so sánh key (key comparator function)

Cách hoạt động:
So sánh key và value của $array1 với các mảng còn lại
Hàm $key_compare_func được dùng để so sánh các key
So sánh value bằng phép so sánh mặc định ==
Trả về mảng các phần tử trong $array1 mà không có trong các mảng còn lại theo so sánh key và value

Hàm so sánh key ($key_compare_func) phải:
Nhận 2 tham số (2 key)
Trả về:
0 nếu 2 key bằng nhau
Số âm nếu key 1 nhỏ hơn key 2
Số dương nếu key 1 lớn hơn key 2

<?php
$array1 = ['a' => 'red', 'b' => 'green', 'c' => 'blue'];
$array2 = ['a' => 'red', 'b' => 'yellow', 'd' => 'black'];

function key_compare($k1, $k2) {
    return strcmp($k1, $k2);
}

$result = array_udiff_assoc($array1, $array2, 'key_compare');

print_r($result);
// Array
// (
//     [b] => green
//     [c] => blue
// )

