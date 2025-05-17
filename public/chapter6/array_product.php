array_product() — Tính tích tất cả phần tử trong mảng
array_product(array $array): int|float

Tham số	Kiểu	Ý nghĩa
$array	array	Mảng các số (int/float) cần tính tích


Kết quả:
Trả về tích của tất cả các phần tử trong mảng
Nếu mảng rỗng, trả về 1

<?php
$numbers = [2, 4, 6];
$result = array_product($numbers);
echo $result;
// Kết quả: 48 (vì 2 × 4 × 6 = 48)

$numbers = [5, 0, 10];
echo array_product($numbers);
// Kết quả: 0 (vì có nhân với 0)

$numbers = [];
echo array_product($numbers);
// Kết quả: 1

// Lưu ý:
// Tự động bỏ qua phần tử không phải số (sẽ coi như 1 hoặc 0 tùy trường hợp ép kiểu)
// Có thể dùng với mảng chứa float



