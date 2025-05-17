array_map() — Áp dụng một hàm lên từng phần tử của mảng (hoặc nhiều mảng)
array_map(callable $callback, array $array1, array ...$arrays): array

Tham số	        Kiểu	    Ý nghĩa
$callback	    callable	Hàm được áp dụng lên từng phần tử
$array1	        array	    Mảng đầu tiên
$arrays	        array...	Các mảng tiếp theo (nếu có)

Kết quả:
Trả về mảng mới, với từng phần tử được xử lý qua $callback
Nếu có nhiều mảng, $callback nhận nhiều tham số tương ứng từ từng mảng


<?php
$arr = [1, 2, 3, 4];
$result = array_map(fn($x) => $x * 2, $arr);
print_r($result);

// Array
// (
//     [0] => 2
//     [1] => 4
//     [2] => 6
//     [3] => 8
// )

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$result = array_map(fn($a, $b) => $a + $b, $arr1, $arr2);
print_r($result);

// Array
// (
//     [0] => 5
//     [1] => 7
//     [2] => 9
// )


// Lưu ý:
// Nếu các mảng có độ dài khác nhau, phần tử của mảng ngắn hơn sẽ được truyền là null cho $callback
// Hàm $callback nên chuẩn bị xử lý giá trị null nếu cần

