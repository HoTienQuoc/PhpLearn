array_key_exists() — Kiểm tra key có tồn tại trong mảng hay không

bool array_key_exists(mixed $key, array $array)
Tham số:
Tham số	Kiểu	Ý nghĩa
$key	mixed	Key cần kiểm tra (string hoặc int)
$array	array	Mảng cần kiểm tra key

Trả về:
true nếu key tồn tại trong mảng (bất kể value là gì, kể cả null)
false nếu key không tồn tại

<?php
$arr = ["a" => 1, "b" => null];

var_dump(array_key_exists("a", $arr)); // true
var_dump(array_key_exists("b", $arr)); // true
var_dump(array_key_exists("c", $arr)); // false

// Lưu ý:
// Khác với isset(), vì isset() trả về false 
//nếu value là null, còn array_key_exists() 
//vẫn trả về true

var_dump(isset($arr["b"])); // false vì value là null
var_dump(array_key_exists("b", $arr)); // true
