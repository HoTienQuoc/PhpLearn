key() trong PHP
Hàm key() được dùng để lấy khóa (key) của phần tử hiện tại trong mảng — theo vị trí con trỏ nội bộ.

key(array|object $array): int|string|null|false

$array: Mảng đang thao tác.
Trả về:
key hiện tại (int hoặc string)
null nếu con trỏ nằm ngoài mảng
false nếu mảng rỗng hoặc không hợp lệ


<?php
$colors = [
    "a" => "red",
    "b" => "green",
    "c" => "blue"
];

echo key($colors); // a

$items = ["x" => 10, "y" => 20, "z" => 30];

echo key($items);        // x
next($items);
echo key($items);        // y
end($items);
echo key($items);        // z

$arr = [];

var_dump(key($arr)); // false

$names = ["John", "Jane", "Alice"];

while (key($names) !== null) {
    echo "Key: " . key($names) . ", Value: " . current($names) . "\n";
    next($names);
}
