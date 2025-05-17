array_shift() — Lấy và xoá phần tử đầu tiên của mảng
mixed array_shift(array &$array)

Tham số	    Kiểu	            Ý nghĩa
$array	    array (tham chiếu)	Mảng cần lấy và xoá phần tử đầu tiên

Kết quả:
Trả về giá trị phần tử đầu tiên của mảng
Xoá phần tử đó khỏi mảng gốc (thay đổi mảng)
Nếu mảng rỗng, trả về null

<?php
$queue = ["apple", "banana", "cherry"];

$first = array_shift($queue);
echo $first;  // apple

print_r($queue);

// apple
// Array
// (
//     [0] => banana
//     [1] => cherry
// )


// Lưu ý:
// Thường dùng như thao tác lấy phần tử đầu của hàng đợi (queue)
// Key của mảng sẽ được đánh lại từ 0 trở đi (cho mảng số nguyên)

