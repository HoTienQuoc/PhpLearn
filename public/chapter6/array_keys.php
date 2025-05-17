array_keys() — Lấy tất cả key của một mảng (hoặc các key thỏa điều kiện)
array_keys(array $array, mixed $search_value = null, bool $strict = false): array
Tham số:
Tham số	        Kiểu	            Ý nghĩa
$array	        array	            Mảng cần lấy key
$search_value	mixed (tùy chọn)	Nếu chỉ định, chỉ lấy key có giá trị tương ứng với $search_value
$strict	        bool (tùy chọn)	    Nếu true, so sánh kiểu strict (===) khi tìm $search_value

Trả về:
Mảng chứa tất cả key của $array
Nếu có $search_value, chỉ lấy các key tương ứng với giá trị đó

<?php
$arr = ["a" => 1, "b" => 2, "c" => 3];
print_r(array_keys($arr));
// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
// )
echo "<br/>";

$arr = ["a" => 1, "b" => 2, "c" => 1];
print_r(array_keys($arr, 1));
// Array
// (
//     [0] => a
//     [1] => c
// )

$arr = ["a" => 1, "b" => "1", "c" => 1];
print_r(array_keys($arr, 1, true));
// Array
// (
//     [0] => a
//     [1] => c
// )


