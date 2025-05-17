array_key_last(array $array): int|string|null
array_key_last() — Lấy key cuối cùng của mảng
Trả về:
Key cuối cùng trong mảng $array
Nếu mảng rỗng, trả về null

<?php
$arr = ["apple" => "red", "banana" => "yellow", "cherry" => "red"];

echo array_key_last($arr); // output: cherry
// Lưu ý:
// Key trả về có thể là int hoặc string tùy kiểu key trong mảng
// Trả về null nếu mảng rỗng

