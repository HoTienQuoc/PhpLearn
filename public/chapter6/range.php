range() trong PHP
Hàm range() dùng để tạo một mảng gồm các phần tử trong khoảng từ giá trị bắt đầu đến giá trị kết thúc, có thể là số hoặc ký tự.

range(mixed $start, mixed $end, int|float $step = 1): array

$start: Giá trị bắt đầu (số nguyên, số thực hoặc ký tự).
$end: Giá trị kết thúc.
$step (tùy chọn): Bước nhảy giữa các phần tử (mặc định là 1). Có thể là số âm để đếm ngược.


<?php
print_r(range(1, 5));

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 4
//     [4] => 5
// )

print_r(range('a', 'e'));
// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
//     [3] => d
//     [4] => e
// )

print_r(range(0, 10, 2));
// Array
// (
//     [0] => 0
//     [1] => 2
//     [2] => 4
//     [3] => 6
//     [4] => 8
//     [5] => 10
// )

print_r(range(5, 1, -1));
// Array
// (
//     [0] => 5
//     [1] => 4
//     [2] => 3
//     [3] => 2
//     [4] => 1
// )




