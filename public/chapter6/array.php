Từ khóa array trong PHP đại diện cho mảng — cấu trúc dữ liệu rất phổ biến để lưu trữ nhiều giá trị dưới dạng một tập hợp.

Tổng quan về mảng trong PHP

Mảng có thể chứa nhiều giá trị với các kiểu dữ liệu khác nhau.
Mảng có thể là mảng số (key là số tự động tăng), hoặc mảng kết hợp (key có thể là số hoặc chuỗi).
Mảng trong PHP rất linh hoạt và được sử dụng rộng rãi trong mọi loại ứng dụng.

<?php
$fruits = array("apple", "banana", "cherry");
// Hoặc dùng cú pháp ngắn
$fruits = ["apple", "banana", "cherry"];
$person = [
    "name" => "Alice",
    "age" => 30,
    "city" => "Hanoi"
];
echo $fruits[1];     // banana
echo $person["name"]; // Alice

