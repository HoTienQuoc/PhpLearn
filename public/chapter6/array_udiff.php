array_udiff() — So sánh các phần tử trong mảng sử dụng hàm so sánh người dùng định nghĩa (chỉ so sánh giá trị)
array_udiff(array $array1, array $array2, array ...$arrays, callable $callback): array

$array1: Mảng cần so sánh.
$array2, ...$arrays: Một hoặc nhiều mảng khác để so sánh.
$callback: Hàm callback dùng để so sánh hai phần tử. Hàm này phải nhận 2 tham số và trả về:
< 0 nếu phần tử thứ nhất nhỏ hơn phần tử thứ hai.
0 nếu hai phần tử bằng nhau.
> 0 nếu phần tử thứ nhất lớn hơn phần tử thứ hai.


Cách hoạt động:
So sánh giá trị các phần tử của $array1 với các phần tử trong các mảng còn lại
Sử dụng hàm so sánh do người dùng định nghĩa để so sánh giá trị
Trả về mảng gồm các phần tử của $array1 mà không tồn tại trong các mảng còn lại (theo so sánh giá trị)

<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$result = array_udiff($array1, $array2, function($a, $b) {
    return $a - $b;
});

print_r($result);

// Array
// (
//     [0] => 1
//     [1] => 2
// )


