key_exists() trong PHP
Hàm key_exists() dùng để kiểm tra xem một key (khóa) có tồn tại trong một mảng hay không.

Tương tự như array_key_exists() — thực tế hai hàm giống hệt nhau, chỉ khác tên.

key_exists(string|int $key, array $array): bool

$key: Khóa cần kiểm tra (kiểu chuỗi hoặc số nguyên).
$array: Mảng cần kiểm tra.
Trả về true nếu key tồn tại, ngược lại false.

<?php
$user = [
    "name" => "Alice",
    "email" => "alice@example.com"
];

if (key_exists("email", $user)) {
    echo "Email tồn tại!";
}

$data = ["a" => null];

var_dump(isset($data["a"]));       // false
var_dump(key_exists("a", $data));  // true

// isset() trả về false nếu giá trị là null, còn key_exists() thì chỉ quan tâm đến tồn tại của key, không cần biết giá trị là gì.

$arr = [100 => "hello", 200 => "world"];

if (key_exists(100, $arr)) {
    echo "Key 100 tồn tại!";
}

// Ghi nhớ
// key_exists() hoạt động chỉ với mảng (khác với property_exists() dùng cho object).
// Dù array_key_exists() phổ biến hơn, key_exists() vẫn hoạt động tương tự.

