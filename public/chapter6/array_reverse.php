array_reverse() — Đảo ngược thứ tự phần tử trong mảng
array_reverse(array $array, bool $preserve_keys = false): array

Tham số	        Kiểu	Ý nghĩa
$array	        array	Mảng cần đảo ngược
$preserve_keys	bool	Nếu là true, giữ nguyên key ban đầu; nếu false (mặc định), key sẽ được đánh lại từ 0

Kết quả:
Trả về mảng mới với thứ tự phần tử đảo ngược so với mảng gốc
Mảng gốc không thay đổi

<?php
$input = ["a", "b", "c", "d"];
$result = array_reverse($input);

print_r($result);

// Array
// (
//     [0] => d
//     [1] => c
//     [2] => b
//     [3] => a
// )

$input = ["a" => 1, "b" => 2, "c" => 3];
$result = array_reverse($input, true);

print_r($result);

// Array
// (
//     [c] => 3
//     [b] => 2
//     [a] => 1
// )

// Lưu ý:
// Nếu không giữ key, mảng kết quả sẽ đánh lại key từ 0,1,2,...
// Rất hữu ích khi cần đảo thứ tự các phần tử trong mảng mà không thay đổi key (nếu cần)

