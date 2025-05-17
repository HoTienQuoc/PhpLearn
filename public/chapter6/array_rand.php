array_rand() — Lấy một hoặc nhiều key ngẫu nhiên từ mảng<br/>
array_rand(array $array, int $num = 1): int|string|array<br/>

Tham số	    Kiểu	Ý nghĩa<br/>
$array	    array	Mảng cần rút key ngẫu nhiên<br/>
$num	    int	    Số lượng key cần lấy (mặc định là 1)<br/>

Kết quả:<br/>
Nếu $num = 1 → Trả về 1 key duy nhất (int|string)<br/>
Nếu $num > 1 → Trả về mảng chứa các key ngẫu nhiên (kiểu array)<br/>
Nếu $num > count($array) → Báo lỗi<br/>
<br/>

<?php

$colors = ["red", "green", "blue", "yellow"];
$key = array_rand($colors);
echo $key . ': ' . $colors[$key];

echo "<br/>";

$colors = ["a" => "red", "b" => "green", "c" => "blue"];
$keys = array_rand($colors, 3);

foreach ($keys as $k) {
    echo $k . ': ' . $colors[$k] . PHP_EOL;
}
