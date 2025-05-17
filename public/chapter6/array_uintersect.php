array_uintersect trong PHP là hàm dùng để lấy giao giữa các mảng (intersection) dựa trên giá trị, và việc so sánh giá trị được thực hiện bằng một hàm callback do người dùng định nghĩa.
array_uintersect(array $array1, array $array2, array ...$arrays, callable $callback): array

$array1: Mảng đầu tiên.
$array2, ...$arrays: Các mảng còn lại để so sánh.
$callback: Hàm callback dùng để so sánh giá trị (value). Hàm nhận 2 tham số, trả về:
< 0 nếu phần tử thứ nhất nhỏ hơn phần tử thứ hai.
0 nếu 2 phần tử bằng nhau.
> 0 nếu phần tử thứ nhất lớn hơn phần tử thứ hai.

Đặc điểm

So sánh chỉ dựa trên giá trị, không xét key.
Các phần tử giữ nguyên key của $array1 trong kết quả trả về.
Trả về các phần tử có giá trị tồn tại trong tất cả các mảng khác theo cách so sánh hàm callback.

<?php
$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];

$result = array_uintersect($array1, $array2, function($a, $b) {
    return $a - $b;
});

print_r($result);
// Array
// (
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )


$array1 = [1, 2, 3, 4, 5, 6];
$array2 = [2, 3, 4, 10];
$array3 = [0, 2, 4, 6, 8];

$result = array_uintersect($array1, $array2, $array3, function($a, $b) {
    return $a <=> $b; // So sánh số (giống $a - $b nhưng an toàn hơn)
});

print_r($result);
// Array
// (
//     [1] => 2
//     [3] => 4
// )

