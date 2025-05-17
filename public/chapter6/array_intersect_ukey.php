array_intersect_ukey() — So sánh mảng theo key, với hàm so sánh key tùy chỉnh
array_intersect_ukey(
    array $array1, 
    array $array2, 
    callable $key_compare_func
) : array

Tham số:
Tham số	            Kiểu	    Ý nghĩa
$array1	            array	    Mảng gốc để so sánh
$array2, ...	    array	    Một hoặc nhiều mảng để so sánh key
$key_compare_func	callable	Hàm so sánh key tùy chỉnh (nhận 2 key, trả về int)

<?php
$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["A" => "orange", "B" => "yellow"];

$result = array_intersect_ukey($array1, $array2, "strcasecmp"); // So sánh key không phân biệt hoa thường

print_r($result);
// Array
// (
//     [a] => red
//     [b] => green
// )

function customKeyCompare($k1, $k2) {
    return strlen($k1) <=> strlen($k2); // So sánh độ dài key
}

$array1 = ["abc" => 1, "abcd" => 2];
$array2 = ["xyz" => 99, "wxyz" => 100];

$result = array_intersect_ukey($array1, $array2, "customKeyCompare");
print_r($result);
// Array
// (
//     [abc] => 1
//     [abcd] => 2
// )
//Vì "abc" và "xyz" đều dài 3 → giữ "abc", "abcd" và "wxyz" dài 4 → giữ "abcd"
?>
Loại hàm	        Có thể dùng?	Ví dụ
Hàm PHP sẵn có	        ✅	    "strcmp", "strcasecmp"
Hàm do bạn định nghĩa	✅	    "myCompareFunction"
Hàm ẩn danh (closure)	✅	    function($a, $b) { ... }


Tên hàm so sánh có sẵn của PHP
Hàm	            Mô tả
strcmp	        So sánh chuỗi (phân biệt chữ hoa thường)
strcasecmp	    So sánh chuỗi (không phân biệt hoa thường)
strnatcmp	    So sánh chuỗi theo thứ tự tự nhiên (natural order)
strnatcasecmp	So sánh natural order không phân biệt hoa thường

Hàm tự định nghĩa (user-defined function)

Hàm ẩn danh (anonymous function / closure)

