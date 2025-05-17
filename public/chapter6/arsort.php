arsort trong PHP
arsort() là hàm dùng để sắp xếp mảng theo giá trị giảm dần, đồng thời giữ nguyên key tương ứng.

arsort(array &$array, int $flags = SORT_REGULAR): bool

$array: Mảng cần sắp xếp (truyền tham chiếu, mảng gốc bị thay đổi).
$flags (tuỳ chọn): Kiểu so sánh khi sắp xếp, có thể là:
SORT_REGULAR (mặc định): So sánh thông thường.
SORT_NUMERIC: So sánh số.
SORT_STRING: So sánh chuỗi.
SORT_LOCALE_STRING: So sánh theo locale.
Trả về true nếu thành công.

<?php
$array = [
    "a" => 3,
    "b" => 1,
    "c" => 2
];

arsort($array);

print_r($array);
// Array
// (
//     [a] => 3
//     [c] => 2
//     [b] => 1
// )

$array = [
    "x" => "apple",
    "y" => "banana",
    "z" => "cherry"
];

arsort($array, SORT_STRING);

print_r($array);
// Array
// (
//     [z] => cherry
//     [y] => banana
//     [x] => apple
// )

// Lưu ý
// arsort giữ nguyên key của các phần tử.
// Khác với rsort – sắp xếp giảm dần nhưng đánh lại key số.

