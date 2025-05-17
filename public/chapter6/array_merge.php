array_merge() — Gộp hai hoặc nhiều mảng lại thành một mảng mới
array_merge(array ...$arrays): array

Tham số	Kiểu	Ý nghĩa
$arrays	array	Một hoặc nhiều mảng cần gộp

Kết quả:
Nếu key là số:
Các giá trị được thêm vào cuối mảng, key sẽ được đánh lại từ 0
Nếu key là chuỗi:
Nếu trùng key, giá trị sau sẽ ghi đè giá trị trước

<?php
$a = [1, 2];
$b = [3, 4];

$result = array_merge($a, $b);
print_r($result);

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
// )



$a = ["color" => "red", "size" => "M"];
$b = ["color" => "blue", "style" => "modern"];

$result = array_merge($a, $b);
print_r($result);

// Array
// (
//     [color] => blue     // bị ghi đè
//     [size] => M
//     [style] => modern
// )

// Lưu ý:
// Không giống array_merge_recursive(), key chuỗi trùng nhau sẽ bị ghi đè, không gộp thành mảng con
// Mảng kết quả sẽ đánh lại key số

