array_intersect() — So sánh giá trị của các mảng, bỏ qua key

array_intersect(array $array1, array $array2, array ...$arrays): array

Kết quả:
Trả về một mảng gồm các giá trị có trong $array1 và cũng xuất hiện trong tất cả các mảng còn lại
Key giữ lại từ $array1

<?php
$array1 = ["a" => "green", "b" => "blue", "c" => "red"];
$array2 = ["green", "yellow", "red"];

$result = array_intersect($array1, $array2);
print_r($result);
// Array
// (
//     [a] => green
//     [c] => red
// )


$array1 = ["a" => "apple", "b" => "banana", "c" => "cherry"];
$array2 = ["apple", "banana", "lemon"];
$array3 = ["banana", "apple", "grape"];

$result = array_intersect($array1, $array2, $array3);
print_r($result);
// Array
// (
//     [a] => apple
//     [b] => banana
// )

