natsort() trong PHP
Hàm natsort() dùng để sắp xếp mảng theo thứ tự “tự nhiên” (natural order), giống như cách con người sắp xếp, phân biệt chữ hoa/thường.

Giải thích

“Natural order” nghĩa là số trong chuỗi được so sánh theo giá trị số, ví dụ "file2" đứng trước "file10".
natsort() sẽ giữ nguyên key (sắp xếp theo value nhưng không thay đổi key).

natsort(array &$array): bool

$array: Mảng cần sắp xếp (thay đổi trực tiếp).
Trả về true nếu thành công, false nếu thất bại.

<?php
$files = ["img12.png", "img10.png", "img2.png", "img1.png"];

natsort($files);

print_r($files);
// Array
// (
//     [3] => img1.png
//     [2] => img2.png
//     [1] => img10.png
//     [0] => img12.png
// )

// Lưu ý
// Nếu muốn mảng sau sắp xếp có key mới (0,1,2,...), bạn có thể dùng array_values()
// natsort($files);
// $files = array_values($files);


