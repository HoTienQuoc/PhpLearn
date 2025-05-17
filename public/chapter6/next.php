next() trong PHP
Hàm next() dùng để di chuyển con trỏ nội bộ của mảng tới phần tử tiếp theo và trả về giá trị của phần tử đó.

next(array &$array): mixed

$array: Mảng cần thao tác.
Trả về:
Giá trị phần tử tiếp theo nếu còn.
false nếu đã đi hết mảng hoặc mảng rỗng.

<?php
$colors = ["red", "green", "blue"];

echo current($colors); // red

next($colors);
echo current($colors); // green

next($colors);
echo current($colors); // blue

next($colors);
var_dump(current($colors)); // false (đã hết mảng)


$arr = ["a", "b", "c"];

while (($val = current($arr)) !== false) {
    echo $val . "\n";
    next($arr);
}
