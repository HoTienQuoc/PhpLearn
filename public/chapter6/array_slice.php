array_slice() — Lấy một phần của mảng theo vị trí và độ dài
array array_slice(array $array, int $offset, int|null $length = null, bool $preserve_keys = false)

Tham số	        Kiểu	    Ý nghĩa
$array	        array	    Mảng gốc
$offset	        int	        Vị trí bắt đầu lấy phần tử (có thể âm để đếm từ cuối mảng)
$length	        int | null	Số phần tử muốn lấy (mặc định lấy đến cuối mảng nếu không khai báo)
$preserve_keys	bool	    Nếu true, giữ nguyên key; nếu false (mặc định), key sẽ được đánh lại từ 0

Kết quả:
Trả về mảng con lấy từ mảng gốc theo $offset và $length
Mảng gốc không thay đổi

<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$slice = array_slice($arr, 0, 3);

print_r($slice);
// Array
// (
//     [0] => a
//     [1] => b
//     [2] => c
// )

$arr = ['a', 'b', 'c', 'd', 'e'];
$slice = array_slice($arr, -2);

print_r($slice);
// Array
// (
//     [0] => d
//     [1] => e
// )

$arr = ['x' => 'a', 'y' => 'b', 'z' => 'c'];
$slice = array_slice($arr, 1, 2, true);

print_r($slice);
// Array
// (
//     [y] => b
//     [z] => c
// )

// Lưu ý:
// $offset âm để lấy từ cuối mảng
// $length có thể âm để bỏ bớt phần tử cuối


