array_flip() — Hoán đổi key và value trong mảng
<?php
$original = [
    "a" => "apple",
    "b" => "banana",
    "c" => "cherry"
];

$flipped = array_flip($original);

print_r($flipped);

// Array
// (
//     [apple] => a
//     [banana] => b
//     [cherry] => c
// )

?>
Lưu ý quan trọng:
Chỉ chấp nhận giá trị có thể dùng làm key, tức là string hoặc int.
Nếu value gốc bị trùng, key sau sẽ ghi đè key trước.

<?php
$array = ["a" => "fruit", "b" => "fruit"];

$result = array_flip($array);
print_r($result);
// Array
// (
//     [fruit] => b
// )
// ⚠️ Key "a" bị mất vì "fruit" trùng nhau → key "b" đè lên.


