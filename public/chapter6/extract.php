extract() trong PHP
Hàm extract() được dùng để chuyển các phần tử trong một mảng kết hợp thành các biến riêng biệt, với tên biến chính là key của mảng.

extract(array &$array, int $flags = EXTR_OVERWRITE, string $prefix = ""): int

$array: Mảng kết hợp cần "giải nén".
$flags (tuỳ chọn): Cách xử lý nếu biến trùng tên:
EXTR_OVERWRITE (mặc định): Ghi đè biến đã tồn tại.
EXTR_SKIP: Bỏ qua nếu biến đã tồn tại.
EXTR_PREFIX_SAME: Thêm tiền tố nếu biến trùng.
EXTR_PREFIX_ALL: Thêm tiền tố cho tất cả.
EXTR_IF_EXISTS: Chỉ gán nếu biến đã tồn tại.
$prefix: Tiền tố dùng khi có cờ EXTR_PREFIX_*.
Trả về số lượng biến được tạo.

<?php
$data = [
    "name" => "Alice",
    "age" => 30
];

extract($data);

echo $name; // Alice
echo $age;  // 30


$name = "Bob";

$data = [
    "name" => "Alice",
    "city" => "Hanoi"
];

extract($data, EXTR_SKIP);

echo $name; // Bob (không bị ghi đè)
echo $city; // Hanoi


$data = [
    "id" => 123,
    "name" => "Product A"
];

extract($data, EXTR_PREFIX_ALL, "prod");

echo $prod_id;   // 123
echo $prod_name; // Product A

// CẢNH BÁO BẢO MẬT
// Tránh dùng extract() với dữ liệu do người dùng nhập vào (ví dụ: $_GET, $_POST) vì dễ gây ghi đè biến nhạy cảm.
// Dùng extract() tốt nhất trong các trường hợp kiểm soát được dữ liệu nội bộ, như trong template view.

