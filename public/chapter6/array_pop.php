array_pop() — Xoá phần tử cuối cùng của mảng và trả về giá trị đó
mixed array_pop(array &$array)
Tham số	    Kiểu	            Ý nghĩa
$array	    array (tham chiếu)	Mảng cần xoá phần tử cuối

Kết quả:
Trả về giá trị của phần tử cuối cùng bị xoá
Nếu mảng rỗng, trả về null
Thay đổi mảng gốc

<?php
$stack = ["apple", "banana", "cherry"];
$last = array_pop($stack);

echo $last;     // cherry
print_r($stack);

// cherry
// Array
// (
//     [0] => apple
//     [1] => banana
// )

// Lưu ý:
// Làm việc giống như pop trong stack (ngăn xếp)
// Mảng phải là kiểu tuần tự (số nguyên), dùng với key chuỗi cũng được nhưng không phổ biến

