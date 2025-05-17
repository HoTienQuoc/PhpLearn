shuffle() trong PHP
Hàm shuffle() dùng để xáo trộn (randomize) các phần tử trong mảng, tức là làm thay đổi thứ tự các phần tử ngẫu nhiên.

shuffle(array &$array): bool

$array: Mảng cần xáo trộn (thay đổi trực tiếp).
Trả về true nếu thành công, false nếu thất bại.

<?php
$array = [1, 2, 3, 4, 5];

shuffle($array);

print_r($array);

// Array
// (
//     [0] => 4
//     [1] => 1
//     [2] => 3
//     [3] => 5
//     [4] => 2
// )

