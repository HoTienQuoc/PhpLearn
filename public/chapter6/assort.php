Có vẻ bạn muốn nói đến hàm asort trong PHP, vì PHP không có hàm assort.

asort trong PHP
asort() là hàm dùng để sắp xếp mảng theo giá trị tăng dần, đồng thời giữ nguyên key tương ứng.

asort(array &$array, int $flags = SORT_REGULAR): bool

$array: Mảng cần sắp xếp (truyền tham chiếu, mảng gốc bị thay đổi).
$flags (tuỳ chọn): Kiểu so sánh, ví dụ:
SORT_REGULAR (mặc định)
SORT_NUMERIC
SORT_STRING
SORT_LOCALE_STRING
SORT_NATURAL
SORT_FLAG_CASE
Trả về true nếu thành công.

<?php
$array = [
    "a" => 3,
    "b" => 1,
    "c" => 2
];

asort($array);

print_r($array);
// Array
// (
//     [b] => 1
//     [c] => 2
//     [a] => 3
// )

$files = ["img10.png", "img2.png", "img1.png"];
sort($files, SORT_NATURAL);
print_r($files);
// Array
// (
//     [0] => img1.png
//     [1] => img2.png
//     [2] => img10.png
// )

$names = ["bob", "Alice", "charlie"];
sort($names, SORT_STRING | SORT_FLAG_CASE);
print_r($names);
// Array
// (
//     [0] => Alice
//     [1] => bob
//     [2] => charlie
// )


$items = ["item2", "Item10", "item1", "ITEM3"];
sort($items, SORT_NATURAL | SORT_FLAG_CASE);
print_r($items);
// Array
// (
//     [0] => item1
//     [1] => item2
//     [2] => ITEM3
//     [3] => Item10
// )

