array_search() — Tìm key của một giá trị trong mảng
mixed array_search(mixed $needle, array $haystack, bool $strict = false)

Tham số	    Kiểu	Ý nghĩa
$needle	    mixed	Giá trị cần tìm
$haystack	array	Mảng cần tìm
$strict	    bool	Nếu true, so sánh cả kiểu dữ liệu (mặc định false)

Kết quả:
Trả về key đầu tiên tìm thấy có giá trị bằng $needle
Nếu không tìm thấy, trả về false
So sánh bằng == nếu $strict = false, bằng === nếu $strict = true


<?php
$fruits = ["a" => "apple", "b" => "banana", "c" => "cherry"];

$key = array_search("banana", $fruits);
echo $key;  // b

$array = [0 => '1', 1 => 2, 2 => 3];
$key = array_search(1, $array, true);  // tìm số 1 kiểu int

var_dump($key);  // false (vì trong mảng '1' là kiểu string)


// Lưu ý:
// Kết quả trả về có thể là 0 (key số 0) — kiểm tra bằng === false để phân biệt không tìm thấy
// Nếu cần tìm tất cả key có giá trị trùng, cần dùng vòng lặp hoặc hàm khác

