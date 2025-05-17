array_replace() — Thay thế các phần tử của mảng bằng phần tử của mảng khác (không đệ quy)
array_replace(array $array, array ...$replacements): array

Tham số	        Kiểu	    Ý nghĩa
$array	        array	    Mảng gốc
$replacements	array[]	    Một hoặc nhiều mảng dùng để thay thế

Cách hoạt động:
Thay thế trực tiếp phần tử trong mảng gốc bằng phần tử tương ứng ở mảng thay thế theo key
Không xử lý đệ quy (không thay thế sâu bên trong các mảng con)
Trả về mảng mới sau khi thay thế

<?php
$array1 = [
    'color' => ['favorite' => 'red', 5],
    'size' => 'medium',
];

$array2 = [
    'color' => ['favorite' => 'green', 'blue'],
    'shape' => 'circle',
];

$result = array_replace($array1, $array2);

print_r($result);

// Array
// (
//     [color] => Array
//         (
//             [0] => favorite
//             [1] => green
//             [2] => blue
//         )

//     [size] => medium
//     [shape] => circle
// )

// Lưu ý: Vì không đệ quy, phần tử 'color' bị thay thế hoàn toàn bởi mảng trong $array2.

