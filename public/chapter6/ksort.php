ksort() trong PHP
Hàm ksort() dùng để sắp xếp mảng theo key theo thứ tự tăng dần (ascending order), giữ nguyên mối liên hệ key-value.

ksort(array &$array, int $flags = SORT_REGULAR): bool

$array: Mảng cần sắp xếp (tham chiếu, mảng gốc sẽ bị thay đổi).
$flags (tuỳ chọn):
SORT_REGULAR (mặc định): so sánh bình thường.
SORT_NUMERIC: so sánh số học.
SORT_STRING: so sánh chuỗi.
SORT_NATURAL: so sánh theo thứ tự tự nhiên.
Có thể kết hợp với SORT_FLAG_CASE để không phân biệt hoa thường.
Trả về true nếu thành công, false nếu thất bại.

<?php
$array = [
    "c" => 3,
    "a" => 1,
    "b" => 2
];

ksort($array);

print_r($array);

// Array
// (
//     [a] => 1
//     [b] => 2
//     [c] => 3
// )


$array = [
    "b" => "Banana",
    "A" => "Apple",
    "c" => "Cherry"
];

ksort($array, SORT_STRING | SORT_FLAG_CASE);

print_r($array);


// Lưu ý
// ksort() sắp xếp theo key tăng dần.
// Khác với asort() sắp xếp theo giá trị.
// Mảng được thay đổi trực tiếp (truyền tham chiếu).
