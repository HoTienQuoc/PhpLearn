count() trong PHP
Hàm count() dùng để đếm số phần tử trong một mảng hoặc số thuộc tính của một đối tượng (nếu dùng kiểu Countable).

count(mixed $value, int $mode = COUNT_NORMAL): int
$value: Mảng (hoặc đối tượng Countable) cần đếm.
$mode (tuỳ chọn):
COUNT_NORMAL (mặc định): chỉ đếm phần tử cấp 1.
COUNT_RECURSIVE (hoặc 1): đếm đệ quy tất cả phần tử kể cả mảng con.

<?php
$fruits = ["apple", "banana", "cherry"];
echo count($fruits); // 3

$data = [
    "a" => 1,
    "b" => [2, 3],
    "c" => 4
];

echo count($data); // 3
echo count($data, COUNT_RECURSIVE); // 5 (1, [2,3], 4 → 2 + 1 + 1 = 5)

class MyData implements Countable {
    private $items = [1, 2, 3];

    public function count(): int {
        return count($this->items);
    }
}

$obj = new MyData();
echo count($obj); // 3

// Lưu ý
// Nếu truyền một biến không phải mảng hoặc Countable, count() trả về 1 (nếu không null) hoặc 0 (nếu null).
// Để tránh lỗi khi biến chưa được khai báo, dùng isset() trước:

if (isset($arr) && is_array($arr)) {
    echo count($arr);
}
