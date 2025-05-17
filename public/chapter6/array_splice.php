array_splice() — Cắt, thay thế, hoặc xoá phần tử trong mảng
array_splice(array &$array, int $offset, int|null $length = null, mixed $replacement = [])

Tham số	        Kiểu	            Ý nghĩa
$array	        array (tham chiếu)	Mảng gốc sẽ bị thay đổi
$offset	        int	                Vị trí bắt đầu thao tác (âm để đếm từ cuối mảng)
$length	        int | null	        Số phần tử muốn xoá (mặc định là đến hết mảng nếu không khai báo)
$replacement	mixed	            Mảng hoặc phần tử dùng để thay thế phần bị xoá (có thể không dùng nếu chỉ muốn xoá)


Kết quả:
Trả về mảng các phần tử bị xoá từ mảng gốc
Mảng gốc sẽ bị thay đổi: phần tử bị xoá được thay thế bằng $replacement (nếu có)

<?php
$arr = ['a', 'b', 'c', 'd', 'e'];
$removed = array_splice($arr, 1, 2);

print_r($removed); // ['b', 'c']
print_r($arr);     // ['a', 'd', 'e']

$arr = ['a', 'b', 'c', 'd', 'e'];
array_splice($arr, 1, 2, ['x', 'y']);

print_r($arr); // ['a', 'x', 'y', 'd', 'e']

$arr = ['a', 'b', 'c'];
array_splice($arr, 1, 0, ['x', 'y']);

print_r($arr); // ['a', 'x', 'y', 'b', 'c']

// Lưu ý:
// $array là tham chiếu nên mảng gốc thay đổi
// Dùng để thao tác phức tạp với mảng như xoá, chèn hoặc thay thế một phần mảng

