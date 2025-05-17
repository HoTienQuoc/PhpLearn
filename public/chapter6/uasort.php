uasort() trong PHP
Hàm uasort() dùng để sắp xếp mảng theo giá trị (value) bằng hàm so sánh do bạn tự định nghĩa, và giữ nguyên các key.

uasort(array &$array, callable $callback): bool

$array: Mảng cần sắp xếp (sẽ bị thay đổi thứ tự).
$callback: Hàm do bạn viết để so sánh hai giá trị.
Trả về:
0 nếu hai giá trị bằng nhau.
< 0 nếu giá trị 1 < giá trị 2.
0 nếu giá trị 1 > giá trị 2.

<?php
$fruits = [
    "a" => "banana",
    "b" => "Apple",
    "c" => "cherry"
];

uasort($fruits, "strcasecmp"); // không phân biệt hoa thường

print_r($fruits);

// Array
// (
//     [b] => Apple
//     [a] => banana
//     [c] => cherry
// )

$products = [
    "tv" => 500,
    "laptop" => 1200,
    "phone" => 700
];

uasort($products, function($a, $b) {
    return $b <=> $a; // sắp xếp giảm dần theo giá trị
});

print_r($products);


// Lưu ý
// uasort() chỉ sắp xếp theo giá trị, không thay đổi key.
// Nếu bạn cần sắp xếp theo key với callback, dùng uksort().
// Nếu cần sắp xếp theo cả key và value với callback, dùng uassoc() hoặc uasort() kết hợp thêm xử lý key.
