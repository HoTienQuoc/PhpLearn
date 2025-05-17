array_sum() — Tính tổng tất cả các phần tử trong mảng số

float|int array_sum(array $array)


Tham số	    Kiểu	    Ý nghĩa
$array	    array	    Mảng chứa các số cần tính tổng

Kết quả:
Trả về tổng của tất cả các phần tử trong mảng
Nếu mảng rỗng, trả về 0
Các phần tử không phải số sẽ được chuyển thành số (ví dụ: chuỗi số)

<?php
$numbers = [1, 2, 3, 4, 5];
$total = array_sum($numbers);

echo $total;  // 15

$values = [1, "2", 3.5, "4.5abc"];
$total = array_sum($values);

echo $total;  // 11 (1 + 2 + 3.5 + 4.5)
