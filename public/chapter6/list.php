list() trong PHP
list() là cú pháp dùng để gán các phần tử của mảng vào từng biến một cách tuần tự. Nói cách khác, nó giúp phân rã mảng thành các biến riêng biệt theo thứ tự index.

list($var1, $var2, $var3, ...) = $array;

$array: Mảng chỉ số (index) cần lấy giá trị.
Biến $var1, $var2, ... sẽ được gán giá trị tương ứng từ mảng theo vị trí index.


<?php
$data = ["Apple", "Banana", "Cherry"];

list($fruit1, $fruit2, $fruit3) = $data;

echo $fruit1; // Apple
echo $fruit2; // Banana
echo $fruit3; // Cherry

$data = ["Red", "Green", "Blue"];

list(, $secondColor, ) = $data;

echo $secondColor; // Green

$data = ["a" => 1, "b" => 2, "c" => 3];

list("a" => $x, "b" => $y) = $data;

echo $x; // 1
echo $y; // 2

// Lưu ý
// list() chỉ hoạt động với mảng chỉ số (index-based arrays).
// Với mảng kết hợp, chỉ từ PHP 7.1 trở lên mới hỗ trợ cú pháp gán key.
// Không hoạt động tốt với mảng đa chiều nếu không dùng lồng list().


$data = [
    [1, 2],
    [3, 4]
];

// Lấy phần tử theo cấu trúc mảng
list(
    list($a, $b),
    list($c, $d)
) = $data;

echo $a; // 1
echo $b; // 2
echo $c; // 3
echo $d; // 4


$data = [
    "fruits" => ["apple", "banana"],
    "vegetables" => ["carrot", "lettuce"]
];

list(
    "fruits" => list($fruit1, $fruit2),
    "vegetables" => list($veg1, $veg2)
) = $data;

echo $fruit1; // apple
echo $veg2;   // lettuce
