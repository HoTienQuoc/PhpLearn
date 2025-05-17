<?php
$keys = ['name', 'age', 'country'];
$values = ['Alice', 25, 'Vietnam'];

$result = array_combine($keys, $values);

print_r($result);
/*
Array
(
    [name] => Alice
    [age] => 25
    [country] => Vietnam
)
*/
