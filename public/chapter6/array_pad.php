array_pad() — Mở rộng (đệm) mảng đến độ dài nhất định bằng một giá trị cụ thể
array_pad(array $array, int $length, mixed $value): array
Tham số	    Kiểu	Ý nghĩa
$array	    array	Mảng gốc cần mở rộng
$length	    int	    Độ dài mong muốn của mảng:
                    - Số dương → thêm vào cuối
                    - Số âm → thêm vào đầu
$value	    mixed	Giá trị dùng để đệm (pad) vào mảng cho đến khi đạt độ dài yêu cầu


Kết quả:
Trả về mảng mới có độ dài đúng bằng $length
Nếu mảng đã có đủ hoặc dài hơn $length, mảng giữ nguyên
Nếu chưa đủ, các phần tử $value sẽ được thêm vào cho đủ

<?php
$input = [1, 2, 3];
$result = array_pad($input, 5, 0);
print_r($result);

// Array
// (
//     [0] => 1
//     [1] => 2
//     [2] => 3
//     [3] => 0
//     [4] => 0
// )


$input = ["a", "b"];
$result = array_pad($input, -4, "x");
print_r($result);

// Array
// (
//     [0] => x
//     [1] => x
//     [2] => a
//     [3] => b
// )

// Lưu ý:
// $length âm → đệm vào đầu
// $value có thể là bất kỳ kiểu dữ liệu nào (số, chuỗi, mảng, null,...)
// Không thay đổi mảng gốc — luôn trả về mảng mới
