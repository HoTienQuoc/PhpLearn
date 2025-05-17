<?php
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>Tham số</th>
        <th>Kiểu</th>
        <th>Ý nghĩa</th>
      </tr>";

echo "<tr>
        <td>\$array</td>
        <td>array</td>
        <td>Mảng đầu vào cần chia</td>
      </tr>";

echo "<tr>
        <td>\$length</td>
        <td>int</td>
        <td>Số phần tử trong mỗi mảng con</td>
      </tr>";

echo "<tr>
        <td>\$preserve_keys <i>(tùy chọn)</i></td>
        <td>bool</td>
        <td>Nếu đặt là <code>true</code>, giữ nguyên key ban đầu; nếu <code>false</code> (mặc định), key sẽ được đánh lại từ 0</td>
      </tr>";

echo "</table><br/>";

echo "False <br/>";

$input = array('a', 'b', 'c', 'd', 'e');
$result = array_chunk($input, 2);

print_r($result);
/*
Array
(
    [0] => Array ( [0] => a [1] => b )
    [1] => Array ( [0] => c [1] => d )
    [2] => Array ( [0] => e )
)
*/
echo "<br/>";
echo "True <br/>";

$input = array('a', 'b', 'c', 'd', 'e');
$result = array_chunk($input, 2, true);

print_r($result);
/*
Array
(
    [0] => Array ( [0] => a [1] => b )
    [1] => Array ( [2] => c [3] => d )
    [2] => Array ( [4] => e )
)
*/
