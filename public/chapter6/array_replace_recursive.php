array_replace_recursive() — Thay thế các phần tử của mảng đệ quy bằng các phần tử của mảng khác
array_replace_recursive(array $array, array ...$replacements): array

Tham số	        Kiểu	    Ý nghĩa
$array	        array	    Mảng gốc
$replacements	array[]	    Các mảng bổ sung dùng để thay thế (có thể nhiều mảng)


Cách hoạt động:
Duyệt từng phần tử của mảng gốc và mảng thay thế:
Nếu phần tử là mảng, đệ quy thay thế phần tử con
Nếu không phải mảng, thay thế trực tiếp giá trị
Trả về mảng mới sau khi thay thế
Không làm thay đổi mảng gốc

<?php
$array1 = [
    'color' => ['favorite' => 'red', 5],
    'size' => 'medium',
];

$array2 = [
    'color' => ['favorite' => 'green', 'blue'],
    'shape' => 'circle',
];

$result = array_replace_recursive($array1, $array2);

print_r($result);

// Array
// (
//     [color] => Array
//         (
//             [favorite] => green
//             [0] => 5
//             [1] => blue
//         )

//     [size] => medium
//     [shape] => circle
// )

// Lưu ý:
// Nếu phần tử tương ứng trong cả hai mảng đều là mảng, sẽ được thay thế đệ quy
// Nếu phần tử không phải mảng, giá trị trong mảng thay thế sẽ ghi đè
