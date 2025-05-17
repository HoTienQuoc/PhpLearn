array_is_list() — Kiểm tra xem một mảng có phải là mảng dạng danh sách hay không (PHP 8.1+)
array_is_list(array $array): bool
Trả về:
true nếu mảng là danh sách liên tục với key số nguyên bắt đầu từ 0
false nếu không phải

<?php
$list = ["apple", "banana", "cherry"];
var_dump(array_is_list($list)); // true
