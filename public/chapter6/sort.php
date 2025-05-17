sort() trong PHP
Hàm sort() dùng để sắp xếp mảng theo giá trị (value) tăng dần, đồng thời đánh lại chỉ số (key).

sort(array &$array, int $flags = SORT_REGULAR): bool

$array: Mảng cần sắp xếp (thay đổi trực tiếp).
$flags (tuỳ chọn): Kiểu so sánh:
SORT_REGULAR (mặc định): so sánh bình thường.
SORT_NUMERIC: so sánh kiểu số.
SORT_STRING: so sánh kiểu chuỗi.
SORT_NATURAL: so sánh thứ tự tự nhiên (giống như con người nhìn).
Có thể kết hợp với SORT_FLAG_CASE để không phân biệt hoa thường.

<?php
$numbers = [4, 2, 8, 1];
sort($numbers);

print_r($numbers);

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 4
//     [3] => 8
// )

$words = ["Banana", "apple", "cherry"];
sort($words, SORT_STRING | SORT_FLAG_CASE);

print_r($words);

// Lưu ý
// sort() đánh lại chỉ số (key trở thành 0, 1, 2,...).
// Nếu bạn cần giữ key gốc, hãy dùng asort().

