array_multisort() — Sắp xếp nhiều mảng cùng lúc, hoặc mảng đa chiều theo nhiều tiêu chí
array_multisort(array &$array1, mixed $array1_sort_order = SORT_ASC, mixed $array1_sort_flags = SORT_REGULAR, ...): bool
Tham số	            Kiểu	            Ý nghĩa
$array1	            array (tham chiếu)	Mảng đầu tiên cần sắp xếp (bắt buộc)
$array1_sort_order	hằng số (tùy chọn)	Thứ tự sắp xếp: SORT_ASC (tăng), SORT_DESC (giảm)
$array1_sort_flags	hằng số (tùy chọn)	Kiểu so sánh: SORT_REGULAR, SORT_NUMERIC, SORT_STRING, v.v.
...	                array/hằng số	    Các mảng tiếp theo và tùy chọn thứ tự/kiểu sắp xếp tương ứng

Giá trị hằng số có thể dùng:
Thứ tự sắp xếp:
SORT_ASC (tăng dần)
SORT_DESC (giảm dần)
Kiểu so sánh:
SORT_REGULAR (mặc định, so sánh bình thường)
SORT_NUMERIC (so sánh số)
SORT_STRING (so sánh chuỗi)
SORT_NATURAL (so sánh kiểu tự nhiên như Windows Explorer)
SORT_FLAG_CASE (phân biệt hoa thường khi dùng với SORT_STRING)

<?php
$names = ["John", "Alice", "Bob"];
$ages  = [25, 30, 20];

array_multisort($ages, SORT_ASC, $names);

print_r($ages);
print_r($names);

// Array
// (
//     [0] => 20
//     [1] => 25
//     [2] => 30
// )
// Array
// (
//     [0] => Bob
//     [1] => John
//     [2] => Alice
// )


$data = [
    ['name' => 'John', 'age' => 25],
    ['name' => 'Alice', 'age' => 30],
    ['name' => 'Bob', 'age' => 20],
];

$names = array_column($data, 'name');
$ages = array_column($data, 'age');

array_multisort($ages, SORT_ASC, $names, SORT_ASC, $data);

print_r($data);

// Array
// (
//     [0] => Array
//         (
//             [name] => Bob
//             [age] => 20
//         )

//     [1] => Array
//         (
//             [name] => John
//             [age] => 25
//         )

//     [2] => Array
//         (
//             [name] => Alice
//             [age] => 30
//         )
// )


// Lưu ý:
// Hàm thay đổi mảng gốc (tham chiếu), không trả về mảng mới
// Thường dùng kết hợp với array_column() để sắp xếp mảng đa chiều
