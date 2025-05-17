<?php
$data = ['apple', 'banana', 'apple', 'orange', 'banana', 'apple'];

$result = array_count_values($data);

print_r($result);
/*
Array
(
    [apple] => 3
    [banana] => 2
    [orange] => 1
)
*/
