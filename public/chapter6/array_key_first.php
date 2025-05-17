array_key_first() — Lấy key đầu tiên của mảng
array_key_first(array $array): int|string|null


Trả về:
Key đầu tiên trong mảng $array
Nếu mảng rỗng, trả về null

<?php
$arr = ["apple" => "red", "banana" => "yellow", "cherry" => "red"];

echo array_key_first($arr); // output: apple
// Lưu ý:
// Key trả về có thể là int hoặc string tùy mảng
// Mảng phải không rỗng, nếu rỗng trả về null