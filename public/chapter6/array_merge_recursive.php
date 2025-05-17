array_merge_recursive() — Gộp nhiều mảng lại với nhau đệ quy, giữ tất cả giá trị nếu key trùng
array_merge_recursive(array ...$arrays): array
Tham số	Kiểu	Ý nghĩa
$arrays	array	Một hoặc nhiều mảng để gộp lại

Kết quả:
Nếu key khác nhau → giống array_merge()
Nếu key giống nhau:
Key dạng số → các giá trị được thêm vào mảng kết quả (giống array_merge)
Key dạng chuỗi → các giá trị sẽ được gộp thành mảng con

<?php
$a = ["color" => "red", "value" => "5"];
$b = ["color" => "blue", "size" => "large"];

$result = array_merge_recursive($a, $b);
print_r($result);

// Array
// (
//     [color] => Array
//         (
//             [0] => red
//             [1] => blue
//         )

//     [value] => 5
//     [size] => large
// )

$a = [10, 20];
$b = [30, 40];

$result = array_merge_recursive($a, $b);
print_r($result);
// Array
// (
//     [0] => 10
//     [1] => 20
//     [2] => 30
//     [3] => 40
// )



