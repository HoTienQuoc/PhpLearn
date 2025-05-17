array_reduce() — Rút gọn mảng thành 1 giá trị duy nhất bằng cách áp dụng hàm lặp
array_reduce(array $array, callable $callback, mixed $initial = null): mixed

Tham số	    Kiểu	    Ý nghĩa
$array	    array	    Mảng đầu vào cần rút gọn
$callback	callable	Hàm gọi lại với dạng function($carry, $item)
$initial	mixed	    Giá trị khởi tạo ban đầu cho biến tích lũy $carry (tùy chọn)

Kết quả:
Trả về giá trị cuối cùng sau khi rút gọn mảng
Nếu mảng rỗng:
Nếu có $initial → trả $initial
Nếu không → trả null

<?php
$numbers = [1, 2, 3, 4];

$sum = array_reduce($numbers, function($carry, $item) {
    return $carry + $item;
}, 0);

echo $sum; // 10


$words = ["Hello", "World", "!"];

$result = array_reduce($words, function($carry, $word) {
    return $carry . " " . $word;
});

echo trim($result); // Hello World !


$nums = [2, 3, 4];

$product = array_reduce($nums, function($carry, $item) {
    return $carry * $item;
});

echo $product; // 24 (vì mặc định carry là phần tử đầu tiên: 2)


// Lưu ý:
// Biến $carry là giá trị tích lũy, được truyền qua mỗi vòng lặp
// Không giống array_map (trả mảng), array_reduce() trả 1 giá trị duy nhất
