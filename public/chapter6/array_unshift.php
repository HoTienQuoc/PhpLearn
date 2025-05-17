array_unshift trong PHP
array_unshift() là hàm dùng để chèn một hoặc nhiều phần tử vào đầu mảng. Các phần tử có sẵn sẽ dịch sang phải, và mảng sẽ được cập nhật ngay.

array_unshift(array &$array, mixed ...$values): int

$array: Mảng cần thêm phần tử (truyền theo tham chiếu – sẽ bị thay đổi).
$values: Một hoặc nhiều giá trị cần chèn vào đầu mảng.
📥 Trả về số lượng phần tử trong mảng sau khi thêm.


<?php
$fruits = ["banana", "apple"];
array_unshift($fruits, "mango");

print_r($fruits);
// Array
// (
//     [0] => mango
//     [1] => banana
//     [2] => apple
// )

$numbers = [3, 4, 5];
array_unshift($numbers, 0, 1, 2);

print_r($numbers);
// Array
// (
//     [0] => 0
//     [1] => 1
//     [2] => 2
//     [3] => 3
//     [4] => 4
//     [5] => 5
// )

// Lưu ý
// Hàm thay đổi mảng gốc, không tạo bản sao.
// Nếu mảng có key chuỗi, thì array_unshift() sẽ đánh lại chỉ mục số cho các phần tử mới (không bảo toàn key chuỗi đầu mảng).

$person = [
    "name" => "Alice",
    "age" => 25
];

array_unshift($person, "Developer");

print_r($person);
// Array
// (
//     [0] => Developer
//     [name] => Alice
//     [age] => 25
// )
//Giá trị "Developer" được chèn vào đầu mảng với key số 0.





