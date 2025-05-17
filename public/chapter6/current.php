current() trong PHP
Hàm current() được dùng để lấy giá trị hiện tại (vị trí con trỏ) trong một mảng mà không làm thay đổi con trỏ.

current(array|object $array): mixed

$array: Mảng mà bạn muốn lấy phần tử hiện tại.
Trả về:
Giá trị phần tử hiện tại.
false nếu con trỏ ở ngoài mảng (ví dụ: mảng rỗng, hoặc đã đi đến cuối mảng).

<?php
$fruits = ["apple", "banana", "cherry"];

echo current($fruits); // apple

$numbers = [10, 20, 30, 40];

echo current($numbers); // 10
next($numbers);
echo current($numbers); // 20
end($numbers);
echo current($numbers); // 40
reset($numbers);
echo current($numbers); // 10

$array = [1, 2, 3];
while (($value = current($array)) !== false) {
    echo $value . "\n";
    next($array);
}

// Lưu ý
// current() không di chuyển con trỏ — chỉ lấy giá trị hiện tại.
// Nếu mảng rỗng hoặc con trỏ đang ở ngoài phạm vi mảng, trả về false.

