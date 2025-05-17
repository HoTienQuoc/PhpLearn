in_array() trong PHP
Hàm in_array() được dùng để kiểm tra xem một giá trị có tồn tại trong một mảng hay không.

in_array(mixed $needle, array $haystack, bool $strict = false): bool

$needle: Giá trị cần tìm.
$haystack: Mảng để tìm kiếm.
$strict (tuỳ chọn):
false (mặc định): So sánh lỏng lẻo (==)
true: So sánh chặt chẽ (===) — bắt buộc cùng kiểu dữ liệu.

<?php
$fruits = ["apple", "banana", "cherry"];

if (in_array("banana", $fruits)) {
    echo "Có banana trong mảng!";
}

$numbers = [1, 2, 3];

var_dump(in_array("1", $numbers));         // true (vì "1" == 1)
var_dump(in_array("1", $numbers, true));   // false ("1" !== 1)

$person = [
    "name" => "Alice",
    "city" => "Hanoi"
];

echo in_array("Hanoi", $person) ? "Tìm thấy" : "Không thấy"; // Tìm thấy
// in_array() chỉ kiểm tra giá trị, không kiểm tra key. Nếu bạn muốn kiểm tra key, dùng array_key_exists().

// Kiểm tra tồn tại trong mảng nhiều chiều

$data = [
    ["id" => 1],
    ["id" => 2]
];

$found = false;
foreach ($data as $item) {
    if (in_array(2, $item)) {
        $found = true;
        break;
    }
}
