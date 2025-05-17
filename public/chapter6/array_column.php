<?php
echo '<table border="1" cellpadding="8" cellspacing="0">';
echo '<tr>
        <th>Tham số</th>
        <th>Kiểu</th>
        <th>Ý nghĩa</th>
      </tr>';

echo '<tr>
        <td>$array</td>
        <td>array</td>
        <td>Mảng đầu vào (mảng các mảng hoặc đối tượng)</td>
      </tr>';

echo '<tr>
        <td>$column_key</td>
        <td>int hoặc string</td>
        <td>Tên hoặc chỉ số của cột muốn lấy dữ liệu</td>
      </tr>';

echo '<tr>
        <td>$index_key <i>(tùy chọn)</i></td>
        <td>int hoặc string</td>
        <td>Nếu được chỉ định, giá trị của cột này sẽ được dùng làm key cho mảng kết quả</td>
      </tr>';

echo '</table>';


$data = [
    ['id' => 1, 'name' => 'Alice', 'age' => 25],
    ['id' => 2, 'name' => 'Bob', 'age' => 30],
    ['id' => 3, 'name' => 'Charlie', 'age' => 22]
];

$names = array_column($data, 'name');

print_r($names);

echo "<br/>";
/*
Array
(
    [0] => Alice
    [1] => Bob
    [2] => Charlie
)
*/


$namesById = array_column($data, 'name', 'id');

print_r($namesById);
/*
Array
(
    [1] => Alice
    [2] => Bob
    [3] => Charlie
)
*/
echo "<br/>";


echo "Ghi chú:
Nếu \$column_key không tồn tại trong một phần tử con, giá trị sẽ bị bỏ qua.
Hàm cực kỳ hữu ích khi làm việc với dữ liệu từ cơ sở dữ liệu hoặc JSON dạng bảng.";