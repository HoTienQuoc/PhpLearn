reset() trong PHP
Hàm reset() dùng để đặt con trỏ nội bộ của mảng về phần tử đầu tiên và trả về giá trị của phần tử đó.

reset(array &$array): mixed

$array: Mảng cần thao tác (truyền tham chiếu).
Trả về:
Giá trị phần tử đầu tiên của mảng.
false nếu mảng rỗng.


<?php
$colors = ["red", "green", "blue"];

next($colors); // con trỏ sang phần tử "green"
echo current($colors); // green

reset($colors); // con trỏ về phần tử đầu tiên
echo current($colors); // red


$arr = ["a", "b", "c"];

reset($arr); // bắt đầu từ đầu mảng

while (($val = current($arr)) !== false) {
    echo $val . "\n";
    next($arr);
}
