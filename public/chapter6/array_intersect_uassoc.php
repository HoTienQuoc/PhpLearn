array_intersect_uassoc() — So sánh mảng theo value và key, với hàm so sánh key tùy chỉnh

<?php
$array1 = ["a" => "red", "b" => "green", "c" => "blue"];
$array2 = ["A" => "red", "b" => "green", "C" => "blue"];

$result = array_intersect_uassoc($array1, $array2, 'strcasecmp'); // So sánh key không phân biệt hoa thường

print_r($result);

// Array
// (
//     [a] => red
//     [b] => green
//     [c] => blue
// )

?>

array_intersect_uassoc(
    array $array, 
    array ...$arrays, 
    callable $key_compare_func
) : array

$key_compare_func nhận 2 tham số và trả về:
0 nếu 2 key bằng nhau
< 0 nếu key1 < key2
0 nếu key1 > key2


Hàm so sánh	                    Mô tả
strcmp($a, $b)	        So sánh chuỗi có phân biệt chữ hoa – thường
strcasecmp($a, $b)	    So sánh chuỗi không phân biệt chữ hoa – thường
strnatcmp($a, $b)	    So sánh chuỗi theo thứ tự tự nhiên (natural order)
strnatcasecmp($a, $b)	Như trên, nhưng không phân biệt chữ hoa – thường
Hàm tự định nghĩa	    Bạn cũng có thể tự viết hàm theo ý bạn muốn
