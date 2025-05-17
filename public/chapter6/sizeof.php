sizeof() trong PHP
Hàm sizeof() trong PHP là tên khác (alias) của hàm count() — dùng để đếm số lượng phần tử trong một mảng.

sizeof(array|Countable $value, int $mode = COUNT_NORMAL): int

$value: Mảng hoặc đối tượng triển khai Countable.
$mode (tuỳ chọn):
COUNT_NORMAL (mặc định): chỉ đếm phần tử ngoài cùng.
COUNT_RECURSIVE (hoặc 1): đếm đệ quy tất cả phần tử con trong mảng đa chiều.

<?php
$arr = [1, 2, 3, 4];

echo sizeof($arr); // 4

$arr = [1, [2, 3], 4];

echo sizeof($arr); // 3
echo sizeof($arr, COUNT_RECURSIVE); // 5 (đếm luôn cả 2 và 3 bên trong)

