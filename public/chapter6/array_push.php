array_push() — Thêm một hoặc nhiều phần tử vào cuối mảng
array_push(array &$array, mixed ...$values): int

Tham số	    Kiểu	        Ý nghĩa
$array	    array	        Mảng gốc (tham chiếu)
$values	    mixed (nhiều)	Một hoặc nhiều giá trị cần thêm vào cuối


Kết quả:
Trả về số lượng phần tử trong mảng sau khi thêm
Thay đổi mảng gốc

<?php
$fruits = ["apple", "banana"];
array_push($fruits, "cherry", "mango");

print_r($fruits);

// Array
// (
//     [0] => apple
//     [1] => banana
//     [2] => cherry
//     [3] => mango
// )


// Ghi chú:
// Có thể dùng toán tử [] thay thế đơn giản hơn:
// $fruits[] = "grape";           // tương đương array_push($fruits, "grape");
// Nhưng array_push() hữu ích khi bạn cần thêm nhiều phần tử cùng lúc

