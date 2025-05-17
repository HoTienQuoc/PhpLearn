array_walk trong PHP
array_walk() là hàm dùng để duyệt qua từng phần tử của mảng (mảng một chiều) và gọi hàm callback với từng phần tử đó. Hàm callback có thể sửa giá trị trực tiếp vì giá trị được truyền theo tham chiếu.

array_walk(array &$array, callable $callback, mixed $userdata = null): bool

$array: Mảng cần duyệt (tham chiếu, có thể thay đổi).
$callback: Hàm callback nhận 2 hoặc 3 tham số:
function callback(&$value, $key, $userdata)
$value: giá trị phần tử (tham chiếu).
$key: key tương ứng.
$userdata: (tuỳ chọn) dữ liệu bổ sung.
$userdata: dữ liệu bổ sung truyền vào callback (tuỳ chọn).
Trả về true nếu thành công.

<?php
$fruits = ["apple", "banana", "cherry"];

array_walk($fruits, function(&$value, $key) {
    $value = strtoupper($value);
});

print_r($fruits);
// Array
// (
//     [0] => APPLE
//     [1] => BANANA
//     [2] => CHERRY
// )

array_walk($fruits, function(&$value, $key, $prefix) {
    $value = $prefix . $value;
}, "Fruit: ");

print_r($fruits);
// Array
// (
//     [0] => Fruit: APPLE
//     [1] => Fruit: BANANA
//     [2] => Fruit: CHERRY
// )

// Lưu ý
// array_walk không hỗ trợ mảng đa chiều (nếu mảng có con, nó sẽ không đi sâu vào mảng con).
// Nếu cần xử lý mảng đa chiều, dùng array_walk_recursive.



