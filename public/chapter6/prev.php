prev() trong PHP
Hàm prev() dùng để di chuyển con trỏ nội bộ của mảng về phần tử trước đó và trả về giá trị của phần tử đó.

prev(array &$array): mixed

$array: Mảng cần thao tác.
Trả về:
Giá trị phần tử trước đó nếu còn.
false nếu đã ở đầu mảng hoặc mảng rỗng.

<?php
$colors = ["red", "green", "blue"];

// Di chuyển con trỏ đến phần tử cuối cùng
end($colors); // con trỏ ở "blue"

echo current($colors); // blue

prev($colors);
echo current($colors); // green

prev($colors);
echo current($colors); // red

var_dump(prev($colors)); // false (đã ở đầu mảng)

$arr = ["a", "b", "c"];

end($arr); // đặt con trỏ về cuối mảng

while (($val = current($arr)) !== false) {
    echo $val . "\n";
    prev($arr); // dịch con trỏ về trước
}

