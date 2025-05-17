natcasesort() trong PHP
Hàm natcasesort() dùng để sắp xếp mảng theo thứ tự "tự nhiên" (natural order), không phân biệt chữ hoa thường (case-insensitive).

Giải thích
Natural order sorting nghĩa là sắp xếp kiểu "con số trong chuỗi được so sánh theo giá trị số", ví dụ "img2" đứng trước "img10".
Hàm này giữ nguyên key (mảng được sắp xếp theo value nhưng key vẫn giữ).
So sánh không phân biệt chữ hoa/thường.

natcasesort(array &$array): bool
$array: Mảng cần sắp xếp (thay đổi trực tiếp).
Trả về true nếu thành công, false nếu thất bại.

<?php
$files = ["img12.png", "img10.png", "img2.png", "img1.png"];

natcasesort($files);

print_r($files);
// Array
// (
//     [3] => img1.png
//     [2] => img2.png
//     [1] => img10.png
//     [0] => img12.png
// )

// Lưu ý
// Mảng sau khi sắp xếp vẫn giữ key ban đầu (key không được sắp xếp lại).
// Nếu bạn muốn mảng chỉ số được đánh lại key (0,1,2,...) sau sắp xếp, dùng sort() hoặc array_values().


