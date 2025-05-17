rsort() trong PHP
Hàm rsort() dùng để sắp xếp mảng theo giá trị theo thứ tự giảm dần (descending order) và đánh lại chỉ số (key) của mảng.

rsort(array &$array, int $flags = SORT_REGULAR): bool

$array: Mảng cần sắp xếp (thay đổi trực tiếp).
$flags (tuỳ chọn): Kiểu so sánh, ví dụ:
SORT_REGULAR (mặc định): so sánh bình thường.
SORT_NUMERIC: so sánh số học.
SORT_STRING: so sánh chuỗi.
SORT_NATURAL: so sánh theo thứ tự tự nhiên.
Có thể kết hợp với SORT_FLAG_CASE để không phân biệt hoa thường.
Trả về true nếu thành công, false nếu thất bại.

<?php
$array = [3, 1, 4, 2];

rsort($array);

print_r($array);

// Array
// (
//     [0] => 4
//     [1] => 3
//     [2] => 2
//     [3] => 1
// )

$array = ["Banana", "apple", "Cherry"];

rsort($array, SORT_STRING | SORT_FLAG_CASE);

print_r($array);

// Lưu ý
// rsort() đánh lại key, nghĩa là mảng kết quả sẽ có chỉ số bắt đầu từ 0 liên tiếp.
// Nếu muốn giữ key khi sắp xếp giảm dần, dùng arsort().
