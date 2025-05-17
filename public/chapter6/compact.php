compact() trong PHP
Hàm compact() được dùng để tạo một mảng kết hợp từ các biến đã khai báo trước đó, dựa trên tên biến.

compact(mixed ...$var_names): array

$var_names: Danh sách tên biến (dưới dạng chuỗi) hoặc mảng tên biến.
Trả về một mảng kết hợp, trong đó:
key là tên biến
value là giá trị của biến đó

<?php
$name = "Alice";
$age = 30;
$city = "Hanoi";

$result = compact("name", "age", "city");

print_r($result);
// Array
// (
//     [name] => Alice
//     [age] => 30
//     [city] => Hanoi
// )

$first = "John";
$last = "Doe";
$info = ["first", "last"];

$result = compact($info);

print_r($result);
// Array
// (
//     [first] => John
//     [last] => Doe
//)

// Lưu ý
// Nếu biến không tồn tại, compact() sẽ bỏ qua nó (không lỗi).
// Phù hợp khi bạn cần đóng gói dữ liệu nhanh gọn để truyền vào hàm, trả về view, hoặc xuất JSON, v.v.

//Ứng dụng thực tế (ví dụ trong Laravel / API)
// Controller
$name = "Product A";
$price = 100;
return response()->json(compact("name", "price"));



