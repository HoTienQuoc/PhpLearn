krsort() trong PHP
Hàm krsort() dùng để sắp xếp mảng theo key theo thứ tự giảm dần (descending order), đồng thời giữ nguyên mối liên hệ key-value.

krsort(array &$array, int $flags = SORT_REGULAR): bool

$array: Mảng cần sắp xếp (được truyền theo tham chiếu, sẽ bị thay đổi).
$flags (tuỳ chọn): Kiểu so sánh key, ví dụ:
SORT_REGULAR (mặc định): so sánh bình thường.
SORT_NUMERIC: so sánh số học.
SORT_STRING: so sánh chuỗi.
SORT_NATURAL: so sánh kiểu tự nhiên (như Windows Explorer).
Có thể kết hợp với SORT_FLAG_CASE để không phân biệt hoa thường.
Trả về true nếu thành công, false nếu thất bại.

<?php
$array = [
    "c" => 3,
    "a" => 1,
    "b" => 2
];

krsort($array);

print_r($array);

// Array
// (
//     [c] => 3
//     [b] => 2
//     [a] => 1
// )

$array = [
    "b" => "Banana",
    "A" => "Apple",
    "c" => "Cherry"
];

krsort($array, SORT_STRING | SORT_FLAG_CASE);

print_r($array);

// Lưu ý
// krsort() khác với arsort():
// krsort() sắp xếp theo key.
// arsort() sắp xếp theo value giảm dần.
// Mảng được sắp xếp thay đổi trực tiếp (truyền tham chiếu).

