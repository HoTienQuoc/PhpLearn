array_walk_recursive trong PHP
array_walk_recursive() là hàm dùng để duyệt qua tất cả các phần tử trong mảng đa chiều, áp dụng một hàm callback lên từng phần tử (bao gồm cả phần tử trong mảng con lồng nhau).

array_walk_recursive(array &$array, callable $callback, mixed $userdata = null): bool
$array: Mảng đa chiều cần duyệt (truyền tham chiếu, nên mảng gốc có thể bị thay đổi).
$callback: Hàm gọi cho mỗi phần tử, dạng:
function callback(&$value, $key, $userdata)
$value: giá trị phần tử (tham chiếu, có thể thay đổi).
$key: key tương ứng của phần tử.
$userdata: (tuỳ chọn) dữ liệu bổ sung truyền vào callback.
$userdata: dữ liệu bổ sung truyền vào callback (tuỳ chọn).
Trả về true nếu thành công.

<?php
$array = [
    "a" => 1,
    "b" => [
        "b1" => 2,
        "b2" => 3
    ],
    "c" => 4
];

array_walk_recursive($array, function(&$value, $key) {
    $value = $value * 2;
});

print_r($array);
// Array
// (
//     [a] => 2
//     [b] => Array
//         (
//             [b1] => 4
//             [b2] => 6
//         )
//     [c] => 8
// )

array_walk_recursive($array, function(&$value, $key, $prefix) {
    $value = $prefix . $value;
}, "Val: ");

print_r($array);
// Array
// (
//     [a] => Val: 2
//     [b] => Array
//         (
//             [b1] => Val: 4
//             [b2] => Val: 6
//         )
//     [c] => Val: 8
// )

// Lưu ý
// Hàm callback được gọi với từng phần tử đơn, kể cả trong các mảng con lồng nhau.
// Có thể thay đổi giá trị phần tử trực tiếp vì $value được truyền theo tham chiếu.

