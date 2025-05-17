end() trong PHP
Hàm end() dùng để di chuyển con trỏ nội bộ của mảng đến phần tử cuối cùng, và trả về giá trị của phần tử đó.

end(array &$array): mixed

$array: Mảng muốn thao tác.
Trả về:
Giá trị của phần tử cuối cùng
false nếu mảng rỗng.

<?php
$numbers = [10, 20, 30, 40];

$last = end($numbers);
echo $last; // 40

$person = [
    "name" => "Alice",
    "age" => 30,
    "city" => "Hanoi"
];

echo end($person); // Hanoi

end($person);
echo key($person); // city

// Lưu ý
// end() thay đổi con trỏ nội bộ của mảng → ảnh hưởng tới các hàm như current(), next(), prev().
// Nếu bạn chỉ muốn lấy phần tử cuối mà không thay đổi con trỏ, dùng hàm khác như:


$lastValue = array_slice($array, -1)[0];
